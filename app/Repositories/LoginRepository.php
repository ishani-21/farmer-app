<?php

namespace App\Repositories;

use App\Contracts\LoginContract;
use App\Models\FarmerUser;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class LoginRepository implements LoginContract
{
   public function create(array $data)
   {
      DB::beginTransaction();
      try {
         $otp = mt_rand(1000, 9999);
         $user_data = FarmerUser::where('raw_mobile', $data['mobile'])->first();
         if ($user_data) {
            $user_data->raw_otp = $otp;
            $user_data->save();
            DB::commit();
            return $user_data;
         } else {
            $user = new FarmerUser();
            $user->raw_mobile = $data['mobile'];
            $user->raw_otp = $otp;
            $user->save();
            DB::commit();
            return $user;
         }
      } catch (\Throwable $e) {
         DB::rollBack();
         Log::debug('Login User : ', ['error' => $e]);
         return ['result_status' => 2, 'message' => "please try again" . $e];
      }
   }
}

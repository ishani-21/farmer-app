<?php

namespace App\Repositories;

use App\Contracts\LoginContract;
use App\Models\FarmerUser;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class LoginRepository implements LoginContract
{
   public function create(array $data)
   {
      DB::beginTransaction();
      try {
         $otp = mt_rand(1000, 9999);
         // $var = Str::random(32);
         $user_data = FarmerUser::where('raw_mobile', $data['raw_mobile'])->first();
         if ($user_data) {
            $user_data->raw_otp = $otp;
            // $user_data->api_token = $var;
            $user_data->save();
            DB::commit();
            return $user_data;
         } else {
            $user = new FarmerUser();
            $user->raw_mobile = $data['raw_mobile'];
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

   public function verifiyOtp($data)
   {
      DB::beginTransaction();
      try {
         $user = FarmerUser::latest()->first();
         if ($user->raw_otp == $data['raw_otp']) {
            $user->raw_is_verify = 1;
            $user->save();
            DB::commit();
            return response([
               'message' => 'Otp Verify Successfully'
            ]);
         } else {
            return response([
               'message' => 'Otp Invalid'
            ]);
         }
      } catch (\Throwable $e) {
         DB::rollBack();
         Log::debug('Verify Otp : ', ['error' => $e]);
         return ['result_status' => 2, 'message' => "please try again" . $e];
      }
   }
}

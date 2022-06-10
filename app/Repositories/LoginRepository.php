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
      $otp = mt_rand(1000, 9999);
      $user = new FarmerUser();
      $user->raw_mobile = $data['raw_mobile'];
      $user->raw_otp = $otp;
      $user->save();
      return $user;
   }
   public function verifiyOtp($data)
   {
         $user = FarmerUser::latest()->first();
         if ($user->raw_otp == $data['raw_otp']) {
            $user->raw_is_verify = 1;
            $user->save();
            return  $user;
         } else {
            return response([
               'message' => 'Otp invalid'
            ]);
         }
   }
}

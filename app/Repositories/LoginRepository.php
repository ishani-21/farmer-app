<?php

namespace App\Repositories;

use App\Contracts\LoginContract;
use App\Models\FarmerUser;

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
}

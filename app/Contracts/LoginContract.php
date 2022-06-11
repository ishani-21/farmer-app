<?php

namespace App\Contracts;

interface LoginContract
{
   public function create(array $data);
   public function verifiyOtp(array $data);
   public function getPlantDetails();
}

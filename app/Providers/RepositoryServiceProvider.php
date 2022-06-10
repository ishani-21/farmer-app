<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Contracts\LoginContract;
use App\Repositories\LoginRepository;

class RepositoryServiceProvider extends ServiceProvider
{
   /**
    * Register any application services.
    *
    * @return void
    */
   public function register()
   {
      $this->app->bind(LoginContract::class, LoginRepository::class);
   }
}

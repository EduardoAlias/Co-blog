<?php

namespace App\Providers;

use App\Models\User;
use App\Services\Newsletter;
use App\Services\MailchimpNewsletter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use MailchimpMarketing\ApiClient;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
       
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Model::unguard();

        Gate::define('admin', function (User $user) {
            $adminUsernames = ['Eduardo', 'Anastasiia', 'Laura','Antonio'];
            return in_array($user->username, $adminUsernames);
        });

        Blade::if('admin', function () {
            return request()->user()?->can('admin');
        });
        
    }
}
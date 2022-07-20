<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use App\Http\Responses\LoginResponse;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Fortify::ignoreRoutes();
        
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);
        Fortify::viewPrefix('pages.admin.');

        Fortify::registerView(function () {
            return view('pages.admin.register');
        });

    
        Fortify::loginView(function () {
            return view('pages.admin.login');
        });

        Fortify::requestPasswordResetLinkView(function () {
            return view('pages.admin.password-reset.forgot-password');
        });

        Fortify::resetPasswordView(function ($request) {
            return view('pages.admin.password-reset.reset-password', ['request' => $request]);
        });


        RateLimiter::for('login', function (Request $request) {
            $username= (string) $request->email;

            return Limit::perMinute(5)->by($username.$request->ip());
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });

    }

}

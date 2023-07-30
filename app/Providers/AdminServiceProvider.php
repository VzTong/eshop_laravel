<?php

namespace App\Providers;

// use Illuminate\Support\ServiceProvider;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Hash;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Auth::viaRequest('ad_email', function ($request) {
            $email = $request->input('email');
            $password = $request->input('password');

            if ($email && $password) {
                $admin = Admin::where('email', $email)->first();

                if ($admin && Hash::check($password, $admin->password) && $admin->isAdmin()) {
                    return $admin;
                }
            }

            return null;
        });
    }
}

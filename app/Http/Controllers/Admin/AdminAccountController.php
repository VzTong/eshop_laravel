<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
// use Session;

session_start();

class AdminAccountController extends Controller
{
    public function register()
    {
        return view("admin.account.ad_register");
    }

    public function save(Request $request)
    {
        $this->customValidate($request);
        $data = $request->all();
        unset($data["_token"]);
        unset($data["cf_password"]);

        $data["password"] = Hash::make($data["password"]);
        $admin = new Admin($data);
        $admin->save();
        return redirect()
            ->to("/admin/account/login")
            ->with("_success_msg", "Đăng ký thành công");
    }

    public function login()
    {
        return view("admin.account.ad_login");
    }

    public function auth(Request $request)
    {
        $data = $request->all();
        unset($data["_token"]);
        unset($data['ad_phone']);

        if (Auth::guard("webAd")->attempt($data)) {
            return redirect()
                ->to('/admin')
                ->with("_success_msg", "Đăng nhập thành công");
        } else {
            return redirect()
                ->to('/admin/account/login')
                ->with("_destroy_msg", "Email hoặc mật khẩu không hợp lệ");
        }
    }

    public function logout()
    {
        Auth::guard("webAd")->logout();
        return redirect()->to('/admin');
    }

    private function customValidate(Request $request)
    {
        $rules = [
            "name" => ["required", "min:4"],

            "ad_phone" => [
                "required",
                "min:10",
                "max:14"
            ],

            "ad_email" => [
                "required",
                "unique:admins,ad_email"
            ],

            "password" => [
                "required",
                "min:4",
                "same:cf_password"
            ],

            "cf_password" => ["required"]
        ];

        $request->validate($rules);
    }
}

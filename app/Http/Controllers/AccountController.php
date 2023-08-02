<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function register()
    {
        return view("clients.account.usr_register");
    }

    public function save(Request $request)
    {
        $this->customValidate($request);
        $data = $request->all();
        unset($data["_token"]);
        unset($data["cf_password"]);
        $data["password"] = Hash::make($data["password"]);

        $user = new User($data);
        $user->save();
        return redirect()
            ->to('account/login')
            ->with("_success_msg", "Đăng ký thành công");
    }

    public function login()
    {
        return view("clients.account.usr_login");
    }

    public function auth(Request $request)
    {
        $data = $request->all();
        unset($data["_token"]);
        unset($data['usr_phone']);
        unset($data['usr_email']);

        if (Auth::guard('web')->attempt($data)) {
            return redirect()
                ->to('/')
                ->with("_success_msg", "Đăng nhập thành công");
        } else {
            return redirect()
                ->to('/')
                ->with("_destroy_msg", "Tên đăng nhập hoặc mật khẩu không hợp lệ");
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->to('/');
    }

    private function customValidate(Request $request)
    {
        $rules = [
            "name" => ["required", "min:4"],

            "usr_phone" => [
                "required",
                "min:10",
                "max:14"
            ],

            "usr_email" => [
                "required",
                "unique:users,usr_email"
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

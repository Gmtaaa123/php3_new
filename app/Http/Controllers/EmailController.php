<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Log;
use Exception;
use Illuminate\Support\Facades\Hash;

class EmailController extends Controller
{
    //gửi mail
    public function sendEmail(HttpRequest $request) {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink($request->only('email'));
        if ($status === Password::RESET_LINK_SENT) {
            return back()->with(['success' => 'Email đặt lại mật khẩu đã được gửi!']);
        } else {
            return back()->with(['error' => 'Vui lòng thử lại!']);
        }

    }

    //Hiển thị form đặt lại mật khẩu
    public function formResset($token){
        return view('auth.reset-password', ['token' => $token]);
    }
    //cập nhật lại passs
    public function ressetPass(HttpRequest $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
            'token' => 'required',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill(['password' => Hash::make($password)])->save();
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('home')->with('success', 'Mật khẩu đã được đặt lại!')
            : back()->withErrors(['error' => 'Có lỗi xảy ra!']);
    }
}


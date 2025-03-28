<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Hash;
use App\Mail\VerifyEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UserController extends Controller
{
    //
    public function login(HttpRequest $request){
        // dd($request->all());
        $request->validate([
            'email' => 'required|string|email|max:225',
            'password' => 'required|string|min:6'
        ]);

        $user = User::where('email','=',$request->input('email'))->first();

        // Kiểm tra xem tài khoản đã được kích hoạt chưa
        if (is_null($user->email_verified_at)) {
            return response()->json(['error' => 'Tài khoản chưa được kích hoạt. Vui lòng kiểm tra email để kích hoạt tài khoản!'], 401);
        }

        if($user && Hash::check($request->input('password'),$user->password)){
            session()->put('user_id', $user->id);
            session()->put('user_name', $user->name);
            return response()->json(['success' => 'Đăng nhập thành công!']);
        } else {
            return response()->json(['error' => 'Email hoặc mật khẩu không đúng!'], 401);
        }


    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'activation_token' => Str::random(64)
        ]);

        Mail::to($user->email)->send(new VerifyEmail($user));

        // return redirect()->route('home')->with('success', 'Vui lòng kiểm tra email để kích hoạt tài khoản.');
        return response()->json(['success' => 'Vui lòng kiểm tra email để kích hoạt tài khoản!']);
    }


    //kiểm tra token để kích hoạt tài khoản
    public function verifyUser($token){
        $user = User::where('activation_token', $token)->first();

        if (!$user) {
            return redirect()->route('home')->with('error', 'Lỗi không hợp lệ!');
        }

        $user->email_verified_at = now();
        $user->activation_token = null;
        $user->save();

        return redirect()->route('home')->with('success', 'Tài khoản đã được kích hoạt!');

    }


    public function myaccount(){
        $user = User::find(session('user_id'));
        return view('myaccount', compact('user'));
    }

    public function logout(){
        session()->flush();
        return  redirect()->route('home')->with('success', 'Đăng xuất thành công!');
    }

}

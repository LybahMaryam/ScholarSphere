<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
class AuthController extends Controller
{
    public function logout()
    {
        auth()->logout();
        return redirect('/index');

    }
    public function register(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        $plainPassword = $credentials['password'];
        $credentials['password'] = bcrypt($plainPassword);

        $user = User::create($credentials);
        auth()->login($user);
        return redirect('/profiles');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'loginname' => 'required|string',
            'loginpassword' => 'required|string|min:8',
        ]);
        if(auth()->attempt(['name' => $credentials['loginname'],'password' => $credentials['loginpassword']])){
            $request->session()->regenerate();
        }
        return redirect('/home');
        
    }
}


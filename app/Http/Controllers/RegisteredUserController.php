<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    public function showForm()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        $plainPassword = $credentials['password'];
        $credentials['password'] = bcrypt($plainPassword);

        User::create($credentials);

        if (Auth::attempt(['email' => $credentials['email'], 'password' => $plainPassword])) {
            $request->session()->regenerate();
            return redirect()->intended('/welcome')->with('success', 'You are logged in!');
        }

        return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
    }
}

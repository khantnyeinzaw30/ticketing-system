<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('auth.login');
    }

    public function registerView()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request): RedirectResponse
    {
        $inputs = $request->validated();
        $inputs['password'] = Hash::make($inputs['password']);
        $inputs['is_agent'] = $request->input('is_agent') ? $request->input('is_agent') : false;

        $user = User::create($inputs)->assignRole('user');

        event(new Registered($user));

        $remember = $request->remember ? true : false;

        Auth::login($user, $remember);

        return to_route('dashboard.index');
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $remember = $request->get('remember') ? true : false;

        if (Auth::attempt($credentials, $remember)) :
            $request->session()->regenerate();

            return redirect()->intended();
        endif;

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput(['email', 'remember']);
    }

    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect()->route('login');
    }
}

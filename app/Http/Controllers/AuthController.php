<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function authenticating(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required'],
        ]);

        // cek apakah login valid

        if (Auth::attempt($credentials)) {
            // cek apakah status  = active
            if (Auth::user()->status != 'active') {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();

                Session::flash('status', 'fail');
                Session::flash('message', 'Your account is not active yet. Please contact admin!');
                return redirect('/login');
            }

            // kasi session
            $request->session()->regenerate();

            if (Auth::user()->role_id == 1) {
                return redirect('dashboard');
            }
            if (Auth::user()->role_id == 2) {
                return redirect()->route('home');
            }

            // return redirect()->intended('dashboard');
        } else {
            Session::flash('status', 'fail');
            Session::flash('message', 'Login Invalid!');
            return redirect('/login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function registerProcess(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:users|max:255',
            'email' =>  ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => 'required|max:255',
            'phone' => 'required|max:255',
        ]);
        $clientRole = Role::where('name', 'client')->first();
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'phone' => $request->input('phone'),
            'role_id' => $clientRole->id,

        ]);
        //===========================ini yg lama =======================
        // $request->password = Hash::make($request->password);
        // $request->merge(['password' => Hash::make($request->password)]);
        // $user = User::create($request->all());
               //===========================ini yg lama =======================
        // $user->save();
        Session::flash('status', 'success');
        Session::flash('message', 'Register success, wait admin approval!');

        return redirect('/register');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        
        if (in_array($credentials['email'], [
            'alexanderjames@gmail.com',
            'thomasbrown@gmail.com',
            'emilygrace@gmail.com',
            'oliviarose@gmail.com',
            'josephanderso@gmail.com',
            'isabellamarie@gmail.com'
        ])) {
            if (Auth::attempt($credentials)) {
                return redirect()->intended('dashboard')->withSuccess('Signed in');
            }
            return redirect("login")->withErrors(['emailPassword' => 'Email address or password is incorrect.']);
        }

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')->withSuccess('Signed in');
        }
        
        return redirect("login")->withErrors(['emailPassword' => 'Email address or password is incorrect.']);
    }
    
    public function registration()
    {
        return view('auth.registration');
    }

    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:4'
        ]);

        $data = $request->all();
        $this->create($data);
        
        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }
    
    public function dashboard()
    {
        if (Auth::check()) {
            if (in_array(Auth::user()->email, [
                'alexanderjames@gmail.com',
                'thomasbrown@gmail.com',
                'emilygrace@gmail.com',
                'oliviarose@gmail.com',
                'josephanderso@gmail.com',
                'isabellamarie@gmail.com'
            ])) {
                return view('agent.agentdashboard');
            }
            return view('dashboard');
        }

        return redirect("login");
    }

    public function signOut()
    {
        Session::flush();
        Auth::logout();
        
        return Redirect('login');
    }
}
<?php

namespace Symfony\Component\ErrorHandler\ErrorRenderer;
namespace App\Http\Requests\Auth;
namespace App\Http\Controllers\Auth;
namespace App\Http\Requests;
namespace App\Http\Controllers;

use App\Http\Controllers\LoginControllers;
use Illuminate\Http\Request;
use App\Models\aduan_tb;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginRequests extends LoginControllers
{
    public function index()
    {
        return view('auth.login');
    }  

    public function customLogin(Request $request)
    {

        // $credentials = $request->only('U_email', 'U_Password');
        $credentials = [
            'email' => session('U_email'),
            'password' => session('U_Password'),
        ];
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect('dashboard');
        }
        return Redirect::to("login")->withSuccess('Oppss! You have entered invalid credentials');
    }

    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }

        return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
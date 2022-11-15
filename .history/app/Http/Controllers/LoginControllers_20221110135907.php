<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\aduan_tb;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequests;

class LoginControllers extends Controller
{
    public function index()
    {
        if(Auth::check()){
            return view('admin.admin_index');
        }
        
        return view('auth.login');
    }  

    public function customLogin(Request $request)
    {
        $credentials = array(
            'email' => $request->email,
            'password' => $request->password
        );
        

        // dd($credentials);

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');;
        }
        // dd($credentials);
        return Redirect::to("loginPage")->withSuccess('Oppss! You have entered invalid credentials');
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

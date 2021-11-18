<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {

        $attrubutes = $request->validate([
            'username' => 'required|alpha_num',
            'password' => 'required|min:5',
        ]);

        // CARA MELOGIN KAN USERS
        // if(Auth::attempt($attrubutes)){
        //     return redirect('/')->with('status', 'You are now logged in');
        // }

        // CARA MENGETAHUI LOGIN TERAKHIR
        if (Auth::attempt($attrubutes)) {
            Auth::user()->last_login = new DateTime();
            Auth::user()->save();
            return Redirect::intended('/');
        }

        throw ValidationException::withMessages([
            'username' => 'Your provide credentials does not match with our record',
        ]);    
    }
}

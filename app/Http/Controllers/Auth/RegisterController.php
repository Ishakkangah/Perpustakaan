<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\buku;
use App\Models\member;
use App\Models\transaksi;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function table()
    {
        return view('auth.table', [
            'all_books' => buku::get(),
            'all_members' => member::get(),
            'all_transactions' => transaksi::get(),
            'users' => User::latest()->get(),
        ]);
    }

    public function create()
    {
        return view('auth.register', [
            'all_books' => buku::get(),
            'all_members' => member::get(),
            'all_transactions' => transaksi::get(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'username' => 'required|alpha_num',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',

        ]);
        $user =  User::create([
            'name' => $request->name,
            'username' => $request->username,
            'last_login' => Carbon::now()->toDateTimeString(),
            'password' => bcrypt($request->password),
        ]);
        $user->assignRole('admin');
        return redirect('users/index')->with('success','the created admin was successfully');
    }
}

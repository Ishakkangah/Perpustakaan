<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use App\Models\{buku, member, transaksi, User };
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Spatie\Permission\Models\Role;

class UserProfileController extends Controller
{
    
    public function edit_profile(User $user)
    {
        return view('user.edit_profile', [
            'all_books' => buku::get(),
            'all_members' => member::get(),
            'all_transactions' => transaksi::get(),
            'user' => auth()->user(),
        ]);
    }

    public function change_password(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|max:50|alpha_num|confirmed',
            'password_confirmation' => 'required',
        ]);
        
        $user = auth()->user();
        if(Hash::check($request->current_password, auth()->user()->password))
        {
            $user->update([
                'password' => bcrypt($request->password),
            ]);
            return redirect('/')->with('success', 'The password was updated');
        } 

        throw ValidationException::withMessages([
            'password' => 'Your provide credentials does not match with our record',
        ]);
    }

    public function change_profile(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:50|alpha_num',
            'name' => 'required|string|max:50',
            'email' => 'required|email',
            'address' => 'required|string|max:100',
            'phone_number' => 'required|numeric',
            'experience'=> 'required|string|max:100',
        ]);

        $user = auth()->user();
        $user->update([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'experience' => $request->experience,
        ]);

        return redirect('/')->with('success', 'The profile was updated');
    }
}














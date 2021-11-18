<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\{buku, member, transaksi, User, };
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:super admin','permission:create|read|update|delete']);
    }

    public function index()
    {   
        return view('user.index',[
            'all_books' => buku::get(),
            'all_members' => member::get(),
            'all_transactions' => transaksi::get(),
            'users' => User::role(['admin','super admin'])->latest()->get(),
        ]);
    }

    public function detail(User $user)
    {
        return view('user.detail', [
            'all_books' => buku::get(),
            'all_members' => member::get(),
            'all_transactions' => transaksi::get(),
            'user' => $user,
        ]);
    }

    public function delete(User $user)
    {
        $user->delete();
        return redirect('users/index')->with('success', 'The user was deleted');
    }

}








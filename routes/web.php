<?php

use App\Http\Controllers\Auth\{LoginController, LogoutController, RegisterController, };
use App\Http\Controllers\{BukuController, MemberController, TransaksiController};
use App\Http\Controllers\Download\DownloadController;
use App\Http\Controllers\Categories\CategoriesController;
use App\Http\Controllers\Users\{UserController, UserProfileController };
use App\Models\{buku, member, transaksi};
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Dashboard' , [
        'all_books' => buku::get(),
        'all_members' => member::get(),
        'all_transactions' => transaksi::get(),
    ]);
});

// WITHOUT MIDDLEWARE
// LOGIN
route::prefix('auth')->group(function(){
    route::get('login', [LoginController::class, 'login'])->name('login');
    route::put('login', [LoginController::class, 'store'])->name('login');
});

// BUKU
route::prefix('buku')->group(function(){
    route::get('index', [BukuController::class, 'index'])->name('buku.index');
    route::get('{buku:slug}/detail', [BukuController::class, 'detail' ])->name('buku.detail');
});

// CATEGORY
route::prefix('category')->group(function(){
    route::get('{category:slug}/index', [CategoriesController::class, 'index'])->name('category.index');
    route::get('table', [CategoriesController::class, 'table'])->name('category.table');
});


// MIDELLEWARE
Route::middleware(['auth'])->group(function () {
    // AUTH
    Route::prefix('auth')->group(function () {
        route::get('table', [RegisterController::class, 'table'])->name('admin.table');
        route::get('register', [RegisterController::class, 'create'])->name('register');
        route::put('register', [RegisterController::class, 'store'])->name('register');
        route::get('logout', [LogoutController::class, 'logout'])->name('logout');
    });

    // BUKU
    Route::prefix('buku')->group(function () {
        route::get('create', [BukuController::class, 'create'])->name('buku.create');
        route::put('create', [BukuController::class, 'store'])->name('buku.create');
        route::get('{buku:slug}/edit', [BukuController::class, 'edit'])->name('buku.edit');
        route::put('{buku:slug}/edit', [BukuController::class, 'update'])->name('buku.edit');
        route::delete('{buku:slug}/delete', [BukuController::class, 'delete'])->name('buku.delete');
    });

    
    // CATEGORY BUKU
    Route::prefix('category')->group(function(){
        route::get('create', [CategoriesController::class, 'create'])->name('category.create');
        route::put('create', [CategoriesController::class, 'store'])->name('category.create');
        route::get('{category:slug}/edit', [CategoriesController::class, 'edit'])->name('category.edit');
        route::put('{category:slug}/edit', [CategoriesController::class, 'update'])->name('category.edit');
        route::delete('{category:slug}/delete', [CategoriesController::class, 'delete'])->name('category.delete');
    });

    // MEMBER
    Route::prefix('member')->group(function () {
        route::get('index', [MemberController::class, 'index'])->name('member.index');
        route::get('create', [MemberController::class, 'create'])->name('member.create');
        route::put('create', [MemberController::class, 'store'])->name('member.create');
        route::get('{member:slug}/edit', [MemberController::class, 'edit'])->name('member.edit');
        route::put('{member:slug}/edit', [MemberController::class, 'update'])->name('member.edit');
        route::get('{member:slug}/detail', [MemberController::class, 'detail'])->name('member.detail');
        route::delete('{member:slug}/delate', [MemberController::class, 'delete'])->name('member.delete');
    });

    // TRANSAKSI
    Route::prefix('transaksi')->group(function(){
        route::get('index', [TransaksiController::class, 'index'])->name('transaksi.index');
        route::get('create', [TransaksiController::class, 'create'])->name('transaksi.create');
        route::put('create', [TransaksiController::class, 'store'])->name('transaksi.create');
        route::get('download_pdf', [DownloadController::class, 'Download_transaksi'])->name('transaksi.download');
    });

    // USERS
    Route::prefix('users')->group(function(){
        route::get('index', [UserController::class, 'index'])->name('user.index');
        route::delete('{user:id}/delete', [UserController::class, 'delete'])->name('user.delete');
        route::get('{user:id}/detail', [UserController::class, 'detail'])->name('user.detail');
        route::get('edit-profile', [UserProfileController::class, 'edit_profile'])->name('user.profile');
        route::put('change-password', [UserProfileController::class, 'change_password'])->name('user.change_password');
        route::put('change-profile', [UserProfileController::class, 'change_profile'])->name('user.change_profile');
    });
});
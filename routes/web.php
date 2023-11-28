<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Public
Route::prefix('/')->group(function () {
    
    // Index (Default)
    Route::get('/', function () {
        return view('index');
    })->name('index');

    // Akunsaya
    Route::get('/akunsaya', function () {
        return view('akunsaya');
    })->name('akunsaya');

    // Bantarfarm
    Route::get('/bantarfarm', function () {
        return view('Bantarfarm');
    })->name ('Bantarfarm');

    // cart
    Route::get('/cart', function () {
        return view('cart');
    })->name ('cart');

    // ChatBot
    Route::get('/chatbot', function () {
        return view('Chatbot');
    })->name ('ChatBot');

    // checkout
    Route::get('/checkout', function () {
        return view('checkout');
    })->name('checkout');

    // Ciremaifarm
    Route::get('/ciremaifarm', function () {
        return view('Ciremaifarm');
    });

    // contact
    Route::get('/contact', function () {
        return view('contact');
    })->name ('contact');

    // daftarmitra
    Route::get('/daftarmitra', function () {
        return view('daftarmitra');
    })->name('daftarmitra');


    // forget4
    Route::get('/forget4', function () {
        return view('forget4');
    })->name ('forget4');

    // infotoko
    Route::get('/infotoko', function () {
        return view('infotoko');
    })->name ('infotoko');

    // login4
    Route::get('/login4', function () {
        return view('login4');
    })->name('login4');

    // product-details
    Route::get('/product-details', function () {
        return view('product-details');
    })->name ('product-details');

    // product
    Route::get('/product', function () {
        return view('product');
    })->name('product');

    // register4
    Route::get('/register4', function () {
        return view('register4');
    })->name('register4');
     

    // Vokasifarm
    Route::get('/vokasifarm', function () {
        return view('Vokasifarm');
    })->name('vokasifarm');

    Route::get('/adminmitra', function() {
        return view('admin/index-admin-mitra');
    });
    Route::get('/admin/admin_login', function() {
        return view('admin/admin_login');
    });


    // LOGIN USER
    Route::get('/signin-user', function () {
        return view('signin-user');
    })->name('signin-user');

    // SIGNOUT USER
    Route::get('/signout-user', function () {
        return view('signout-user');
    })->name('signout-user');

    // REGISTER USER
    Route::post('/register-user', [App\Http\Controllers\UserController::class, 'register'])
    ->name('register-user');

    // UPDATE USER
    Route::post('/update-user', [App\Http\Controllers\UserController::class, 'updateUser'])
    ->name('update-user');

    // HAPUS USER
    Route::post('/hapus-user', [App\Http\Controllers\UserController::class, 'hapusUser'])
    ->name('hapus-user');
    

    // ADMIN PAGE
    Route::get('/admin', function () {
        return view('admin/index-admin');
    })->name('index-admin');

    Route::get('/data-produk-admin', function () {
        return view('admin/data-produk-admin');
    })->name('data-produk-admin');

    Route::get('/data-user-admin', function () {
        return view('admin/data-user-admin');
    })->name('data-user-admin');

    Route::get('/tambah-produk-admin', function () {
        return view('admin/tambah-produk-admin');
    })->name('tambah-produk-admin');

    // CONTROL ADMIN
    Route::post('/update-produk', [App\Http\Controllers\AdminController::class, 'updateProduk'])
    ->name('update-produk');
    Route::get('/delete-produk/{id}', [App\Http\Controllers\AdminController::class, 'deleteProduk'])
    ->name('delete-produk');

    Route::post('/update-user-admin', [App\Http\Controllers\AdminController::class, 'updateUser'])
    ->name('update-user-admin');
    Route::get('/delete-user/{id}', [App\Http\Controllers\AdminController::class, 'deleteUser'])
    ->name('delete-user');


});


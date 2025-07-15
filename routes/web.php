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

Route::redirect('/', '/dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('view_dashboard');

Route::get('/login', function () {
    return view('login');
})->name('view_login');

Route::get('/icon', function () {
    return view('icon');
});

Route::get('/tables', function () {
    return view('tables');
});

// CID ROUTE
// rka route
Route::get('/cid/rka/view', function () {
    return view('data_cid.rka.view');
})->name('view_cid_rka');

Route::get('/cid/rka/add', function () {
    return view('data_cid.rka.add');
})->name('add_cid_rka');

// realisasi program
Route::get('/cid/real/view', function () {
    return view('data_cid.real.view');
})->name('view_cid_real');

Route::get('/cid/real/add', function () {
    return view('data_cid.real.add');
})->name('add_cid_real');

//report 
Route::get('/cid/report/view', function () {
    return view('data_cid.report.view');
})->name('view_cid_report');


// NON CID ROUTE
Route::get('/non-cid/rka', function () {
    return view('data_non_cid.rka');
    // return view('tables');
})->name('view_non_cid_rka');

Route::get('/social-mapping/rka', function () {
    return view('social_mapping.rka');
    // return view('tables');
})->name('view_social_mapping_rka');

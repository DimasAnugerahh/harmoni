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

// Route::get('/icon', function () {
//     return view('icon');
// });

// Route::get('/tables', function () {
//     return view('tables');
// });

// CID ROUTE
// rka route
Route::get('/cid/rka', function () {
    return view('data_cid.rka.view');
})->name('view_cid_rka');

Route::get('/cid/rka/create', function () {
    return view('data_cid.rka.add');
})->name('view_create_cid_rka');

// realisasi program
Route::get('/cid/real', function () {
    return view('data_cid.real.view');
})->name('view_cid_real');

Route::get('/cid/real/create', function () {
    return view('data_cid.real.add');
})->name('view_create_cid_real');

//report 
Route::get('/cid/report', function () {
    return view('data_cid.report.view');
})->name('view_cid_report');


// NON CID ROUTE
Route::get('/non-cid/rka', function () {
    return view('data_non_cid.view');
    // return view('tables');
})->name('view_non_cid_rka');

Route::get('/non-cid/rka/create', function () {
    return view('data_non_cid.add');
})->name('view_create_non-cid_rka');


// SOCIAL MAPPING ROUTE
Route::get('/social-mapping/wilayah', function () {
    return view('social_mapping.wilayah');
    // return view('tables');
})->name('view_wilayah_social_mapping');

Route::get('/social-mapping/data-wilayah', function () {
    return view('social_mapping.data_wilayah.data_wilayah');
    // return view('tables');
})->name('view_dwilayah_social_mapping');

Route::get('/social-mapping/survey', function () {
    return view('social_mapping.survey.survey');
    // return view('tables');
})->name('view_survey_social_mapping');


Route::get('/mobile', function () {
    return view('mobile.home');
    // return view('tables');
})->name('view_mobile_home');


// PUMK
Route::get('/pumk/akun', function () {
    return view('pumk.akun_view');
})->name('view_akun_pumk');

Route::get('/pumk/kas-tunai-dan-bank', function () {
    return view('pumk.kas_tunai_dan_bank_view');
})->name('view_kas_tunai_dan_bank_view');

Route::get('/pumk/jurnal-umum', function () {
    return view('pumk.jurnal_umum_view');
})->name('view_jurnal_umum_view');

Route::get('/pumk/laporan-buku-besar', function () {
    return view('pumk.laporan_buku_besar_view');
})->name('view_laporan_buku_besar_view');

Route::get('/pumk/laporan-neraca-saldo', function () {
    return view('pumk.laporan_neraca_saldo_view');
})->name('view_laporan_neraca_saldo_view');

Route::get('/pumk/laporan-keuangan', function () {
    return view('pumk.laporan_keuangan_view');
})->name('view_laporan_keuangan_view');

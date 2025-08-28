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




// CID ROUTE
Route::get('/cid/rka', function () {
    return view('data_cid.rka.view');
})->name('view_cid_rka');

Route::get('/cid/rka/create', function () {
    return view('data_cid.rka.add');
})->name('create_cid_rka');

Route::get('/cid/real', function () {
    return view('data_cid.real.view');
})->name('view_cid_real');

Route::get('/cid/real/create', function () {
    return view('data_cid.real.add');
})->name('create_cid_real');

Route::get('/cid/report', function () {
    return view('data_cid.report.view');
})->name('view_cid_report');



// NON CID ROUTE
Route::get('/non_cid/rka', function () {
    return view('data_non_cid.rka.view');
})->name('view_non_cid_rka');

Route::get('/non_cid/rka/create', function () {
    return view('data_non_cid.rka.add');
})->name('create_non_cid_rka');

Route::get('/non_cid/real', function () {
    return view('data_non_cid.real.view');
})->name('view_non_cid_real');

Route::get('/non_cid/real/create', function () {
    return view('data_non_cid.real.add');
})->name('create_non_cid_real');

Route::get('/non_cid/report', function () {
    return view('data_non_cid.report.view');
})->name('view_non_cid_report');




// PUMK
Route::get('/pumk/mb/view', function () {
    return view('pumk.mb_view');
})->name('pumk_mb_view');

Route::get('/pumk/mb/create', function () {
    return view('pumk.mb_add');
})->name('pumk_mb_add');

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



// SOCIAL MAPPING ROUTE
Route::get('/social-mapping/peta', function () {
    return view('social_mapping.peta');
})->name('view_peta_social_mapping');

Route::get('/social-mapping/wilayah', function () {
    return view('social_mapping.wilayah.wilayah_view');
})->name('view_dwilayah_social_mapping');

Route::get('/social-mapping/survey', function () {
    return view('social_mapping.survey.survey');
})->name('view_survey_social_mapping');

Route::get('/social-mapping/report', function () {
    return view('social_mapping.report');
})->name('view_report_social_mapping');



// MOBILE
Route::get('/mobile', function () {
    return view('mobile.home');
    // return view('tables');
})->name('view_mobile_home');

// MOBILE PUMK
Route::get('/mobile/pumk', function () {
    return view('mobile_pumk.home');
    // return view('tables');
})->name('view_mobilepumk_home');

Route::get('/mobile/pumk/features', function () {
    return view('mobile_pumk.feature');
    // return view('tables');
})->name('view_mobilepumk_feature');

// MOBILE SOCIAL MAPPING
Route::get('/mobile/social-mapping', function () {
    return view('mobile_sm.home');
    // return view('tables');
})->name('view_mobilesm_home');

Route::get('/mobile/social-mapping/features', function () {
    return view('mobile_sm.feature');
    // return view('tables');
})->name('view_mobilesm_feature');

Route::get('/mobile/social-mapping/articles', function () {
    return view('mobile_sm.article');
    // return view('tables');
})->name('view_mobilesm_article');

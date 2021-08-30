<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PremisController;
use App\Http\Controllers\JadualController;
use App\Http\Controllers\PanduanController;
use App\Http\Controllers\NotisController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\CustomAuthController;/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/premis',PremisController::class);
Route::resource('/notis',NotisController::class);
Route::resource('/status_siap',NotisController::class);
Route::get('/notis-siap', [NotisController::class,'status_siap']);
Route::get('/jadual-minggu', [NotisController::class,'jadual_minggu']);
Route::get('/status-siap/{id}', [NotisController::class,'papar_notis']);
Route::get('/cetak-notis/{id}',[NotisController::class,'cetaknotis']);
Route::get('/cetak-notis/{id}',[NotisController::class,'cetaknotis']);

Route::get('/', function () {
    return view('pages.main');
});

// Route::get('/log-masuk', function () {
//     return view('pages.login');
// });

Route::get('/daftar', function () {
    return view('pages.register');
});

Route::get('/verify-tel', function () {
    return view('pages.verifytel');
});

Route::get('/tac', function () {
    return view('pages.tac');
});

// Route::get('/dashboard', function () {
//     return view('pages.dashboard');
// });

Route::get('/papar-borang', function () {
    return view('pages.paparborang');
});
// Route::get('/status-notis-edit', function (){
//     return view('pages.statusnotisborang');
// });

// Route::get('/status-notis-dihantar', function () {
//     return view('pages.statusnotishantar');
// });


// Route::get('/tambah-premis', function () {
//     return view('pages.tambahpremis');
// });

// Route::get('/maklumat-premis', function () {
//     return view('pages.maklumatpremis');
// });

// Route::get('/jadual-mingguan', function () {
//     return view('pages.jadualminggu');
// });

Route::get('/jadual-bulanan', function () {
    return view('pages.jadualbulan');
});

Route::get('/panduan-penetapan-masa', function () {
    return view('pages.panduantepatmasa');
});

Route::get('/panduan-akta', function () {
    return view('pages.panduanakta');
});

Route::get('/profil', function () {
    return view('pages.profil');
});

Route::get('/tetapan', function () {
    return view('pages.tetapan');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });
// ->middleware(['auth'])->name('dashboard');

// Route::get('/login', function () {
//     return view('auth.login');
// });

// require __DIR__.'/auth.php';

// Route::resource('/login',CustomAuthController::class);

Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('/login', [CustomAuthController::class, 'index'])->name('login');
Route::post('/custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('/registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


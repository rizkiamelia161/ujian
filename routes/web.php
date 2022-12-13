<?php

use App\Http\Controllers\dataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\tambahController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::controller(dataController::class)->group(function(){
//     Route::get('/dashboard', 'index')->name();
// });

Route::controller(dataController::class)->group(function(){

    Route::get('data', 'index')->name('data');

});

Route::controller(tambahController::class)->group(function(){

    Route::get('siswainput', 'index')->name('siswa');

    Route::post('insertsiswa', 'siswa')->name('insertsiswa');

    Route::get('editsiswa/{id}', 'edit_siswa')->name('edsiswa');

    Route::post('/upsiswa/{id}', 'upsiswas')->name('update_ssiwa');

    Route::get('/deletesiswa/{id}', 'delete_siswa')->name('delsiswa');

    // guru
    Route::get('guruinput', 'indexg')->name('guru');

    Route::post('insertguru', 'guru')->name('insertguru');

    Route::get('editguru/{id}', 'edit_guru')->name('edguru');

    Route::post('/upguru/{id}', 'upgurus')->name('update_gurus');

    Route::get('/deleteguru/{id}', 'delete_guru')->name('delguru');

    // pelanggaran
    Route::get('kasusinput', 'indexp')->name('pelanggaran');

    Route::post('insertkasus', 'kasus')->name('insertkasus');

    Route::get('editkasus/{id}', 'edit_kasus')->name('edkasus');

    Route::post('/upkasus/{id}', 'upkasuss')->name('update_kasus');

    Route::get('/deletekasus/{id}', 'delete_kasus')->name('delkasus');

    // relasi pivot

    Route::get('transinput', 'tambahkasus')->name('transaksi');

    Route::post('/inserttrans', 'insertkasus');

    Route::get('/deletetrans/{id}', 'delete_trans')->name('deltrans');




});

Route::controller(LoginController::class)->group(function(){

    Route::get('/', 'welcome')->name('home');

    Route::get('login', 'index')->name('login');

    // Route::get('login', 'index')->name('login');

    Route::get('registration', 'registration')->name('registration');

    Route::get('logout', 'logout')->name('logout');

    Route::post('validate_registration', 'validate_registration')->name('sample.validate_registration');

    Route::post('validate_login', 'validate_login')->name('sample.validate_login');

    Route::get('dashboard', 'dashboard')->name('dashboard');

});

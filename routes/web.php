<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Kriteria;
use App\Models\Alternatif;
use App\Models\Parameter;
use App\Models\Nilai;

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

Route::get('/', function () {
    return view('layouts.app');
});

Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/postlogin', [LoginController::class, 'postLogin'])->name('postlogin');

Route::middleware(['auth'])->group(function () {
Route::get('/dashboard', function () {
    $kriterias = Kriteria::count();
    $alternatifs = Alternatif::count();
    $parameters = Parameter::count();
    $nilais = Nilai::count();

        return view('dashboard',compact('kriterias','alternatifs','parameters','nilais'));
        return auth()->user();
    })-> name('dashboard');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
 
});

//KRITERIA
Route::get('/kriteria', [App\Http\Controllers\KriteriaController::class, 'index'])->name('kriteria');
Route::post('/kriteria-save', [App\Http\Controllers\KriteriaController::class, 'store'])->name('kriteria-save');
Route::post('/kriteria-update/{id}', [App\Http\Controllers\KriteriaController::class, 'update'])->name('kriteria-update');
Route::get('/kriteria-delete/{id}', [App\Http\Controllers\KriteriaController::class, 'destroy'])->name('kriteria-delete');

//PARAMETER
Route::get('/parameter', [App\Http\Controllers\ParameterController::class, 'index'])->name('parameter');
Route::post('/parameter-save', [App\Http\Controllers\ParameterController::class, 'store'])->name('parameter-save');
Route::post('/parameter-update/{id}', [App\Http\Controllers\ParameterController::class, 'update'])->name('parameter-update');
Route::get('/parameter-delete/{id}', [App\Http\Controllers\ParameterController::class, 'destroy'])->name('parameter-delete');

//ALTERNATIF
Route::get('/alternatif', [App\Http\Controllers\AlternatifController::class, 'index'])->name('alternatif');
Route::get('/alternatif-search', [App\Http\Controllers\AlternatifController::class, 'search'])->name('alternatif-search');
Route::post('/alternatif-save', [App\Http\Controllers\AlternatifController::class, 'store'])->name('alternatif-save');
Route::post('/alternatif-update/{id}', [App\Http\Controllers\AlternatifController::class, 'update'])->name('alternatif-update');
Route::get('/alternatif-delete/{id}', [App\Http\Controllers\AlternatifController::class, 'destroy'])->name('alternatif-delete');

//PENILAIAN
Route::get('/penilaian', [App\Http\Controllers\NilaiController::class, 'index'])->name('penilaian');
Route::post('/penilaian-save', [App\Http\Controllers\NilaiController::class, 'store'])->name('penilaian-save');
Route::post('/penilaian-update/{id}', [App\Http\Controllers\NilaiController::class, 'update'])->name('penilaian-update');
Route::get('/penilaian-delete/{id}', [App\Http\Controllers\NilaiController::class, 'destroy'])->name('penilaian-delete');

//PERHITUNGAN
Route::get('/perhitungan', [App\Http\Controllers\PerhitunganController::class, 'index'])->name('perhitungan');

//PERANGKINGAN
Route::get('/laporan', [App\Http\Controllers\PerhitunganController::class, 'rangking'])->name('laporan');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandController;
use App\Http\Controllers\PetaController;
use App\Http\Controllers\KasusController;
use App\Http\Controllers\KecKelController;
use App\Http\Controllers\DataKasusController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PuskesmasController;

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

Route::get('/', [LandController::class, 'index']);

Route::get('/dataKasus/{tahun}', [DataKasusController::class, 'index']);

Route::get('/peta', [PetaController::class, 'index']);
Route::get('/peta-request', [PetaController::class, 'request'])->name('peta-request');

Route::get('/home', [HomeController::class, 'index'])->middleware('auth');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/kasus/{tahun}', [KasusController::class, 'index'])->middleware('auth');
Route::get('/kasus-add', [KasusController::class, 'create'])->middleware('auth');
Route::post('/kasus-store', [KasusController::class, 'store'])->middleware('auth');
Route::get('/kasus-edit/{id}', [KasusController::class, 'edit'])->middleware('auth');
Route::put('/kasus-update/{id}', [KasusController::class, 'update'])->middleware('auth');
Route::get('/kasus-destroy/{id}', [KasusController::class, 'destroy'])->middleware('auth');

Route::get('/puskesmas', [PuskesmasController::class, 'index'])->middleware('auth');
Route::get('/puskesmas-add', [PuskesmasController::class, 'create'])->middleware('auth');
Route::post('/puskesmas-store', [PuskesmasController::class, 'store'])->middleware('auth');
Route::get('/puskesmas-edit/{id}', [PuskesmasController::class, 'edit'])->middleware('auth');
Route::put('/puskesmas-update/{id}', [PuskesmasController::class, 'update'])->middleware('auth');
Route::get('/puskesmas-destroy/{id}', [PuskesmasController::class, 'destroy'])->middleware('auth');

Route::get('/kecamatan', [KecamatanController::class, 'index'])->middleware('auth');
Route::get('/kecamatan-add', [KecamatanController::class, 'create'])->middleware('auth');
Route::post('/kecamatan-store', [KecamatanController::class, 'store'])->middleware('auth');
Route::get('/kecamatan-edit/{id}', [KecamatanController::class, 'edit'])->middleware('auth');
Route::put('/kecamatan-update/{id}', [KecamatanController::class, 'update'])->middleware('auth');
Route::get('/kecamatan-destroy/{id}', [KecamatanController::class, 'destroy'])->middleware('auth');
Route::get('/kecamatan-request', [KecamatanController::class, 'request'])->name('kecamatan-request');

Route::get('/kelurahan', [KelurahanController::class, 'index'])->middleware('auth');
Route::get('/kelurahan-add', [KelurahanController::class, 'create'])->middleware('auth');
Route::post('/kelurahan-store', [KelurahanController::class, 'store'])->middleware('auth');
Route::get('/kelurahan-edit/{id}', [KelurahanController::class, 'edit'])->middleware('auth');
Route::put('/kelurahan-update/{id}', [KelurahanController::class, 'update'])->middleware('auth');
Route::get('/kelurahan-destroy/{id}', [KelurahanController::class, 'destroy'])->middleware('auth');

// Route::get('/teachers', [TeacherController::class, 'index']);
// Route::get('/teacher/{id}', [TeacherController::class, 'show']);

// Route::get('/classrooms', [ClassroomController::class, 'index']);
// Route::get('/classroom/{id}', [ClassroomController::class, 'show']);

// Route::get('/extracurriculars', [ExtracurricularController::class, 'index']);
// Route::get('/extracurricular/{id}', [ExtracurricularController::class, 'show']);

// Route::get('/about', [AboutController::class, 'index']);

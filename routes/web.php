<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\InstitutionController;


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

// Route::get('/', function () {
   // return view('welcome');
// });

Route::get('/', [App\Http\Controllers\AboutController::class, 'index'] );
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'] )->name('about');

Route::get('/tugas', [App\Http\Controllers\TugasController::class, 'index'] )->name('tugas');
Route::get('/tugas/{id}/edit', [App\Http\Controllers\TugasController::class, 'index'] )->name('tugas.edit');
Route::delete('/tugas/{id}/delete', [App\Http\Controllers\TugasController::class, 'destroy'])->name('tugas.delete');
// route form tambah data
Route::get('/tugas/create', [App\Http\Controllers\TugasController::class, 'create'])->name('tugas.create');
// route form simpan data
Route::post('/tugas/store', [App\Http\Controllers\TugasController::class, 'store'])->name('tugas.store');
Route::put('tugas/{id}/update', [App\Http\Controllers\TugasController::class, 'update'])->name('tugas.update');
Route::get('tugas/{id}/delete', [App\Http\Controllers\TugasController::class, 'destroy'])->name('tugas.delete');

Route::get('uts/tampil', [App\Http\Controllers\AdditionalCost::class, 'index'] )->name('uts');
// route form tambah data
Route::get('uts/form-tambah', [App\Http\Controllers\AdditionalCost::class, 'create'])->name('uts.create');
// route form simpan data
Route::post('uts/simpan', [App\Http\Controllers\AdditionalCost::class, 'store'])->name('uts.store');
Route::get('uts/{id}/edit',[App\Http\Controllers\AdditionalCost::class, 'edit'])->name('uts.edit');
//Route::get('/uts/{id}/edit', [UtsController::class, 'index'] )->name('uts.edit');
Route::put('uts/{id}/update', [App\Http\Controllers\AdditionalCost::class, 'update'])->name('uts.update');
Route::get('uts/{id}/delete', [App\Http\Controllers\AdditionalCost::class, 'destroy'])->name('uts.delete');


Route::get('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
Route::post('/auth', [App\Http\Controllers\LoginController::class, 'authenticate'])->name('auth');
Route::get('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login')
->middleware('guest');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin'])->name('admin')
->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/mahasiswa')->group(function () {

    Route::get('/nama/{nama}', function ($nama) {
        return "Nama Mahasiswa :  $nama";
    });

    Route::get('/umur/{umur}', function ($umur) {
        return "Umur Mahasiswa :  $umur";
    });

    Route::get('/alamat/{alamat}', function ($alamat) {
        return "alamat Mahasiswa :  $alamat";
    });

});

// route ke view
Route::get('/view-app', function () {
    return view('aapp');
});

// route ke controller
Route::get('test/{kode}', [TestController::class, 'index']);

// route untuk course
Route::get('course', [CourseController::class, 'index'])->name('course.index');

Route::get('course/create', [CourseController::class, 'create'])->name('course.create');
Route::post('course/store', [CourseController::class, 'store'])->name('course.store');

Route::get('institution', [InstitutionController::class, 'index'])->name('institution.index');

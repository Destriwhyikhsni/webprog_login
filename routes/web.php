<?php 
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\presensiController; 
use App\Http\Controllers\LoginController; 
Route::get('/', function () { 
    
    // return view('welcome'); 
    return redirect()->route('backend.login'); 
}); 
Route::get('backend/beranda', [presensiController::class, 'berandaBackend'])
->name('backend.beranda')->middleware('auth'); 
Route::get('/registrasi', [LoginController::class, 'registerBackend'])
->name('backend.register');
Route::post('/registrasi', [LoginController::class, 'registerUser'])
->name('backend.register');
Route::get('backend/login', [LoginController::class, 'loginBackend'])
->name('backend.login'); 
Route::post('backend/login', [LoginController::class, 'authenticateBackend'])
->name('backend.login'); 
Route::post('backend/logout', [LoginController::class, 'logoutBackend'])
->name('backend.logout');
<?php
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// This one is already correct!
Route::get('/dashboard', function () {
    return view('admin.dashboard'); // ត្រូវតែ admin.dashboard
})->name('dashboard');

//  FIXED: Added 'admin.' prefix
Route::get('/customer', function () {
    return view('admin.customer'); 
})->name('customer');

//  FIXED: Added 'admin.' prefix
Route::get('/pawnitem', function () {
    return view('admin.pawnitem'); 
})->name('pawnitem');

Route::post('/pawnitem/new', [CustomerController::class, 'store'])->name('customer.store');
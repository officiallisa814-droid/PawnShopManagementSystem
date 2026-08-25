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
Route::post('/pawnitem/new', [CustomerController::class, 'store'])->name('customer.store');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/customer', function () {
    return view('customer');
})->name('customer');
Route::get('/pawnitem', function () {
    return view('pawnitem');
})->name('pawnitem');

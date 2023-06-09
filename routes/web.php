<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\CropController;
use App\Http\Controllers\GetinController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MachineryController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SupplyController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\SuscriptionController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('animals', AnimalController::class);

Route::resource('bills', BillController::class);

Route::resource('crops', CropController::class);

Route::resource('getins', GetinController::class);

Route::resource('products', ProductController::class);

Route::resource('machineries', MachineryController::class);

Route::resource('payment-methods', PaymentMethodController::class);

Route::resource('posts', PostController::class);

Route::resource('products', ProductController::class);

Route::resource('records', RecordController::class);

Route::resource('sales', SaleController::class);

Route::resource('supplies', SupplyController::class);

Route::resource('warehouses', WarehouseController::class);

Route::resource('profiles', ProfileController::class);

Route::resource('users', UserController::class);

Route::resource('transactions', TransactionController::class);

Route::resource('suscriptions', SuscriptionController::class);

<?php

use App\Http\Controllers\GegevensController;
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

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/leverancier/index', [GegevensController::class, 'leverancierIndex'])->name('leverancier.index');

Route::get('/product/index/{info}', [GegevensController::class, 'productIndex'])->name('product.index');

Route::get('/productperleverancier/edit/{info}/{data}', [GegevensController::class, 'productPerLeverancierIndex'])->name('productperleverancier.index');

Route::put('/productperleverancier/update/{info}/{data}', [GegevensController::class, 'updateProductPerLeverancier'])->name('update.index');

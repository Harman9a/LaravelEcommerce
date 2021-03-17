<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\My\HomePage;
use App\Http\Controllers\My\UserProducts;
use App\Http\Controllers\My\cartController;
use App\Http\Controllers\My\orignalCartController;
use App\Http\Controllers\My\CheckoutController;
use App\Http\Controllers\My\paymentController;
use App\Http\Controllers\My\measurementController;
use App\Http\Controllers\My\thanksController;
use App\Http\Controllers\My\AuthController;


Route::get('/',[HomePage::class, 'main'])->name('Home')->middleware('RandomUser');

Route::post('/login',[AuthController::class,'login'])->name('loginPage');

Route::get('/allProducts',[UserProducts::class, 'main'])->name('Products');
Route::get('/Checkout',[CheckoutController::class, 'index'])->name('checkout');
Route::post('/Payment',[paymentController::class, 'index'])->name('payment');
Route::post('/cartCheckout',[CheckoutController::class, 'checkout']);
Route::post('/cartCheckout',[UserProducts::class, 'viewsingleproduct']);
Route::get('/single/{id}',[cartController::class, 'index'])->name('single');
Route::get('/measurement/{id}',[measurementController::class,'index'])->name('measurementpage');

Route::post('/viewCartPage',[orignalCartController::class, 'index'])->name('viewCartPage');
Route::post('/addProductCon',[orignalCartController::class,'addProductFun']);

Route::post('/deleteCartItem',[cartController::class, 'delete_item']);
Route::post('/UpdateCartItem',[cartController::class, 'Update_item']);

// Route::get('/Payment', [paymentController::class, 'index']);
Route::post('/transaction', [paymentController::class, 'makePayment'])->name('make-payment');
Route::get('/thanks/{id}', [thanksController::class, 'index'])->name('thanksPage');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
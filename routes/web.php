<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemsController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ReviewController;


Route::get('/', function () {
    return view('welcome');
});
//******************Main************************ */


//******************Category************************ */
Route::get('',[CategoryController::class,'']);


//******************Product************************ */


//******************Order************************ */


//******************Order Items************************ */


//******************Discount************************ */


//******************Cart************************ */


//******************Review************************ */

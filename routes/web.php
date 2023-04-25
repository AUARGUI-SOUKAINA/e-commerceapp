<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\HomeController;



// use App\Http\Controllers\LogoutController;


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
Route::get('/send-mail', [MailController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});


//ADD TO CART
Route::get('/products', [ProductController::class, 'index'])->name('index');  
Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');

Route::get('/users', [UsersController::class, 'index']);  


// // Logout Route
    
Route::get('/logout', [App\Http\Controllers\LogoutController::class, 'perform'])->name('logout.perform');


 /*------------------------------------------
 --------------------------------------------
 All Normal Users Routes List
 --------------------------------------------
 --------------------------------------------*/
//  Route::middleware(['auth', 'user-access:user'])->group(function () {
  
//     Route::get('/home', [HomeController::class, 'index'])->name('home');
//  });
  
/*------------------------------------------
 --------------------------------------------
 All Admin Routes List
 --------------------------------------------
 --------------------------------------------*/
//  Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
//     Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
// });
  
 /*------------------------------------------
 --------------------------------------------
 All client Routes List
 --------------------------------------------
 --------------------------------------------*/
//  Route::middleware(['auth', 'user-access:client'])->group(function () {
  
//     Route::get('/client/home', [HomeController::class, 'clientHome'])->name('client.home');
//  });
Route::get('/passerCommande',function (){
    return view('commander');
});

Route::get('/product', [ProductController::class, 'all'])->name('Product');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('account/verify/{token}', [AuthController::class, 'verifyAccount'])->name('user.verify');


Route::get('/products/filtrer-par-nom', [ProductController::class, 'filtrerParNom'])->name('products.filtrerParNom');
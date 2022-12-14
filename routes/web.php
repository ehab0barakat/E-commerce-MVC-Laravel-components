<?php

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

Route::get('/categories', function () {
    return view('categories');
});

Route::get('/categories/{mainCat}/', function () {
    return view('categoriesMainCat');
});

Route::get('/categories/{mainCat}/{subCat}', function () {
    return view('categoriesMainCatSubCat');
});


Route::get('singleProduct/', function () {
    return view('productdetail');
});





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();




// -----------------------------------------------------------------------------------------------

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


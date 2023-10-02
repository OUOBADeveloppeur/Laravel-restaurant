<?php

use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterRestaurant;

use App\Http\Controllers\Auth\RegisteredUserController;

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

Route::get('/index', function () {
    return view('index');
})->name('index');
Route::get('restaurant',[RegisterRestaurant::class,'restaurant'])->name('restaurant');
Route::get('ajouter_restaurant',[RegisterRestaurant::class,'create'])->name('store');
Route::POST('ajouter_restaurant',[RegisterRestaurant::class,'store'])->name('store');
Route::get('ajouter_menu',[RegisterRestaurant::class,'menu'])->name('ajoue_menu');
Route::POST('ajouter_menu',[RegisterRestaurant::class,'storemenu'])->name('storemenu');
Route::get('consultation', [vues::class,'consultation'] )->name('consult');
Route::get('pharmatie',[vues::class,'pharmatie'])->name('pharmatie');


Route::get('ajout_menu',function(){
    return view('/page/restaurant/ajout_menu');
})->name('ajouter');

Route::get('/',function(){
    return view('home');
})->name('home');

Route::get('ajouter_docteur',function(){
    return view('/page/consultation/ajouter_docteur');
})->name('ajouter_docteur');

Route::get('ajouter_pharmatie',function(){
    return view('/page/pharmatie/ajouter_pharmatie');
})->name('ajouter_pharmatie');



//
//Route::get('/usert/{user?}',function($user=null){
    //return $user;
//});
///

///



    
//Route::get('resister',[RegisteredUserController::class,'create'])->name('register');
//Route::get('client',[RegisteredUserController::class,'create1'])->name('client');

    

Route::get('index', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Route::fallback(function () {
   // return 'ERROR 502';
//});
require __DIR__.'/auth.php';

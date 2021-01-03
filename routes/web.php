<?php

use App\Http\Controllers\UserController;
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


/* capture the id of the custumer OR employer from generate URL....
    here {id} is required params and the request URL sholud be http://127.0.0.1:8000/emp/1
    return Emp 1
*/

Route::get('emp/{id}', function ($id) {

    return 'Emp ' . "" . $id++;
});

/*
  suppose i want to specify the route parameter occasioanly
  in order to achieve this i have to make the route param opcional
  i have to placing a '?' mark after the params name..
  e.g:
*/

Route::get('user/{id?}', function ($id) {
    return 'User:' . " " . $id;
});


/**
 * Named routes allow the convenient genaration of urls or redirects´
 * for specific routes..
 *
 * the chaining of routes can be specified using name()
 * method onto route definition as:
 *
 * the userController ira chamar pela funcão showProfile que tem  como parametro profile..
 * o parametro usa o metodo (name) na definição do router...
 */
Route::get('user/{id}->100', [UserController::class, 'showProfile'])->name('profile');


// welcome.blade.php
Route::get('/', function () {
    return view('welcome');
});

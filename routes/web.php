<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
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

Route::get('/', [UsersController::class, 'index']); //homepage or the data shown page
Route::get('/create', [UsersController::class, 'create']); //Registration Page for creation
Route::post('/', [UsersController::class, 'store']); //stores data in db
Route::get('/delete/{id}',[UsersController::class, 'delete']); //deletes the id data from db
Route::get('/edit/{id}',[UsersController::class, 'edit']); //rediricts to edit page with id
Route::post('/create/update/{id}', [UsersController::class, 'update']); //Updates data in the db

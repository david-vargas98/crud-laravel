<?php

use App\Http\Controllers\TaskController; //Se agrega la ruta al controlador
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
    return view('welcome');
});

//Se enlaza con el controlador:
//Se establece la ruta, que se va conectar a un controlador de recursos, la url es tasks, y el controlador
Route::resource('tasks', TaskController::class);
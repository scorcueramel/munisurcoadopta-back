<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormularioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('formulario', [FormularioController::class, 'store']);
Route::get('export/', [FormularioController::class, 'export']);


Route::group(
    [
        'middleware' => 'api',
        'prefix' => 'auth'
    ],
    function ($router) {
        Route::post('login', [AuthController::class, 'login']);
        Route::post('register', [AuthController::class, 'register']);
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('refresh', [AuthController::class, 'refresh']);
        Route::post('me', [AuthController::class, 'me']);
    }
);

Route::group([
    'middleware'=> ['jwt.verify'],
    'prefix'=> 'registers'
], function($router){
    Route::get('allregisters', [FormularioController::class, 'index']);
    Route::get('oneregister/{id}', [FormularioController::class, 'detalle']);
});



<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//enpoint should look like this /api/user/*
Route::prefix('user')->group(function () {
    Route::controller(UserController::class)->group(function () {
        //USER API ROUTES
        Route::post('/', 'create');
        Route::get('/', 'findAll');
        Route::get('/{id}', 'findOne');
        Route::patch('/{id}', 'update');
        Route::delete('/{id}', 'remove');
    });
});
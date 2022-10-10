<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
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
Route::post('/example', [ExampleController::class, 'create']);
Route::get('/example', [ExampleController::class, 'get']);
Route::get('/example/{id}', [ExampleController::class, 'getOne']);
Route::put('/example/{id}/update', [ExampleController::class, 'update']);
Route::delete('/example/{id}/delete', [ExampleController::class, 'delete']);

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\PostController;
use App\Http\Controllers\api\UserController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group([
  'middleware' => 'api',
  'prefix' => 'auth'

], function ($router) {
  Route::post('/login', [AuthController::class, 'login']);
  Route::post('/register', [AuthController::class, 'register']);
  Route::post('/logout', [AuthController::class, 'logout']);
  Route::post('/refresh', [AuthController::class, 'refresh']);
  Route::get('/user-profile', [AuthController::class, 'userProfile']);    
}); 

Route::middleware(['jwt.verify'])->group(function () {
  Route::post('/post/create', [PostController::class, 'store']);
  Route::get('/post', [PostController::class, 'index']);
  Route::get('/post/{id}', [PostController::class, 'show']);
  Route::post('/post/{id}', [PostController::class, 'update']);
  Route::delete('/post/{id}', [PostController::class, 'destroy']);
});



Route::get('/user', [UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'show']);
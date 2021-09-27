<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\AccessControll\RoleController;

use App\Http\Controllers\TheBlog\CategoryController;
use App\Http\Controllers\TheBlog\ArticleController;
use App\Http\Controllers\TheBlog\CommentController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/create-account', [AuthenticationController::class, 'createAccount']);

//login user
Route::post('/signin', [AuthenticationController::class, 'signin']);

//using middleware
Route::group(['middleware' => ['auth:sanctum']], function () {


    // user information
    Route::get('/profile', function(Request $request) {
        return auth()->user();
    });

    // sign out route
    Route::post('/sign-out', [AuthenticationController::class, 'signout']);

    //Access Controll

    Route::resource('role',RoleController::class);

    // The Blog 
    
    Route::resource('category',CategoryController::class);

    Route::resource('article',ArticleController::class);

    Route::resource('comment',CommentController::class);

    //



});



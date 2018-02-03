<?php

use Illuminate\Http\Request;
use App\User;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->group(function() {
    Route::get('/posts/unique', 'PostController@apiCheckUnique')->name('api.posts.unique');
});

// Test making api. that's really great 
// Route::get('users', function(Request $request){
//     return User::all();
// });
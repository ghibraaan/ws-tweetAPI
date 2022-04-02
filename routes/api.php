<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/2/tweets/{id}',[\App\Http\Controllers\Wrapper::class,'gettwt']) -> name('gettwt') -> middleware('npm');
Route::get('/2/users/by/username/{username}', [\App\Http\Controllers\Wrapper::class, 'userby']) -> name('userby') -> middleware('npm');
Route::get('/2/users/{id}', [\App\Http\Controllers\Wrapper::class, 'userid']) -> name('userid') -> middleware('npm');
Route::get('/2/users/{id}/followers', [App\Http\Controllers\Wrapper::class, 'followers']) -> name('followers') -> middleware('npm');
Route::get('/2/users/{id}/liked_tweets', [App\Http\Controllers\Wrapper::class, 'liked']) -> name('liked') -> middleware('npm');
Route::get('/user/identitas', function (){
    return [
        'code' => '0',
        'data' => [
            'npm'=>'197006056',
            'nama'=>'Muhammad Ghibran AL Khamaeni',
            'email'=>'197006056@student.unsil.ac.id'
        ]
    ];
}) -> middleware('npm');

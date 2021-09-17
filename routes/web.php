<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PSController;
use App\Http\Controllers\SaranaController;
use App\Http\Controllers\CommentController;

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

Route:: get('/',[HomeController::class,'indexLaravel']);

Route:: prefix('prodi')->group(function(){
    Route::get('/manajemen-informatika', [PSController::class, 'mi']);
    Route::get('/teknik-informatika', [PSController::class, 'ti']);
});

Route:: get('/news/{id}',[NewsController::class,'News']);

Route:: prefix('sarana')->group(function(){
    Route::get('/perkantoran', [SaranaController::class, 'perkantoran']);
    Route::get('/laboratorium', [SaranaController::class, 'laboratorium']);
    Route::get('/kelas', [SaranaController::class, 'kelas']);
    Route::get('/lainnya', [SaranaController::class, 'lainnya']);

});

Route:: get('/about',[AboutController::class,'AboutUser']);

Route:: get('comment/{nama}/{id}',[CommentController::class,'comment']);
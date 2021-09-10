<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsController;

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
    Route::get('/mi',function(){
        return "Halaman Prodi Manajemen Informatika";
    });
    Route::get('/ti',function(){
        return "Halaman Prodi Teknik Informatika";
    });
});

Route:: get('/news/{id}',[NewsController::class,'News']);

Route:: prefix('sarana')->group(function(){
    Route::get('/perkantoran',function(){
        return "Halaman sarana Perkantoran";
    });
    Route::get('/laboratorium',function(){
        return "Halaman sarana laboratorium";
    });
    Route::get('/kelas',function(){
        return "Halaman sarana kelas";
    });
    Route::get('/lainnya',function(){
        return "Halaman sarana lainnya";
    });
});

Route:: get('/about',[AboutController::class,'AboutUser']);

Route::get('/comment/{nama}/comment/{id?}',function($nama, $id){
    return "User ".$nama. " Mengisi komentar ke-".$id;
});
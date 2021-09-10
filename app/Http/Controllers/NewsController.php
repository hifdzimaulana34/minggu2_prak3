<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function News($id){
        return 'Halaman News Dengan yang ke-'.$id;
    }
}

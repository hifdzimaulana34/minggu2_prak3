<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comment($nama,$komen){
        return view ('comment', ['nama'=>$nama],['komen'=>$komen]);
    }
}
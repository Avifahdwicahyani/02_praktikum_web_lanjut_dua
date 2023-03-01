<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    function articles($id){
        return 'Halaman dengan ID' . $id;
    }
}

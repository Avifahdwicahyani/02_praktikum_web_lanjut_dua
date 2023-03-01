<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function index(){
        return 'Selamat Datang'; 
    }

    function about(){
        return 'NIM : 2141720053 <br> Nama : Avifah Dwi Cahyani'; 
    }
    function articles($id){
        return 'Halaman dengan ID' . $id;
    }
}


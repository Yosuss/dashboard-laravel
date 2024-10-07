<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dataPesananController extends Controller
{
    //
    public function index(){
        return view('dashboard.data-pesanan');
    }
}
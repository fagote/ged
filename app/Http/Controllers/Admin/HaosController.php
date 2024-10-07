<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HaosController extends Controller
{
    //=========================================
    // Página index da pasta empresa Haos

    public function indexHaos(){

        return view('admin.haos.haos');
    }

    //=========================================
}

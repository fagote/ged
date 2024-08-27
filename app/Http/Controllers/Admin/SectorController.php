<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sector;
use Illuminate\Http\Request;

class SectorController extends Controller
{
    public function index(){

        $sectors = Sector::paginate(15);

        return view('admin.sectors.s_index', compact('sectors'));
    }

    public function create(){   

        return view('admin.sectors.s_create');

    } 

    public function store(Request $request){

        Sector::create($request->all());

        return redirect()->route('sectors.index');

    }
}

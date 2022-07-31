<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perjalanan;
use Illuminate\Routing\Controller;

class PerjalananController extends Controller
{
    public function perjalanan()
    {
        $data = perjalanan::all();
        return view('perjalanan.perjalanan', compact('data'));
    }

    public function create(Request $request){
        Perjalanan::create($request->all());
        return redirect()->route('perjalanan');
    }
    
}

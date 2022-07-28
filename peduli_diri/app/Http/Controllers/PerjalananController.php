<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerjalananController extends Controller
{
    public function perjalanan()
    {
        $data = perjalanan::all();
        return view('perjalanan.perjalanan');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perjalanan;
use Illuminate\Routing\Controller;
use App\Http\Resources\PostResource;

class PerjalananController extends Controller
{
    public function perjalanan()
    {
        $data = perjalanan::all();
        return view('perjalanan.perjalanan', compact('data'));
    }

    

    public function create(Request $request){
        // dd($request);
        Perjalanan::create($request->all());
        return redirect(route('perjalanan'))->with('message','Sending infomation successfully');
    }
    
}

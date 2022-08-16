<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perjalanan;
use Illuminate\Routing\Controller;
use App\Http\Resources\PostResource;
use Illuminate\Support\Facades\Validator;

class PerjalananController extends Controller
{
    public function perjalanan()
    {
        $data = perjalanan::all();
        return view('perjalanan.perjalanan', compact('data'));
    }

    public function index()
    {
        //get posts
        $posts = Post::latest()->paginate(5);

        //return collection of posts as a resource
        return new PostResource(true, 'List Data Posts', $posts);
    }



    

    public function create(Request $request){
        // dd($request);
        Perjalanan::create($request->all());
    }
    
}

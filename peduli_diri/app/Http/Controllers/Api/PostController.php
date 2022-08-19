<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Models\Perjalanan;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get posts
        $posts = Perjalanan::latest()->paginate(5);

        //return collection of posts as a resource
        return new PostResource(true, 'List Data Posts', $posts);
    }

    public function store(Request $request)
    {
        $post = Auth::user()->id;
        dd($post);
        
        // dd($request);
        //define validation rules
        $validator = Validator::make($request->all(), [
            'user_id'     => 'required',
            'tanggal'     => 'required',
            'waktu'   => 'required',
            'lokasi'   => 'required',
            'suhu'   => 'required', 
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create post
        $post = Perjalanan::create
        ([
            'user_id'     => $post,
            'tanggal'   => $request->tanggal,
            'waktu'   => $request->waktu,
            'lokasi'   => $request->lokasi,
            'suhu'   => $request->suhu,
        ]);

        //return response
        // return new PostResource(true, 'Data Post Berhasil Ditambahkan!', $post);
        return redirect(route('perjalanan'))->with('message','Sending infomation successfully');
    }
}

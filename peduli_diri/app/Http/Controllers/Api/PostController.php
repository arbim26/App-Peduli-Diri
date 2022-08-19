<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use App\Models\Perjalanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

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
        //define validation rules
        $validator = Validator::make($request->all(), [
            'nik'     => 'required',
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
        $post = Perjalanan::create([
            'nik'     => $request->nik,
            'tanggal'   => $request->tanggal,
            'waktu'   => $request->waktu,
            'lokasi'   => $request->lokasi,
            'suhu'   => $request->suhu,
        ]);

        //return response
        return new PostResource(true, 'Data Post Berhasil Ditambahkan!', $post);
        return redirect(route('perjalanan'))->with('message','Sending infomation successfully');
    }

    public function show(Post $post)
    {
        //return single post as a resource
        return new PostResource(true, 'Data Post Ditemukan!', $post);
    }

    public function update(Request $request, Perjalanan $perjalanan)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'nik'     => 'required',
            'tanggal'     => 'required',
            'waktu'   => 'required',
            'lokasi'   => 'required',
            'suhu'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //check if image is not empty
        if ($request->hasFile('image')) {

            //update post with new image
            $post->update([
                'nik'     => $request->nik,
                'tanggal'   => $request->tanggal,
                'waktu'   => $request->waktu,
                'lokasi'   => $request->lokasi,
                'suhu'   => $request->suhu,
            ]);

        } 

        //return response
        return new PostResource(true, 'Mantap!', $perjalanan);

    }
    
    public function destroy( Perjalanan $perjalanan)
    {
    
        //delete post
        $perjalanan->delete();
    
        //return response
        return new PostResource(true, 'Data Post Berhasil Dihapus!', null);
    }
}
<?php

namespace App\Http\Controllers\Api;

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
        $posts = Perjalanan::latest()->get();

        //return collection of posts as a resource
        return new PostResource(true, 'List Data Posts', $posts);
    }

    public function store(Request $request)
    {
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
        $post = Perjalanan::create([
            'user_id'     => $request->user_id,
            'tanggal'   => $request->tanggal,
            'waktu'   => $request->waktu,
            'lokasi'   => $request->lokasi,
            'suhu'   => $request->suhu,
        ]);

        //return response
        return new PostResource(true, 'Data Post Berhasil Ditambahkan!', $post);
        // return redirect(route('perjalanan'))->with('message','Sending infomation successfully');
    }

    public function show($id)
    {
        //find post by ID
        $post = Perjalanan::findOrfail($id);

        //make response JSON
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Post',
            'data'    => $post 
        ], 200);

    }


    public function update(request $request, perjalanan $post){

        //define validation rules
        $validator = Validator::make($request->all(), [
            'user_id'     => 'required',
            'tanggal'     => 'required',
            'waktu'   => 'required',
            'lokasi'   => 'required',
            'suhu'   => 'required', 
        ]);

        //check if validation fails
        if ($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

            //update post with new catatan
            $post->update([
                'user_id'     => $request->user_id,
                'tanggal'   => $request->tanggal,
                'waktu'   => $request->waktu,
                'lokasi'   => $request->lokasi,
                'suhu'   => $request->suhu,
            ]);
        
            //return response
       return new PostResource(true, 'Data catatan Berhasil Diubah!', $post);
}
    public function destroy($id)
    {
        //find post by ID
        $post = Perjalanan::findOrfail($id);

        if($post) {

            //delete post
            $post->delete();

            return response()->json([
                'success' => true,
                'message' => 'Post Deleted',
            ], 200);

        }

        //data post not found
        return response()->json([
            'success' => false,
            'message' => 'Post Not Found',
        ], 404);
    }
}
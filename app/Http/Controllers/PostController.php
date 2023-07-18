<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       $posts = Post::paginate(1);
        $title = 'Posts';
        $short_description = 'Best blog posts in the world';
        if ($request->ajax() || $request->isJson()) {
             return response()->json($posts, 200);
        }
        else{
            return view('posts',['title'=>$title,'short_description'=>$short_description ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, Request $request)
    {
        $post = Post::find($id);
        if ($request->ajax() || $request->isJson()) {
             return response()->json($post, 200);
        }
        else{
            return view('post',['post'=>$post]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

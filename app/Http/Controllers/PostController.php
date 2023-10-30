<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $title = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in '. $category->name;
        }
        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by '. $author->name;
        }
        
        
        return view('posts',[
            "title" => "All Posts". $title,
            "active" => "posts",
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => "posts",
            "post" => $post
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
//     public function create()
//     {
//         //
//     }

//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(StorePostRequest $request)
//     {
//         //
//     }

//     /**
//      * Display the specified resource.
//      */
    

//     /**
//      * Show the form for editing the specified resource.
//      */
//     public function edit(Post $post)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(UpdatePostRequest $request, Post $post)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(Post $post)
//     {
//         //
//     }
}

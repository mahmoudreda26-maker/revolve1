<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{

    public function index()
    {
        $posts = Post::with('category')->latest()->get();
        return view('home', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::with('category')->where('slug', $slug)->firstOrFail();
        return view('post', compact('post'));
    }


    public function search(Request $request)
    {
        $q = $request->q;
        $posts = Post::where('title','like', "%$q%")
                     ->orWhere('content','like', "%$q%")
                     ->get();

        return view('search', compact('posts'));
    }
}

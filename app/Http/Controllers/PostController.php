<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index(){
        $posts = Post::where('published', 1)
                ->orderBy('created_at', 'desc')
                ->paginate(8);
                
        return view('articles', compact('posts'));
    }

    public function show(Post $slug){
        $article = $slug;
        $other_articles = Post::where('id', '!=', $article->id)->take(3)->get();
        return view('article-detail', compact('article', 'other_articles'));
    }
}

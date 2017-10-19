<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;

class BlogController extends Controller
{
    public function getIndex() {
    	$posts = Post::paginate(10);

    	return view('blog.index')->withPosts($posts);
    }

    public function getSingle($id) {
    	// fetch from the DB based on slug
    	$post = Post::find($id);

    	return view('blog.single')->withPost($post);
    }
}

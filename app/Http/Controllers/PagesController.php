<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use Mail;
use Session;

class PagesController extends Controller
{
    public function getIndex() {
    	$posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
    	return view('pages.welcome')->withPosts($posts);
    }

    public function getAbout() {
    	$first = 'Wahida';
    	$last = 'Moon';

    	$fullname = $first . "" .$last;
    	$email = 'wahidamoon34@gmail.com';
    	$data = [];
    	$data['email'] = $email;
    	$data['fullname'] = $fullname;

    	return view('pages.about')->withData($data);
    }

    public function getContact() {
    	return view('pages.contact');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
class PostController extends Controller
{
    public function show($id){
    	$post = Post::findOrFail($id);
    	// $this->authorize('view',$post);
    	$this->authorize('view-post');
    	return view('post_show',['post'=>$post]);
    }
}

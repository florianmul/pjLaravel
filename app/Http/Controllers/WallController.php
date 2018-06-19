<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class WallController extends Controller
{
	public function show($search=false){
		$posts=Post::all();
		return view('show', ['search'=>$search, 'posts'=>$posts]);
	}
	public function write(Request $request){
		$post= new Post;
		$post->content=$request->post_content;
		$post->author= \Auth::id();

		$post->save();
		return redirect('wall');
	}
}

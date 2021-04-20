<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class Postscontroller extends Controller
{
	public function __construct(){

		$this->middleware('auth');
	}
    
    public function create(){
    	
    	return view('posts.create');
    	}

    public function store(Request $request ){

    	$data=$request->validate([
    		'caption'=>'required',
    		'image'=>['required','image'],

    	]);

    	$imagepath=$request->file('image')->store('uploads','public');
    		
    	$image=Image::make(public_path("storage/{$imagepath}"))->fit(1200,1200);
    	$image->save();	
    	auth()->user()->posts()->create([

    		'caption'=>$data['caption'],
    		'image'=>$imagepath,
    	]);
  

    	return redirect('/profile/'. auth()->user()->id);
    	// return view('posts/');
    }

    public function show(\App\Models\Post $post){

    return view('posts.show',compact('post'));

    }

}

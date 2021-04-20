<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;


class ProfilesController extends Controller
{
        public function index($user)
    {
    	$user=user::findOrFail($user);
        return view('profiles.index',[
        	'user'=>$user,
        ]);
    }

         public function edit(user $user)
    {
  
        return view('profiles/edit',compact('user'));
    	

    }

    public function update(User $user,Request $request){

    	$data=$request->validate([
    		'title'=>'required',
    		'description'=>'required',
    		'url'=>'url',
    		// 'image'=>'image',
    	]);
   
    	auth()->user()->profile()->update($data);

    	return redirect('/profile/'.$user->id);
    }

}

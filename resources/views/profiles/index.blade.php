@extends('layouts.app')

@section('content')
<div class="container">
<div class="d-block mx-auto" style="width: 70vw">    
<div class="row" style="margin-left: 15%">
    <div class="col-sm-3  pl-5 pt-2 pb-5 pr-1"> 
        <div class="d-block pl-2">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/132px-Instagram_logo_2016.svg.png" class="rounded-circle" style="max-height:130px ">
        </div>
    </div>
    <div class="col-sm-9 pt-2">
        <div class="d-flex justify-content-between align-items-baseline">
            <h1>{{ $user->username }}</h1>
            <a href="/p/create">Add New Post</a>
        </div>
        <div><a href="/profile/{{$user->id}}/edit">Edit Profile</a></div>
        <div class="d-flex">
        <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
        <div class="pr-5"><strong>23k</strong> followers</div>
        <div class="pr-5"><strong>153</strong> posts</div>
        </div>
        <div class="pt-3 font-weight-bold">{{ $user->profile->title }}</div>
        <div>{{ $user->profile->description }}.</div>
        <div><a href="#">{{ $user->profile->url }}</a></div>
    </div>
</div>

<div class="row pt-4">
   @foreach($user->posts as $post)
     <div class="col-sm-4 pb-4">
       <a href="/p/{{$post->id }}">
        <img src="/storage/{{ $post->image}}" class="img-fluid">
       </a>
   
    </div>
    @endforeach

</div>
</div>
</div>
@endsection

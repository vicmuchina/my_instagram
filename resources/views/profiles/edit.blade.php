@extends('layouts.app')

@section('content')
<div class="container">
 <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">

    @csrf 
    
    @method('PATCH')

 <div class="row">
      <div class="col-8 offset-2">  
        <div><h1>Edit Profile</h1></div> 
      </div>  
    </div>
    <div class="row">
        <div class="col-8 offset-2">
          <div class="form-group">
          
            <label for="title" class="col-md-4 col-form-label"><strong>Profile Title</strong></label>

            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->Profile->title }}" autocomplete="title" autofocus>

            @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>
        </div>    
    </div>

    <div class="row">
        <div class="col-8 offset-2">
          <div class="form-group">
          
            <label for="description" class="col-md-4 col-form-label"><strong>Profile Description</strong></label>

            <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->Profile->description  }}" autocomplete="description" autofocus>

            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>
        </div>    
    </div>

     <div class="row">
        <div class="col-8 offset-2">
          <div class="form-group">
          
            <label for="url" class="col-md-4 col-form-label"><strong>Profile url</strong></label>

            <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?? $user->Profile->url }}" autocomplete="url" autofocus>

            @error('url')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>
        </div>    
    </div>


    <div class="row">
        <div class="col-8 offset-2">
            <label for="image" class="col-md-4 col-form-label"><strong>Profile image</strong></label>

            <input type="file" class="form-control-file" id="image" name="image">

            @error('image')
               
                    <strong style="color: red;">{{ $message }}</strong>
               
            @enderror

        </div>
    </div>      

    <div class="row pt-4">
         <div class="col-8 offset-2">
        <button class="btn btn-info">Save Profile</button>
        </div>
    </div>

  </form> 

</div>
@endsection
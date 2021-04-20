@extends('layouts.app')

@section('content')
<div class="container">
  <form action="/p" enctype="multipart/form-data" method="post">

    @csrf 

 <div class="row">
      <div class="col-8 offset-2">  
        <div><h1>Add New Post</h1></div> 
      </div>  
    </div>
    <div class="row">
        <div class="col-8 offset-2">
          <div class="form-group">
          
            <label for="caption" class="col-md-4 col-form-label">Post Caption</label>

            <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" autocomplete="caption" autofocus>

            @error('caption')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>
        </div>    
    </div>

    <div class="row">
        <div class="col-8 offset-2">
            <label for="image" class="col-md-4 col-form-label">Post image</label>

            <input type="file" class="form-control-file" id="image" name="image">

            @error('caption')
               
                    <strong style="color: red;">{{ $message }}</strong>
     
            @enderror

        </div>
    </div>      

    <div class="row pt-4">
         <div class="col-8 offset-2">
        <button class="btn btn-info">Add New Post</button>
        </div>
    </div>

  </form> 

</div>
@endsection

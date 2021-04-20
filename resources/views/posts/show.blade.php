@extends('layouts.app')

@section('content')
<div class="container">
<div class="d-block mx-auto" style="margin-left: 10%;margin-right: 10%;">    
<div class="row ">
     <div class="col-8 d-flex">
        <div style="width:100%;height: 100%;">
        <img src="/storage/{{$post->image}}" class="img-fluid" style="max-height:90vh ;width:auto; ">
        </div>

        <div style="padding-left: 2%;">
         <h3>{{$post->user->username}}</h3>
         <p>{{$post->caption}}</p>
        </div>
     </div>

</div>
</div>
</div>
@endsection

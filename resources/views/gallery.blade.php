
@extends('layouts.main')

@section('content')
 <div class="row">
    <div class="col-md-12">
     <h1>My Galleries</h1>
    </div>    
 </div>
   
 <div class="row">
   <div class="col-md-8">
   gallery List      
   </div>
      
   <div class="col-md-4">
   <form class="form" method="POST"action={{url('gallery/savegallery')}}>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      
      <div class="form-group">
         <input type="text" name="gallery_name" id="gallery_name" placeholder="Name of the gallery"
          class="form-control" />
      </div>
       <button class="btn btn-primary">Save</button>
   </form>   
   </div>   
   
 </div>  

<form action="/foo/bar" method="POST" class="dropzone" id="addImages">
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
@endsection
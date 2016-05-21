@extends('layouts.main')
@section ('content')
    <div class="row"> 
       <div class="col-md-12">
          <h1>{{$gallery->name}}</h1>
       </div>        
    </div>
      
      <div class="row">
        <div class="col-md-12">
        <form action="{{url('image/upload')}}"
        class="dropzone"
        id="addImages">
         {{ csrf_field() }}
         
         <input type="hidden" name="gallery_id" value="{{$gallery->id}}" />
        </form>
        
        </div>
        
      </div>
     <div class="row"> 
       <div class="col-md-12">
          <a href="{{url('gallery/list')}}" class="btn btn-primary">Back</a>
       </div>         
    
@endsection    
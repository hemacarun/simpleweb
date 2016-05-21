@extends('layouts.main')
@section('content')
 <div class="jumbotron col-sm-6 col-sm-push-3">
    <h1>login</h1>
        
    <form  class='form' action="{{url('auth/dologin')}}" method="POST">
         <input type="hidden" name="_token" value="{{ csrf_token() }}" />                    
      <div class="form-group">
      <input type="text" id="email"  name="email"
       placeholder="Enter your email address" class="form-control"/>
    
      </div>  
        
       <div class="form-group">
      <input type="password" id="password"  name="password"
       placeholder="Enter your password" class="form-control"/>
       
       
      </div>    
        
       <div class="form-group">
      <input type="submit" id="login-btn" name="login" value="login"
       class="btn btn-primary"/>    
      </div>
        
      
        
    </form>   
    
 </div>
    
    
    
@endsection    
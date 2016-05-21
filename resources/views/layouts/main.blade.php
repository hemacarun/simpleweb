<!DOCTYPE html>
<html lang="en">
<!-- head --> <head>
< meta name="csrf-token" content="{{ csrf_token() }}" />
@include('header')

</head>
<!-- end head -->

<body>
    <!-- wrapper -->
   <div class="container">
    @if(Session::has('flash_message'))
      <div class="alert alert-success">{{Session::get('flash_message')}}</div>    
          
    @endif
    @if(Session::has('flash_error'))
      <div class="alert alert-danger">{{Session::get('flash_error')}}</div>    
          
    @endif
   
   
         @yield('content')
    </div> <!-- end wrapper -->
              @push('scripts')
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>
     <script src="{{url(elixir('js/all.js'))}}"> </script>
       
@endpush
  @stack('scripts')
<!-- footer -->
@include('footer')


<!-- end footer -->

</body>
</html>
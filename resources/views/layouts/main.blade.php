<!DOCTYPE html> <html lang="en">
<!-- head --> <head>
@include('header')

</head>
<!-- end head -->

<body>
    <!-- wrapper -->
   <div class="container">
         @yield('content')
    </div> <!-- end wrapper -->
              @push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>
      <script src="{{url(elixir('js/all.js'))}}"> </script>
@endpush
  @stack('scripts')
<!-- footer -->
@include('footer')


<!-- end footer -->

</body>
</html>
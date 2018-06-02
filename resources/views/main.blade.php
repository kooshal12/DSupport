<!doctype html>
<html lang="en">
  @include('partials._head')


  <body>
    
    @include('partials._navigation')

    <div class = "container">
      

      @yield('content')
    
    </div>

  

  </body>
  @include('partials._footer')
</html>
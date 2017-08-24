<!DOCTYPE html>
<html lang="en">
   @include('includes.head')
   <body>
      <header class="row">
         @include('includes.header')
      </header>
      <div class="container">
         <div id="main" class="row">
            @yield('content')
         </div>
      </div>
      <footer class="row">
         @include('includes.footer')
      </footer>
   </body>
</html>
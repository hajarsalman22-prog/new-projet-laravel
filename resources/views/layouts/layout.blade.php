<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
 @vite(['resources/css/app.css', 'resources/js/app.js'])
 
</head>
<body>
    <div class="d-flex flex-column min-vh-100">
      @include('partials.navbar')
      <main class="flex-fill">

          <div class="row">
             <div class="col-2 p-3">
               @include('partials.sidebar')
             </div>
             <div class="col-10 p-4 ">
                 @yield('content')
             </div>
          </div>
      </main>
      <footer>
        @include('partials.footer')
     </footer>
    </div>
</body>
</html>
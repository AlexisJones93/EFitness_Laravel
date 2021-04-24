<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
        <script src="{{ asset('js/app.js') }}"></script>
       
      
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
       @yield('content')
        </div>
        @yield('scripts')
    </body>
</html>
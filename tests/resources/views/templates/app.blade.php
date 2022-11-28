<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="{{('bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{('bootstrap/css/normalize.css')}}" rel="stylesheet">
    <link href="{{('bootstrap/css/table.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <script src="{{('bootstrap/js/bootstrap.bundle.js')}}"></script>
    <script src="{{('bootstrap/js/table.js')}}"></script>

  <nav style="height:30px;" class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark text-white py-0">
    <div class="container-fluid">
      <i class="fa fa-home"><a class="navbar-brand py-0" href="{{Route('main_page')}}">&nbsp;&nbsp;Palmet Digital</a></i>
    </div>
  </nav>
  </body>
</html>

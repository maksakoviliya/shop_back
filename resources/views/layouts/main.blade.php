<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>domain | @yield('title')</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}"/>
    <script defer="defer" src="{{ mix('/js/app.js') }}"></script>
  </head>
  <body>
    <div id="app">
      <div class="side-menu">
        @include('components.search')
        @include('components.side-menu')
      </div>
      <div class="wrapper">
        <div class="wrapper__overlay"></div>
        @include('components.header')
        @section('content')
            Default content!
        @show
        @include('components.footer')
      </div>
    </div>
  </body>
</html>
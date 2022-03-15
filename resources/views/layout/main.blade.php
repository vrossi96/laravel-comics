<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   <title>@yield('title-name')</title>
</head>

<body>
   @include('layout.partials.header')

   @include('layout.partials.jumbotron')

   @yield('main')

   @include('layout.partials.footer')
</body>

</html>

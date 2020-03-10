<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       @yield('links')
     
        <title>Tarafé- {{ $title ?? ' ' }}</title>
    </head>
    <body>
        
        @include('layouts/partials/_nav')

        @yield('content')

         @include('layouts/partials/_footer')
         @yield('scripts')
    </body>
</html>

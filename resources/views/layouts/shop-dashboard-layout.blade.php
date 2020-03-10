<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       @yield('links')
        <title>Tarafé- {{ $title ?? ' ' }}</title>
    </head>
    <body>
        @yield('content')
         @yield('scripts')
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('.components.head')
    <body class="bg-[url('https://images.squarespace-cdn.com/content/v1/5942fb7ee3df28eb9babbc38/1731539450654-EIYJL32FE223TMNQMFKM/still-life-christmas-decoration-with-copy-space.jpg?format=2500w')]">
        @yield('content')
    </body>
</html>

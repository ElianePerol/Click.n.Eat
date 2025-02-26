<!DOCTYPE html>
<html lang="en">

    @include('layout.head-template')
    
    <body>
        @extends('layout.preloader')
        @yield('main')
        @include('layout.footer')

        @yield('scripts')
    </body>

</html>
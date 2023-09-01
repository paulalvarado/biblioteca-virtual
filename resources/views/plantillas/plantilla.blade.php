<!DOCTYPE html>
<html lang="en" class="h-full">
    {{-- traemos el header --}}
    @include('plantillas.header')
<body class="">
    {{-- traemos el sidebar --}}
    @include('plantillas.sidebar')
    {{-- traemos el contenido --}}
    <div class="ps-24 py-4 pe-4 h-full">
        {{-- traemos el nav --}}
        @include('plantillas.nav')
        @yield('contenido')
    </div>
    {{-- traemos el footer --}}
    @include('plantillas.footer')
</body>
</html>

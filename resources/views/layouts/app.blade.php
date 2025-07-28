<!DOCTYPE html>
<html lang="en">

<head>
    {{-- Default meta --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Title default (akan diganti jika child template menambahkan @section('meta')) --}}
    <title>@yield('title', 'Prosperity Expo')</title>
    
    {{-- Taruh section meta di sini --}}
    @yield('meta')
</head>

<body>
    <!-- Content section to be defined by child templates -->
    @yield('content')

    <!-- Stack for additional scripts from child templates -->
    @stack('scripts')
</body>

</html>
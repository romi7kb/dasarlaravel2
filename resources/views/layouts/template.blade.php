<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Blade Templating</title>
</head>

<body>
    <!-- Nav -->
    @include('layouts.nav')
    <!-- end Nav -->

    @yield('konten')

    <footer>Latihan Blade Templating</footer>
</body>

</html>

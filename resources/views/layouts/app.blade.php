<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 10</title>
    @vite(['resources/scss/app.scss'])
</head>
<body data-bs-theme="dark">
    @include('layouts.navbar')

    <div id="app" class="container py-5">
        @yield('body')
    </div>

    @vite(['resources/js/app.js'])
  </body>
</body>
</html>

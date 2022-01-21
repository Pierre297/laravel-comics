<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Laravel comics</title>
</head>
<body>
    
    <section>
        @include('components.header')
        <h1>sono il main</h1>
        {{-- @yield('content') --}}
        @include('components.footer')
    </section>

</body>
</html>
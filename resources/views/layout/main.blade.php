<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel comics</title>
</head>
<body>
    
    <section>
        @include('components.header')
        @yield('content')
        @include('components.footer')
    </section>

</body>
</html>
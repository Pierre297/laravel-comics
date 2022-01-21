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
        {{-- header --}}
        @include('components.header')

        {{-- main --}}
        <main>
            <div id="jumbo">

            </div>
            <div class="content">
                
                <button class="blue-btn first-btn" type="button"> <a href="#">CURRENT SERIES</a></button>
                <div id="comic-books"></div>
                <button class="blue-btn" type="button"><a href="#">LOAD MORE</a></button>
            </div>
        </main>
        

        {{-- @yield('content') --}}
        @include('components.footer')
    </section>

</body>
</html>
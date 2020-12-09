<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href={{ asset('css/app.css') }} rel="stylesheet">

        <!-- Styles -->
        <link href={{ asset('css/app.css') }} rel="stylesheet">
    </head>
    <body>
        @include('base.header')
        <main class="app-contents">
            <div>
                @yield('content')
            </div>
        </main>    
        @include('base.footer')
        <script src="{{asset('/assets/js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
    </body>
</html>

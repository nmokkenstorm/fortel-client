<!doctype html>
<html lang="{{ app()->getLocale() }}" class="h-screen">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}" type="">
        <title>{{env('app.title', 'Laravel')}}</title>
    </head>
    <body class="min-h-screen">

        <div id="container" class="container rounded mx-auto min-h-screen">
            <app></app>
        </div>

    <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>

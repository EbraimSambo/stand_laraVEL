@props(['selector'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('styles/css/global.css')}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
        <title> {{ $title ?? 'StandFire' }} </title>
    </head>
    <body>
        <div id="appContainerGlobal">
            <x-partials.header :selector="$selector" />
                <main id="main">
                    {{$slot}}
                </main>
            <x-partials.newletter />
            <x-partials.message />
            <x-partials.footer />
        </div>

        <script defer src="{{ asset('/assets/js/jquery.js') }}"></script>
        <script src="{{ asset('/assets/js/main.js') }}"></script>

    </body>
</html>



<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'School Management') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="/assets/css/dashlite.css?ver=2.9.1">
        <link rel="stylesheet" href="/assets/css/theme.css?ver=2.9.1">
        <link rel="stylesheet" href="/assets/css/editors/quill.css?ver=2.9.1">
        <link rel="stylesheet" href="/assets/css/style.css">

        <!-- Fav Icon  -->
        <link rel="shortcut icon" href="/images/favicon.png">
        
    </head>
    <body class="nk-body bg-lighter npc-default has-sidebar no-touch nk-nio-theme">
        <div class="nk-app-root">
            
            <div class="nk-main">
                @include('layouts/sidebar')
                <!-- wrap @s -->
                <div class="nk-wrap ">
                    @include('layouts/header')

                    @yield('content')

                    @include('layouts/footer')
                </div>
                <!-- wrap @e -->
            </div>
            
        </div>
    </body>
    
    <script src="/assets/js/bundle.js?ver=2.9.1"></script>
    <script src="/assets/js/scripts.js?ver=2.9.1"></script>
    <script src="/assets/js/libs/editors/quill.js?ver=2.9.1"></script>
    <script src="/assets/js/editors.js?ver=2.9.1"></script>
    <script src="/assets/js/charts/chart-ecommerce.js?ver=2.9.1"></script>
    <script src="/assets/js/libs/fullcalendar.js?ver=2.9.1"></script>
    <script src="/assets/js/apps/calendar.js?ver=2.9.1"></script>
    <script src="/assets/js/custom.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsXf3kypbmBUHDykCKHRIsNQAppgtZvrk&libraries=places&callback=initAutocomplete" async defer></script>
    
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="./assets/css/dashlite.css?ver=2.2.0">
        <link rel="stylesheet" href="./assets/css/theme.css?ver=2.2.0">

        <script src="./assets/js/bundle.js?ver=2.9.1"></script>
        <script src="./assets/js/scripts.js?ver=2.9.1"></script>
        <script src="./assets/js/charts/chart-ecommerce.js?ver=2.9.1"></script>
    </head>
    <body class="nk-body bg-lighter npc-default has-sidebar ">
        <div class="nk-app-root">
            <div class="nk-main">
                @include('auth.login')
            </div>
        </div>
    </body>
</html>

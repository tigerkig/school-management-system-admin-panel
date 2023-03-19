<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'School Management') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="/assets-2.2/css/dashlite.css?ver=2.2.0">
        <link rel="stylesheet" href="/assets-2.2/css/theme.css?ver=2.2.0">
        <link rel="stylesheet" href="/assets/css/style.css">

        <!-- Fav Icon  -->
        <link rel="shortcut icon" href="/images/favicon.png">
    </head>
    <body class="nk-body bg-white npc-subscription has-aside">
          <div class="nk-app-root">
            
               <div class="nk-main">
                    <!-- wrap @s -->
                    <div class="nk-wrap ">
                         @include('layouts/subHeader')
                         <div class="nk-content ">
                              <div class="container wide-xl">
                                   <div class="nk-content-inner">
                                        <!-- .nk-aside -->
                                        @include('layouts/subSidebar')
                                        <!-- .nk-aside -->
                                        <div class="nk-content-body">

                                             @yield('subContent')

                                             <!-- footer @s -->
                                             @include('layouts/subFooter')
                                             <!-- footer @s -->

                                        </div>
                                   </div>
                              </div>
                         </div>

                    </div>
                    <!-- wrap @e -->
               </div>
          </div>

          <script src="/assets-2.2/js/bundle.js?ver=2.2.0"></script>
          <script src="/assets-2.2/js/scripts.js?ver=2.2.0"></script>
          <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
          <script src="/assets/js/custom.js"></script>
    </body>
</html>

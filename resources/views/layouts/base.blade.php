<!doctype html>
<html lang="en">
    <head>
        <!-- Title and Meta -->
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta http-equiv="X-UA-Compatible" content="ie=edge">
          
               <title>{{$title ??config('app.name')}}</title>
                <link rel="shortcut icon" href="{{asset('media/favicons/laravel.svg')}}" type="image/x-icon">
        <!-- END Title and Meta -->

        <!-- Icons -->
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Page JS Plugins CSS go here -->

        <!-- Fonts and OneUI framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
        <link rel="stylesheet" id="css-main" href="{{asset('css/oneui.min.css')}}">

        <!-- include specific file from css/themes/ folder to alter the default color theme of the template. -->
        {{-- <link rel="stylesheet" id="css-theme" href="{{asset('css/themes/amethyst.min.css')}}">
        <link rel="stylesheet" id="css-theme" href="{{asset('css/themes/city.min.css')}}">
        <link rel="stylesheet" id="css-theme" href="{{asset('css/themes/flat.min.css')}}">
        <link rel="stylesheet" id="css-theme" href="{{asset('css/themes/modern.min.css')}}">
        <link rel="stylesheet" id="css-theme" href="{{asset('css/themes/smooth.min.css')}}"> --}}
        <!-- END Stylesheets -->
    </head>
    <body>
         @yield('body')
        <!-- OneUI JS Core -->
        <script src="{{asset('js/oneui.core.min.js')}}"></script>

        <!-- OneUI JS Custom -->
        <script src="{{asset('js/oneui.app.min.js')}}"></script>

        <!-- Page JS Plugins + Page JS Code -->
        @yield('scripts')
    </body>
</html>
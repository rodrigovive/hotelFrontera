<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-grid.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/colors/main.css') }}" rel="stylesheet">

     <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet"/>

</head>
<body>
    @include('backend.includes.header')
    
    <div id="dashboard">
            @include('backend.includes.sidebar')
            <div class="dashboard-content">
                @yield('content')
                @include('backend.includes.footer')
            </div>
        </div>
    </div><!-- /.content-wrapper -->

    <!-- Scripts -->
    {{--  <script src="{{ asset('js/app.js') }}"></script>  --}}
    <script src="{{ asset('js/backend/jquery-2.2.0.min.js') }}"></script>
    <script src="{{ asset('js/backend/mmenu.min.js') }}"></script>
    <script src="{{ asset('js/backend/chosen.min.js') }}"></script>
    <script src="{{ asset('js/backend/slick.min.js') }}"></script>
    <script src="{{ asset('js/backend/rangeslider.min.js') }}"></script>
    <script src="{{ asset('js/backend/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/backend/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/backend/counterup.min.js') }}"></script>
    <script src="{{ asset('js/backend/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/backend/tooltips.min.js') }}"></script>
    <script src="{{ asset('js/backend/dropzone.js') }}"></script>
    <script src="{{ asset('js/backend/custom.js') }}"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>

    @yield('after-scripts')
</body>
</html>

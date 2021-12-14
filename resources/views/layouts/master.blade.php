<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin | RVC</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" href="{{ asset('admin/images/favicon.svg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('admin/fonts/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/fonts/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/fonts/material.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}" id="main-style-link">
</head>
<body>

    <div class="loader-bg">
        <div class="loader-tack">
            <div class="loader-fill"></div>
        </div>
    </div>

    @include('admin/inc/sidebar')

    @include('admin/inc/header')

    <div class="pc-container">
        <div class="pcoded-content">
            @yield('content')
        </div>
    </div>

    <script src="{{ asset('admin/js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/feather.min.js') }}"></script>
    <script src="{{ asset('admin/js/pcoded.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script src="{{ asset('admin/js/plugins/clipboard.min.js') }}"></script>
    <script src="{{ asset('admin/js/uikit.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/apexcharts.min.js') }}"></script>
    <script>
        $("body").append('<div class="fixed-button active"><a href="/" class="btn btn-md btn-success"><i class="material-icons-two-tone text-white">home</i> Back to home</a> </div>');
    </script>
    <script src="{{ asset('admin/js/pages/dashboard-sale.js') }}"></script>
</body>
</html>
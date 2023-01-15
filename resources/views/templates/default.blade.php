<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="robots" content="index,follow,all" />
    <meta name="author" content="hong_dev from viet nam" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    {{-- <meta name="google-site-verification" content="W60o5FIiNTC4qM0e14lVCrmQOH7MDm2jy50E3fvvTHs" /> //tạm thời để trống cái này dùng để tối ưu tìm kiếm
            //https://thietkephanmem.com/huong-dan-cach-lay-ma-google-site-verification-dua-vao-web-de-xac-minh-chu-quyen-so-huu-trang-web-cua-ban-doi-voi-google-search-console-tt8339.aspx --}}

    <meta name="copyright" content="" />
    <meta name="twitter:card" content="website" />
    <meta name="twitter:site" content="" />
    <meta property="og:site_name" content="" />
    <meta content="#000000" name="theme-color">
    @yield('meta_content')

    <meta name="twitter:creator" content="{{ env('APP_URL') }}" />
    <link rel="shortcut icon" href="{{ asset('asset/image/icon/favicon32.png') }}" type="image/png">
    <link href="{{ asset('asset/image/icon/favicon16.png') }}" rel="icon" sizes="16x16" type="image/png">
    <link href="{{ asset('asset/image/icon/favicon32.png') }}" rel="icon" sizes="32x32" type="image/png">
    <link href="{{ asset('asset/image/icon/favicon96.png') }}" rel="icon" sizes="96x96" type="image/png">
    <link href="{{ asset('asset/image/icon/favicon128.png') }}" rel="icon" sizes="128x128" type="image/png">

    <link href="{{ asset('asset/image/icon/favicon.ico') }}" type="image/x-icon" rel="shortcut icon" />

    <!--start bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
        integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <!-- end bootstrap -->

    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    <link rel="stylesheet" href="{{ asset('asset/css/client-2a6cb8e2.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/DisplayComponent-7ae9a9e2.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/montserrat.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/normalize.css') }}">
    @yield('h_extension')
</head>

<body>
    @include('templates.header')
    @yield('content')
    @include('templates.footer')
</body>
@yield('f_extension')

</html>

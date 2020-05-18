<!doctype html>
<html lang="en">
    <head>
        <meta http-equiv="content-language" content="vi" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
        <meta name="robots" content="noodp,index,follow"/>
        <meta name='revisit-after' content='1 days' /> 
        <title></title>
        <meta name="author" content="" />
        <meta name="copyright" content="" />
        <meta name="keywords" content="{{ isset($meta['meta_keywords']) ? $meta['meta_keywords'] : 'devpro' }}" />
        <meta name="description" content="{{ isset($meta['meta_description']) ? $meta['meta_description'] : 'DevPro đào tạo lập trình số 1 tại Hà Nội' }}" />
        <meta http-equiv="content-language" content="vi" />
        <meta property="og:title" content="{{ isset($meta['meta_title']) ? $meta['meta_title'] : 'DevPro đào tạo lập trình số 1 tại Hà Nội' }}" />
        <meta property="og:locale" content="vi_VN"/>
        <meta property="og:url" content="{{ url()->current() }}" />
        <meta property="og:site_name" content="devpro" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="{{ asset(isset($meta['image']) ? $meta['image'] : @$setting['logo']) }}" />
        <meta property="og:description" content="{{ isset($meta['meta_description']) ? $meta['meta_description'] : 'DevPro đào tạo lập trình số 1 tại Hà Nội' }}" />
        <meta name="googlebot" content="all, index, follow" />
        <meta name="geo.region" content="VN" />
        <meta name="geo.position" content="10.764338, 106.69208" />
        <meta name="geo.placename" content="Hà Nội" />
        <meta name="Area" content="HoChiMinh, Saigon, Hanoi, Danang, Vietnam" />
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
        <!-- Reset CSS -->
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    </head>
    <body>


        <!-- Start Header -->
        
        <!-- End Header --> 

        @yield('content')
        
        <!-- Start Footer -->
        
        <!-- End Footer --> 

        <!-- Scroll to top --> 
        <a href="#" class="scroll-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a> 

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

        
    </body>
</html>

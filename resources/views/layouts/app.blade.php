<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>{{config('app.name')}}</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&display=swap" rel="stylesheet"> 
        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        <!-- Libraries Stylesheet -->
        <link href="{{asset('front/lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('front/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
        <link href="{{asset('front/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('front/css/style.css')}}" rel="stylesheet">
    </head>

    <body>

        <x-alert key="success" />
        <x-alert key="error" />
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        @include('layouts.partials.nav')

        @yield('content')
       
        @include('layouts.partials.footer')
        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('front/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('front/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('front/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('front/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('front/lib/lightbox/js/lightbox.min.js')}}"></script>
    <script src="{{asset('front/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- Template Javascript -->
    <script src="{{asset('front/js/main.js')}}"></script>
    @stack('js')
    </body>

</html>
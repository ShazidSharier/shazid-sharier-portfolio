<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shazid Sharier Portfolio</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('/') }}website/assets/images/laravel.png">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css">
    <link href="{{ asset('/') }}website/assets//css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/') }}website/assets//css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}website/assets//css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}website/assets//css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}website/assets//css/smooth-scrollbar.css">
    <link rel="stylesheet" href="{{ asset('/') }}website/assets//css/lightbox.min.css">

    <link rel="stylesheet" href="{{ asset('/') }}website/assets//css/style.css">
    <link rel="stylesheet" href="{{ asset('/') }}website/assets//css/responsive.css">

</head>
<body class="home1-page">

<video class="body-overlay" muted autoplay loop>
    <source src="{{ asset('/') }}website/assets//images/video1.mp4" type="video/mp4">
</video>

<div class="page-loader">
    <div class="bounceball"></div>
</div>

<span class="icon-menu">
        <span class="bar"></span>
        <span class="bar"></span>
    </span>


@include('website.include.right-sidebar')

@include('website.include.left-sidebar')

@yield('body')


<script src="{{ asset('/') }}website/assets//js/jquery.js"></script>
<script src="{{ asset('/') }}website/assets//js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/') }}website/assets//js/owl.carousel.js"></script>
<script src="{{ asset('/') }}website/assets//js/gsap.min.js"></script>
<script src="{{ asset('/') }}website/assets//js/ScrollTrigger.min.js"></script>
<script src="{{ asset('/') }}website/assets//js/ScrollToPlugin.min.js"></script>
<script src="{{ asset('/') }}website/assets//js/lightbox.min.js"></script>

<script src="{{ asset('/') }}website/assets//js/main.js"></script>
<script src="{{ asset('/') }}website/assets//js/ajax-form.js"></script>
<script src="{{ asset('/') }}website/assets//js/color.js"></script>
</body>
</html>

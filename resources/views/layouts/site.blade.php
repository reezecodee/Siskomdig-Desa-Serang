<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="{{ $application->keyword }}" name="keywords">
    <meta content="{{ $application->deskripsi }} - {{ $application->nama_aplikasi }}" name="description">

    <link rel="shortcut icon" href="/{{ $application->favicon ?? '' }}" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka:wght@600;700&family=Montserrat:wght@200;400;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/site-assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/site-assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="/site-assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/site-assets/css/bootstrap.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/site-assets/css/style.css" rel="stylesheet">



</head>

<body>
    <x-site.navbar />
    <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    @yield('content')

    <x-site.footer />


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i
            class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/site-assets/lib/wow/wow.min.js"></script>
    <script src="/site-assets/lib/easing/easing.min.js"></script>
    <script src="/site-assets/lib/waypoints/waypoints.min.js"></script>
    <script src="/site-assets/lib/lightbox/js/lightbox.min.js"></script>
    <script src="/site-assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="/site-assets/js/main.js"></script>
</body>

</html>

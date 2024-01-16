<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Foody - @yield('headtitle') </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    @include('includes.page_style')
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    @include('includes.page_nav')


     <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">@yield('breadcrumbhead')</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-body" href="#">Pages</a></li>
                    @yield('breadcrumblabel')
                    <!-- <li class="breadcrumb-item text-dark active" aria-current="page">About Us</li> -->
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    @yield('contant')


    @include('includes.page_footer')

    @include('includes.page_script')
</body>

</html>
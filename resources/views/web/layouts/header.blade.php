<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title> @yield('title', 'R. Copywriting & Co.') </title>

    <!-- CSS FILES -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link href="{{asset('web-template/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('web-template/css/bootstrap-icons.css')}}" rel="stylesheet">

    <link href="{{asset('web-template/css/owl.carousel.min.css')}}" rel="stylesheet">

    <link href="{{asset('web-template/css/owl.theme.default.min.css')}}" rel="stylesheet">

    <link href="{{asset('web-template/css/templatemo-medic-care.css')}}" rel="stylesheet">

</head>

<body id="top">

<main>

    <nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
        <div class="container">
            <a class="navbar-brand mx-auto d-lg-none" href="{{route('home')}}">
                Medic Care
                <strong class="d-block">Health Specialist</strong>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('service')}}">Service</a>
                    </li>

                    <!-- Logo Kısmı -->
                    <a class="navbar-brand d-none d-lg-block" href="{{asset('home')}}">
                        <img src="{{ asset('web-template/images/logo.jpg') }}" alt="Medic Care Logo" class="logo-img">
                    </a>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('booking')}}">Booking</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('blogs')}}">Blogs</a>
                    </li>
                </ul>
            </div>


        </div>
    </nav>

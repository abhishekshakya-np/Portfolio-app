<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
          integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">
</head>

    <div class="main-content">

        <div class="controls">
            <div class="control active-btn" data-id="home">
                <a href="{{ route('home') }}">
                    <i class="fas fa-home"></i></a>
            </div>
            <div class="control " data-id="about">
                <a href="{{ route('about') }}">
                <i class="fas fa-user"></i>
                </a>
            </div>
            <div class="control" data-id="portfolio">
                <a href="{{ route('portfolio') }}">
                <i class="fas fa-briefcase"></i></a>
            </div>
            <div class="control" data-id="blogs">
                <a href="{{ route('blogs') }}">
                    <i class="far fa-newspaper"></i>
                </a>
            </div>
            <div class="control" data-id="contact">
                <a href="{{ route('contact') }}">
                    <i class="fas fa-envelope-open"></i>
                </a>
            </div>
        </div>




    <div class="content">
    @yield('content')
</div>


</div>
</html>

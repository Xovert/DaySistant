<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @yield('style')
</head>

<body>
    <nav class="navbar-head">
        <div class="navbar-container">
            <a class="navbar-brand" href="#">
                <img src="{{asset('assets/dayumsistant2 1.png')}}" alt="logo" width="30" height="24"
                    class="d-inline-block align-text-top">
            </a>
            <div class="menu-container" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Help</a>
                    </li>
                </ul>
            </div>
            <div class="button-container">
                <button class="btn btn-outline-light" type="submit">Login</button>
                <button class="btn btn-outline-light" type="submit">Get Assistant</button>
            </div>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer>
        <div class="footer-left">
            <p>SOCIAL MEDIA</p>
            <div class="footer-icon">
                <a href="https://www.facebook.com/" target="_blank"><img src="{{asset('assets/facebook-icon.svg')}}"
                        alt="facebook"></a>
                <a href="https://www.instagram.com/" target="_blank"><img src="{{asset('assets/instagram-icon.svg')}}"
                        alt="instagram"></a>
                <a href="https://www.twitter.com/" target="_blank"><img src="{{asset('assets/twitter-icon.svg')}}"
                        alt="twitter"></a>
            </div>
        </div>
        <div class="footer-right">
            <p>Email : daysistant@gmail.com</p>
            <p>Telp  : 021-xxxxxxx</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>

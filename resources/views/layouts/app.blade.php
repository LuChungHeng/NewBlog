<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
    <title>Posty</title>
</head>
<body style="background-color: #EFEBE9">
<nav class="navbar navbar-expand-lg navbar-light bg-light border border-2 shadow p-3 mb-5 bg-body rounded fw-bold">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Post</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @auth
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Morgan CH-97</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Logout</a>
                    </li>
                @endauth

                @guest
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('login')}}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('register')}}">Register</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
    @yield('content')
</body>
</html>

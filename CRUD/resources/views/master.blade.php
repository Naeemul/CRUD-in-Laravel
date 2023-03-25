<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="">
    <title>@yield('title')</title>
    <link href="{{ asset('/') }}frontend/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Health-Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('addBlog') }}">Add-Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('manageBlog') }}">Manage-Blog</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
@yield('content')
<script src="{{ asset('/') }}frontend/js/bootstrap.bundle.js" ></script>
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full-Screen Navbar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7e8116745f.js" crossorigin="anonymous"></script>
    <style>
        body {
            height: 200vh; /* Create enough scrollable content */
            margin: 0;
        }

        .navbar {
            transition: transform 0.3s ease; /* Smooth transition */
        }

        .navbar-fullscreen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.95); /* Slightly transparent background */
            z-index: 999; /* Ensure it overlays other content */
            transform: translateY(0); /* Reset transform */
        }

        .navbar.hidden {
            transform: translateY(-100%); /* Hide navbar */
        }

        .dropdown {
            position: relative; /* Ensure dropdown is positioned correctly */
        }

        .dropdown-menu {
            height: 100%; /* Make dropdown take full height */
            top: 0; /* Align the dropdown to the top */
            margin: 0; /* Remove margin */
        }
    </style>
</head>
<body>

<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu dropdown-menu-end text-right h-100" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<div class="container-fluid full-height d-flex justify-content-center align-items-center mt-2">
    <div class="text-center mt-4">
        <h1 class="mt-4">Centered Div</h1>
        <h1 class="mt-4">Centered Div</h1>
        <h1 class="mt-4">Centered Div</h1>
        <h1 class="mt-4">Centered Div</h1>
        <h1 class="mt-4">Centered Div</h1>
        <h1 class="mt-4">Centered Div</h1>
        <h1 class="mt-4">Centered Div</h1>
        <h1 class="mt-4">Centered Div</h1>
        <h1 class="mt-4">Centered Div</h1>
        <h1 class="mt-4">Centered Div</h1>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<script>
    const navbarToggle = document.querySelector('.navbar-toggler');
    const navbar = document.querySelector('.navbar');

    navbarToggle.addEventListener('click', function() {
        navbar.classList.toggle('navbar-fullscreen'); // Toggle full-screen class
    });
</script>
</body>
</html>

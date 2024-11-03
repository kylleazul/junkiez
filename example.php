


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sticky Scroll Navbar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
    <!-- fontawesome cdn-->
<script src="https://kit.fontawesome.com/7e8116745f.js" crossorigin="anonymous"></script>
<!-- -->
</head>
<style>
        body {
            height: 200vh; /* Create enough scrollable content */
            margin: 0;
        }

        .navbar.hidden {
           display: none; /* Hide the navbar */
        }
</style>
<body>
<!-- Navbar --><header class="mb-10 w-100">
<nav  class="navbar navbar-expand-lg navbar-light fixed-top hidden top-0 w-100  opacity-25 m-0 p-0">
  <!-- Container wrapper -->
  <div class="container-fluid p-0 m-0 top-0 left-0 right-0" style="height: 80px;">
   

  
    <div style="height: 500px;" class=" bg-light opacity-50 w-100 h-100" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item ">
          <a class="nav-link text-dark fs-1 fw-bold" href="#!"><h2>JunkieZ</h2></a>
        </li>
       
      </ul>

    
    </div>
    <!-- Collapsible wrapper -->

  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
</header>

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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <script>
        let lastScrollTop = 0;
        const navbar = document.querySelector('.navbar');

        window.addEventListener('scroll', function() {
            const st = window.pageYOffset || document.documentElement.scrollTop;
            if (st > lastScrollTop && st > 30) {
                // Downscroll and past 60px
                navbar.classList.remove('hidden');
            } else if (st < lastScrollTop) {
                // Upscroll
                navbar.classList.add('hidden');
            }
            lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
        });
    </script>
</body>
</html>



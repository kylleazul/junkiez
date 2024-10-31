
    
   
  
  <?php

    wp_head();

?>


<nav class="navbar navbar-light ">
    <a class="navbar-brand hidden" href="#">JunkieZ</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon align-items-end justify-content-end" onclick="openNav()"></span>
    </button>

    <div id="mySidenav" class="sidenav ">
   
    <a class="title" href="#">JunkieZ</a>
  
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="p-4 m-4">
  <a href="/wp-content/themes/junkiez/intro.php"><h1 class="fs-1">Introduction</h1></a>
  <a href="#"><h1>Mision Vision Advocacy</h1></a>
  <a href="#"><h1>Infographics</h1></a>
  <a href="#"><h1>Articles</h1></a>
  <a href="#"><h1>Articles</h1></a>
 

  <div class="footer d-flex justify-content-between align-items-start p-4 m-4">
    <div class="align-items-start">
    <i class="fa-brands fa-facebook fa-2xl m-2" style="color: #000000;"></i>
  <i class="fa-brands fa-instagram fa-2xl m-2" style="color: #000000;"></i>
  <i class="fa-regular fa-envelope fa-2xl m-2" style="color: #000000;"></i>
    </div>
    <div class="align-contents-end">
          <p class="text-dark">
          JunkieZ <i class="fa-regular fa-copyright" style="color: #000000;"></i> 2024. All Rights Reserved
          </p>  
          <a href="#">Terms and Condition</a>
    </div>
 
  </div>
  </div>
  </div>
</div>
</nav>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        let lastScrollTop = 0;
        const navbar = document.querySelector('.navbar-brand');
        const navbar1 = document.querySelector('.navbar');
        window.addEventListener('scroll', function() {
            const st = window.pageYOffset || document.documentElement.scrollTop;
            if (st > lastScrollTop && st > 30) {
                // Downscroll and past 30px
                navbar.classList.remove('hidden'); // Hide navbar

                navbar1.style.backgroundColor = 'rgba(255, 255, 255, 0.8)';
            } 
           else if ( st === 0) {
          
            navbar.classList.add('hidden'); 
           navbar1.style.backgroundColor = '#f2f2f2';
           }
        });
    </script>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "100vw";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";


  
}




</script>


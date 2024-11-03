
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
    navbar1.style.backgroundColor = 'rgba(255, 255, 255, 0)';
   }
});

function openNav() {
	document.getElementById("mySidenav").style.width = "100vw";
	document.getElementById("main").style.marginLeft = "250px";
  }
  
  function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
	document.getElementById("main").style.marginLeft= "0";
  
  
	
  }
  
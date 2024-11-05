<?php

     /*

        Template Name: Advocacy Template

*/


        get_header();
?>
<style>
    
</style>
    <div class="intro-home">
    <div id="introduction" class="intro">
  

   
    <div class="row z-n1 m-0 p-0">
    <div class="col-12 col-md-4 m-0 p-0"> <!-- 30% width on larger screens, full width on small screens -->
        <div class=" text-dark p-5 text-content h-100 d-flex justify-content-center align-items-center">
          <div class="d-block">
        <p class="text-light h2 pt-4 m-4">Mission</p>
        <p class="text-light h2 pt-4 m-4">Vision</p>
        <p class="text-light h2 pt-4 m-4">Advocacy</p>
        </div>
        </div>
    </div>
    <div class="col-12 col-md-8 m-0 p-0 "> <!-- 70% width on larger screens, full width on small screens -->
        <div class="text-white">
            <img class="intro-image " src="<?php echo get_template_directory_uri(); ?>/assets/images/DSC09663.jpg;" alt="">
        </div>
    </div>
</div>
       <div class="info-content m-2 m-md-4 p-2 p-md-4 h5 md-h4 ">    

       <div class="row z-n1 m-0 p-0 w-100 d-flex justify-content-center align-items-center">
    <div class="col-12 col-md-6 m-0 p-0 "> <!-- 70% width on larger screens, full width on small screens -->

            <div class="row z-n1 m-md-2 p-md-4 m-0 p-0 " style="min-height: 25vh;">
                <div class="col-12 col-md-6 m-0 p-0">
                   <div class="d-flex justify-content-center align-items-center h-100 w-100">
                            <h1 class="font-weight-bolder d-flex justify-content-center align-items-center">
                                Mission
                            </h1>
                            
                   </div>
                </div>
                <div class="col-12 col-md-6 m-0 p-0 d-md-block">
                <div class="d-flex justify-content-center align-items-center h-100 w-100">
                <p class="font-weight-md-bolder ">
                Greener Manila aims to help locate the Filipino youth to recycling shops that they can access within the vicinity of their household and guide them to distinguish and dispose of common waste materials. 
                </p>
                </div>
                </div>
            </div>

            <div class="row z-n1 m-md-2 p-md-4 m-0 p-0 " style="min-height: 25vh;">
                <div class="col-12 col-md-6 m-0 p-0">
                   <div class="d-flex justify-content-center align-items-center h-100 w-100">
                            <h1 class="font-weight-bolder d-flex justify-content-center align-items-center">
                                Vision
                            </h1>
                            
                   </div>
                </div>
                <div class="col-12 col-md-6 m-0 p-0 d-md-block">
                <p class="font-weight-md-bolder">
                <div class="d-flex justify-content-center align-items-center h-100 w-100">
                The Vision of Greener Manila is for all Filipino youth to learn and try to implement proper recycling and waste disposal practices within their households so that future generations of Filipinos are well-versed in proper environment etiquette.
                </p>
                </div>
                </div>
            </div>
            
          
            <div class="row z-n1 m-md-2 p-md-4 m-0 p-0 " style="min-height: 25vh;">
                <div class="col-12 col-md-6 m-0 p-0">
                   <div class="d-flex justify-content-center align-items-center h-100 w-100">
                            <h1 class="font-weight-bolder d-flex justify-content-center align-items-center">
                                Advocacy
                            </h1>
                            
                   </div>
                </div>
                <div class="col-12 col-md-6 m-0 p-0 d-md-block">
                <p class="font-weight-md-bolder">
                <div class="d-flex justify-content-center align-items-center h-100 w-100">
                Pollution and Global warming is a societal threat for the world which the Philippines has felt its effect more than ever before. As a collective society, the consumption and production of more products has increased the material waste in which it has progressively grown in addition to the previous generation that came before. 
                </p>
                </div>
                </div>
            </div>
        
        
           
    </div>
</div>
         
       </div>

    </div>


<div id="url" class="url" >

<div class="blurred-background" style="   background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/DSC09663.jpg;');"></div>
    <div class="h-100 d-flex justify-content-center align-items-center content-map" style="min-height: 300px;"> <!-- Added min-height for vertical centering -->
        <div class=" p-4 d-block  w-md-25 find-junk">
        <p class="text-center h5 md-h3 text-light font-weight-bolder"> <!-- Added text-center for horizontal alignment -->
        FIND A JUNK SHOP NEAR YOU
        
      
        </p>
        <div class="d-flex justify-content-center align-items-center">
      
        
        <button class="button-57" role="button"><span class="text">Start your Journey</span><span>Find Junkshop</span></button>
        </div>
        </div>
    </div>
</div>


   


</div>
      <script>
       const brand = document.querySelector('.navbar-brand');
        window.onload = 	brand.classList.add('not-hidden');
      </script>
<?php

    get_footer();

?>
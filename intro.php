<?php

     /*

Template Name: Intro Template

*/


        get_header();
?>
<style>
    
</style>
    <div class="intro-home">
    <div id="introduction" class="intro">
  

   
    <div class="row z-n1 m-0 p-0">
    <div class="col-12 col-md-4 m-0 p-0"> <!-- 30% width on larger screens, full width on small screens -->
        <div class=" text-dark p-5 text-content h-100">
            <h2>This is a title</h2>
        <p> Lorem ipsum dolor sit amet. Vel animi rerum qui galisum recusandae rem omnis magni sed dolore dolor!</p>
        </div>
    </div>
    <div class="col-12 col-md-8 m-0 p-0"> <!-- 70% width on larger screens, full width on small screens -->
        <div class="text-white">
            <img class="intro-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/DSC09663.jpg;" alt="">
        </div>
    </div>
</div>
       <div class="info-content m-2 m-md-4 p-2 p-md-4 h5 md-h4 ">    
            <p class="text-dark">
            Lorem ipsum dolor sit amet. Vel animi rerum qui galisum recusandae rem omnis magni sed dolore dolor! Hic nesciunt ducimus qui iste eaque vel voluptatum alias hic nostrum adipisci qui iusto maiores!
            Lorem ipsum dolor sit amet. Vel animi rerum qui galisum recusandae rem omnis magni sed dolore dolor! Hic nesciunt ducimus qui iste eaque vel voluptatum alias hic nostrum adipisci qui iusto maiores!
            
            </p>
       </div>

    </div>

<div id="video" class="video" >
    <div class="h-100 d-flex justify-content-center align-items-center" > 

            <div class=" w-md-25 p-2 m-2">
                <!-- Button trigger modal -->
                 <p class="text-success font-weight-bolder d-flex justify-content-center align-items-center" >Lorem ipsum dolor sit amet. Vel animi rerum qui galisum recusandae rem omnis magni sed dolore dolor! Hic nesciunt ducimus qui iste eaque vel voluptatum alias hic nostrum adipisci qui iusto maiores!</p>
<div class="d-flex justify-content-center align-items-center">
                 <button type="button" class="btn btn-outline-success text-sucess  " data-toggle="modal" data-target="#staticBackdrop">
    Click here to learn more.
</button>
</div>

</div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Law</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Lorem ipsum dolor sit amet. Vel animi rerum qui galisum recusandae rem omnis magni sed dolore dolor! Hic nesciunt ducimus qui iste eaque vel voluptatum alias hic nostrum adipisci qui iusto maiores!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
               
                
        
       
    </div>
</div>

<div id="url" class="url" style=" background-size:cover; background-repeat:no-repeat; background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/DSC09663.jpg;">
    <div class="h-100 d-flex justify-content-center align-items-center" style="min-height: 300px;"> <!-- Added min-height for vertical centering -->
        <div class="m-4 p-4 d-block  w-md-25">
        <p class="text-center h5 md-h3 text-success font-weight-bolder"> <!-- Added text-center for horizontal alignment -->
        Lorem ipsum dolor sit amet. Vel animi rerum qui galisum recusandae rem omnis magni sed dolore dolor!
        
      
        </p>
        <div class="d-flex justify-content-center align-items-center">
      
        
        <button type="button" class="btn btn-outline-success text-sucess font-weight-bolder">Success</button>
        </div>
        </div>
    </div>
</div>


</div>

   
<?php

    get_footer();

?>
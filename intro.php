<?php

     /*

Template Name: Intro Template

*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
    <?php
    wp_head();
    ?>
</head>
<body>
    <center><h1>JunkieZ</h1></center>
    <div id="introduction" class="intro">

        <div class="h-100 d-flex justify-content-center align-items-center" > <!-- Added min-height for vertical centering -->
        <div class="m-4 p-4">
            <p class="text-center h3"> <!-- Added text-center for horizontal alignment -->
                Lorem ipsum dolor sit amet. Vel animi rerum qui galisum recusandae rem omnis magni sed dolore dolor! Hic nesciunt ducimus qui iste eaque vel voluptatum alias hic nostrum adipisci qui iusto maiores! Ut deserunt enim non nobis impedit qui adipisci dolor ab repudiandae quidem eos neque reiciendis ut quasi quod est consequatur rerum. Ea rerum modi quo error deleniti id exercitationem quis. Et harum maxime aut similique Quis sed internos sunt aut internos recusandae sed quos aperiam. Et nisi ducimus eum vitae obcaecati et eveniet galisum et ratione quia qui laboriosam dolore ut velit sequi. Qui incidunt porro nam voluptatibus aliquid ab dignissimos voluptatem aut dolore nisi aut animi harum id officia omnis?
            </p>
            </div>
      
    </div>
</div>

<div id="video" class="video">
    <div class="h-100 d-flex justify-content-center align-items-center" style="min-height: 300px;"> <!-- Added min-height for vertical centering -->
        <div class="m-4 p-4">
            <!--
            <iframe width="1120" height="630" src="https://www.youtube.com/embed/yj1VNtODFG4?si=mNZtTlnX3KFogXk5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                  <img src="<?php// echo get_template_directory_uri(); ?>/assets/images/images.jpg"/>
            -->
        </div>
    </div>
</div>

<div id="url" class="url" style=" background-size:cover; background-repeat:no-repeat; background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/images.jpg;">
    <div class="h-100 d-flex justify-content-center align-items-center" style="min-height: 300px;"> <!-- Added min-height for vertical centering -->
        <div class="m-4 p-4 d-block">
        <p class="text-center "> <!-- Added text-center for horizontal alignment -->
        Lorem ipsum dolor sit amet. Vel animi rerum qui galisum recusandae rem omnis magni sed dolore dolor!
        
      
        </p>
        <div class="d-flex justify-content-center align-items-center">
      

        <button type="button" class="btn btn-success">Success</button>
        </div>
        </div>
    </div>
</div>


   
<?php

    wp_foot();

?>

</body>
</html>
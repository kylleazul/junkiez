<?php

     /*

Template Name: Video Page Template

*/


        get_header();
?>

<div class="iconContainer">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/junkiez.png" alt="" class="imgLogo">
</div>

<div class="videoLink">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/yj1VNtODFG4?si=W9xkli9pbe19Qylf" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>

<?php

        get_footer();

?>
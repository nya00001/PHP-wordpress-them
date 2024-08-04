<?php
// Include the header template from 'header.php' at the beginning of a WordPress theme page
get_header(); 
?>

<?php
// Include a template part for the hero section. This part usually contains a large image, headline, or slider.
// Located at 'template-parts/part-hero.php'
get_template_part('template-part/part', 'hero'); 
?>

<?php
// Include a template part for the main content section on the front page.
// Typically includes primary content areas or widgets customized for the front page.
// Located at 'template-parts/front-content.php'
get_template_part('template-part/front', 'content'); 
?>

<?php
// Include a template part for displaying a Vimeo video.
// This could be a dedicated section for featuring video content on the page.
// Located at 'template-parts/vimeo-video.php'
get_template_part('template-part/vimeo', 'video'); 
?>

<?php
// Include the footer template from 'footer.php' at the end of the WordPress theme page.
// This usually contains the site's footer, script tags, and wp_footer hook.
get_footer(); 
?>

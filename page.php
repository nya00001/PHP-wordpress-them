<?php
// Include the header part of the theme
get_header(); 
?>

<?php
// Display the main content of the current post or page
the_content(); 
?>

<?php
// Include a specific template part, useful for reusing content across the theme
// Here it specifically calls a Google map template part located at 'template-parts/google-map.php'
get_template_part('template-part/google', 'map');
?>

<?php
// Include the footer part of the theme
get_footer(); 
?>

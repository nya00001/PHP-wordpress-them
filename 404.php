<?php
// Include the header part of the theme
get_header(); 
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 text-center">
            <!-- Display a large '404' indicating a missing page error -->
            <h1 class="display-1">404</h1>
            <!-- Informative text explaining that the page cannot be found -->
            <p class="lead">Oops! We can't seem to find the page you're looking for.</p>
            <div class="mt-4">
                <!-- Provides a link to the homepage for users to easily navigate back -->
                <a href="<?php echo home_url(); ?>" class="btn btn-light">Return to Homepage</a>
                <!-- Additional prompt to use the search form if the user wants to try finding their desired content -->
                <p class="mt-4">Or try using the search form below.</p>
                <!-- Include the search form for easy access to searching the site -->
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
</div>

<?php
// Include a template part that might show a Google map - unusual but might be useful for showing company location even on error pages
get_template_part('template-part/google', 'map'); 
?>

<?php
// Include the footer part of the theme
get_footer(); 
?>

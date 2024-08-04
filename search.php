<?php 
// Includes the header part of your theme from the file header.php
get_header(); 
?>

<main class="container py-4">
    <!-- Display the title of the page with the search query highlighted. It also applies a light text color for visibility. -->
    <h1 class="text-light">
        <?php 
        // Print formatted string. 'Search Results for: %s' is the format, replaced by the user's search query.
        printf( __( 'Search Results for: %s', 'textdomain' ), '<span>' . get_search_query() . '</span>' ); 
        ?>
    </h1>

    <?php 
    // Check if there are any posts that match the search query
    if ( have_posts() ) : ?>
        <div class="search-results">
            <?php 
            // Loop through the posts
            while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php 
                // Adds classes to the post
                post_class('text-light'); ?>>
                    <header class="entry-header">
                        <!-- Link to the post and title of the post with light text color -->
                        <h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark" class="text-light"><?php the_title(); ?></a></h2>
                    </header>
                    <div class="entry-summary">
                        <!-- Displays the excerpt of the post -->
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
        <!-- Navigation for next/previous set of posts (if applicable) -->
        <?php the_posts_navigation(); ?>
    <?php else : ?>
        <!-- Displays a message if no posts match the search query -->
        <p class="text-light"><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'textdomain' ); ?></p>
        <!-- Displays the search form again for the user to make another search -->
        <?php get_search_form(); ?>
    <?php endif; ?>
</main>

<?php 
// Includes the footer part of your theme from the file footer.php
get_footer(); 
?>

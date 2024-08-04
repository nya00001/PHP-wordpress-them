<footer>
    <!-- wp_footer(): This function is crucial for WordPress themes. It should be called right before the closing </body> tag.
         It triggers the wp_footer hook, allowing WordPress and plugins to inject scripts and additional content into the footer. -->
    <?php wp_footer(); ?>

    <!-- get_template_part(): Include a reusable part of the theme, specifically a widget area defined for the footer.
         This is typically used for including additional content like contact information, social links, or about sections. -->
    <?php get_template_part('template-part/widget','footer'); ?>

    <div class="footer-links">
        <!-- Check if there's a navigation menu assigned to 'footer_menu' location -->
        <?php if (has_nav_menu('footer_menu')): ?>
            <nav class="footer-nav">
                <!-- wp_nav_menu(): Display a navigation menu assigned to the 'footer_menu' location.
                     The menu is displayed as a flex container, centered both in the navigation container and the menu items themselves. -->
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer_menu',
                        'menu_class'     => 'nav justify-content-center',
                        'container'      => 'div',
                        'container_class'=> 'd-flex justify-content-center',
                        'depth'          => 1,
                        'fallback_cb'    => false, // No fallback function if the menu is not set
                    ));
                ?>
            </nav>
        <?php endif; ?>
    </div>

    <!-- Footer copyright text centered on the page -->
    <p class="text-center">All rights reserved 2024</p>
</footer>

<!-- It is important to note that wp_footer() should typically be called only once, and just before the closing </body> tag.
     Having an additional wp_footer() call at the end of the document might be a mistake or redundancy. -->
<?php wp_footer();?>

</body>
</html>

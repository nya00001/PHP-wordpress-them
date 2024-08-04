<!-- Static HTML block for a promotional offer -->
<div class="header-buy-ticket text-center my-3">
    <!-- Promotional text indicating a limited-time offer -->
    <p>For a limited time only!</p>
    <!-- Call-to-action button offering a significant discount -->
    <a href="#" class="btn btn-light btn-lg">Get 50% off!</a>
</div>

<!-- Conditional PHP statement to check if there are any active widgets in the 'footer-widgets' area -->
<?php if (is_active_sidebar('footer-widgets')) : ?>
    <!-- Div container for footer widgets -->
    <div class="footer-widgets">
        <!-- Dynamic sidebar function that loads widgets assigned to 'footer-widgets' area -->
        <?php dynamic_sidebar('footer-widgets'); ?>
    </div>
<?php endif; ?>

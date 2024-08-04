<!-- Static HTML block for buying tickets -->
<div class="header-buy-ticket text-center my-3">
    <!-- Text prompt for purchasing tickets -->
    <p>Click here to buy a ticket</p>
    <!-- Button that presumably would be linked to a ticket purchase page or modal -->
    <a href="#" class="btn btn-light btn-lg">Buy Ticket</a>
</div>

<!-- Conditional PHP statement to check if there are any active widgets in the 'header-widgets' area -->
<?php if (is_active_sidebar('header-widgets')) : ?>
    <!-- Div container for header widgets -->
    <div class="header-widgets">
        <!-- Dynamic sidebar function that loads widgets assigned to 'header-widgets' area -->
        <?php dynamic_sidebar('header-widgets'); ?>
    </div>
<?php endif; ?>

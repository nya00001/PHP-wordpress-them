<main class="container py-4">
    <?php
    // Array to store testimonials with each testimonial as an associative array including 'quote' and 'author'
    $testimonials = [
        [
            'quote' => "Our family visits the Arcade Theme Park every summer, and it's always the highlight of our year. There's something magical for every age. Can't wait to return!",
            'author' => "Alex Johnson, Happy Visitor",
        ],
        [
            'quote' => "As a gaming enthusiast, I was blown away by the variety of games available. From classic arcades to the latest VR experiences, it's a gamer's paradise!",
            'author' => "Jamie Lee, Gamer",
        ],
        [
            'quote' => "The attention to detail and the friendly staff made our visit unforgettable. Highly recommend for a day full of fun and nostalgia.",
            'author' => "Samira Patel, First-Time Visitor",
        ],
    ];
    ?>

    <!-- Section for displaying testimonials on the website -->
    <section class="text-center">
        <h1>Testimonials</h1> <!-- Heading for the testimonials section -->
        <div class="container">
            <div class="row justify-content-center">
                <?php foreach ($testimonials as $testimonial): ?> <!-- Loop through each testimonial in the array -->
                    <div class="col-md-6 col-lg-4 my-3">
                        <div class="testimonial p-4">
                            <p class="testimonial-text">"<?php echo $testimonial['quote']; ?>"</p> <!-- Display the quote -->
                            <p class="testimonial-author">- <?php echo $testimonial['author']; ?></p> <!-- Display the author of the quote -->
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Section to invite users to explore more games at the theme park -->
    <section class="text-center">
        <h1>Explore Our Games</h1> <!-- Heading for the game exploration section -->
        <p>Step into a world of endless fun and excitement with our diverse collection of games! From timeless arcade classics to the latest in gaming technology, there's something for every gamer at Arcade Theme Park.</p>
    </section>

    <section class="text-center">
        <h2>Arcade games</h2>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-4 d-flex align-items-stretch m-3">
                <div class="card d-flex flex-column mx-auto">
                    <img src="<?php echo get_theme_file_uri('assets/classic.jpg');?>" class="card-img-top" alt="Classic Games">
                    <div class="card-body d-flex flex-column flex-grow-1">
                        <h3 class="card-title">Classic Games</h3>
                        <p class="card-text">Dive into the nostalgia with Classic Pac-Man. Navigate through mazes, dodge ghosts, and eat pellets in this timeless arcade masterpiece.</p>
                        <a href="#" class="btn mt-auto">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 d-flex align-items-stretch m-3">
                <div class="card d-flex flex-column mx-auto">
                    <img src="<?php echo get_theme_file_uri('assets/modern.jpg');?>" class="card-img-top" alt="Modern Games">
                    <div class="card-body d-flex flex-column flex-grow-1">
                        <h3 class="card-title">Modern Games</h3>
                        <p class="card-text">Get behind the wheel in Virtual Racer X, a high-octane racing experience. Feel the adrenaline as you speed through stunning landscapes and compete to be the best.</p>
                        <a href="#" class="btn mt-auto">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 d-flex align-items-stretch m-3">
                <div class="card d-flex flex-column mx-auto">
                    <img src="<?php echo get_theme_file_uri('assets/kids-game.jpg');?>" class="card-img-top" alt="Kids Games">
                    <div class="card-body d-flex flex-column flex-grow-1">
                        <h3 class="card-title">Kids Games</h3>
                        <p class="card-text">This vibrant, kid-friendly game invites players on an enchanting adventure filled with puzzles, friendly animals, and magical mysteries. Designed for young explorers, it's the perfect mix of fun, learning, and adventure.</p>
                        <a href="#" class="btn mt-auto">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 d-flex align-items-stretch m-3">
                <div class="card d-flex flex-column mx-auto">
                    <img src="<?php echo get_theme_file_uri('assets/classic.jpg');?>" class="card-img-top" alt="Classic Games">
                    <div class="card-body d-flex flex-column flex-grow-1">
                        <h3 class="card-title">Strategy Games</h3>
                        <p class="card-text">Engage in epic battles and tactical warfare with Empire Conquerors. Build your empire, manage resources, and lead your army to victory in this immersive strategy game. Perfect for thinkers and planners.</p>
                        <a href="#" class="btn mt-auto">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 d-flex align-items-stretch m-3">
                <div class="card d-flex flex-column mx-auto">
                    <img src="<?php echo get_theme_file_uri('assets/modern.jpg');?>" class="card-img-top" alt="Modern Games">
                    <div class="card-body d-flex flex-column flex-grow-1">
                        <h3 class="card-title">Adventure Games</h3>
                        <p class="card-text">Step into the shoes of an intrepid explorer in Lost Horizons. Discover ancient ruins, solve mysteries, and uncover treasures in vast, uncharted lands. A thrilling adventure awaits!</p>
                        <a href="#" class="btn mt-auto">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 d-flex align-items-stretch m-3">
                <div class="card d-flex flex-column mx-auto">
                    <img src="<?php echo get_theme_file_uri('assets/kids-game.jpg');?>" class="card-img-top" alt="Kids Games">
                    <div class="card-body d-flex flex-column flex-grow-1">
                        <h3 class="card-title">Puzzle Games</h3>
                        <p class="card-text">Challenge your mind with Brain Benders, a collection of the most engaging and thought-provoking puzzles. Sharpen your wits with a variety of puzzles designed to test your problem-solving skills.</p>
                        <a href="#" class="btn mt-auto">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

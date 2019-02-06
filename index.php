<?php
    get_header();
?>
    <main>

        <section class="grid-container">
            <h1>
                We are here to encourage &amp; challenge people
            </h1>
            <h3>
                To live their best, most consistent, most sustainable life yet
            </h3>
            <a href="#">
                Get Started
            </a>
        </section>

        <section class="grid-container ">
            <!-- approx 1074x816 pixels grid -->
            <div>
                <p>
                    Welcome to Anew Accountibility and Lifestyle Coaching! Are you ready to start over? Get in shape? Eat better? Achieve the goals you’ve been waiting years to achieve? Change careers? Then you are at the right place. 
                </p>
            </div>
            <div>
                <h4>
                    FAQ
                </h4>
                <h5>
                    How Do I Get Started?
                </h5>
                <p>
                    <a href="#">Fill out the form</a> and we will be in touch through the email address you provided.
                </p>
            </div>
            <div>
                <h5>
                    How Much Does It Cost?
                </h5>
                <p>
                    We have multiple plans available for your needs and budget. <a href="#">See Plans</a>
                </p>
            </div>
        </section>

        <section id="testimonials">
            <div class="grid-container">
                <h2>
                    What People Are Saying
                </h2>
                <div class="orbit" role="region" aria-label="Testimonials" data-orbit>
                    <ul class="orbit-container" style="height: 150px;">
                        <li class="orbit-slide is-active">
                            <div>
                                <blockquote>
                                    I didn’t really know what to expect when I signed up with an accountability coach, but I knew that I was lacking some serious motivationwhen it came to my personal goals. Anne-Marie took the time to understand how I tick, what motivates me, and where I was seeing successes in my life specifically at work.
                                </blockquote>
                            </div>
                        </li>
                        <li class="orbit-slide">
                            <div>
                                <blockquote>
                                    I didn’t really know what to expect when I signed up with an accountability coach, but I knew that I was lacking some serious motivationwhen it came to my personal goals. Anne-Marie took the time to understand how I tick, what motivates me, and where I was seeing successes in my life specifically at work.
                                </blockquote>
                            </div>
                        </li>
                        <!-- More slides... -->
                    </ul>
                    <nav class="orbit-bullets">
                        <button class="is-active" data-slide="0">
                            <span class="show-for-sr">First slide details.</span>
                            <span class="show-for-sr">Current Slide</span>
                        </button>
                        <button class data-slide="1">
                            <span class="show-for-sr">Second slide details.</span>
                        </button>
                    </nav>
                </div>
            </div>
        </section>

        <section id="featured-posts">
            <div class="grid-container">
                <h2>
                    The Blog
                </h2>
                <div class="grid-x">
                    <?php
                        $args = array(
                            'numberposts' => 2
                        );

                        $featured_posts = get_posts($args);
                        foreach ($featured_posts as $featured_post) {
                            $post_excerpt = substr($featured_post -> post_content, 0, 204);
                    ?>
                    <div class="cell large-6">
                        <h3>
                            <?php echo $featured_post -> post_title; ?>
                        </h3>
                        <p>
                            <?php echo $post_excerpt; ?>...
                            <a href="<?php echo the_permalink(); ?>">Read More</a>
                        </p>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </section>

    </main>

<?php    
    get_footer();
?>
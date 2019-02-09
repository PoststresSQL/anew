<?php
    get_header();
?>
    <main id="home-page">

        <section id="banner-container">
            <div class="grid-container">
                <h1 id="banner-title">
                    We are here<br>
                    to encourage<br> 
                    &amp; challenge people
                </h1>
                <h3 id="banner-subtitle">
                    to live their best, most consistent, most sustainable life yet
                </h3>
                <a href="#"
                class="button primary">
                    Get Started
                </a>
            </div>
        </section>

        <section id="home_welcome-container">
            <!-- approx 1074x816 pixels grid -->
            <div class="grid-container grid"        
                 id="home_welcome-grid">
                <div id="welcome_slogan-container">
                    <p>
                        Welcome to Anew Accountibility and Lifestyle Coaching! Are you ready to start over? Get in shape? Eat better? Achieve the goals you’ve been waiting years to achieve? Change careers? Then you are at the right place. 
                    </p>
                </div>
                <div id="faq1-container">
                    <div class="grid-y">
                        <div class="cell">
                            <h3>
                                FAQ
                            </h3>
                        </div>
                        <div class="cell grid">
                            <div class="vertical-center">
                                <h5>
                                    How Do I Get Started?
                                </h5>
                                <p>
                                    <a href="#">Fill out the form</a> and we will be in touch through the email address you provided.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="faq2-container"
                    class="grid">
                    <div class="vertical-center">
                        <h5>
                            How Much Does It Cost?
                        </h5>
                        <p>
                            We have multiple plans available for your needs and budget. <a href="#">See Plans</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="testimonials">
            <div class="grid-container">
                <h2>
                    What People Are Saying
                </h2>
                <!-- @TODO Get Testimonials up -->
                <?php 
                    echo do_shortcode('[testimonials_cycle theme="default_style" width="100%" count="-1" order_by="date" order="ASC" show_title="1" use_excerpt="0" show_thumbs="0" show_date="1" show_other="0" hide_view_more="0" output_schema_markup="0" testimonials_per_slide="1" transition="scrollHorz" timer="5000" pause_on_hover="true" auto_height="container" show_pager_icons="1" prev_next="1" display_pagers_above="0" paused="0"]');
                ?>
            </div>
        </section>

        <section id="featured-posts">
            <div class="grid-container">
                <h2>
                    The Blog
                </h2>
                <div class="grid-x grid-padding-x">
                    <?php
                        $args = array(
                            'numberposts' => 2
                        );
                        $featured_posts = get_posts($args);
                        foreach ($featured_posts as $featured_post) {
                            $post_excerpt = substr($featured_post -> post_content, 0, 204);
                    ?>
                    <div class="cell large-6">
                        <h4>
                            <?php echo $featured_post -> post_title; ?>
                        </h4>
                        <p>
                            <?php echo $post_excerpt, '...'; ?>
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
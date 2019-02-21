<?php
    get_header();
?>
    <main id="home-page">

        <section id="banner-container">
            <div class="grid-container">
                <h1 id="banner-title">
                    <span class="title-line line-one">
                        We are here
                    </span><br/>
                    <span class="title-line line-two">
                        to encourage
                    </span><br />
                    <span class="title-line line-three">
                        &amp; challenge people
                    </span>
                </h1>
                <h3 id="banner-subtitle">
                    to live their best, most consistent, most sustainable life yet
                </h3>
                <a href="/get-started/"
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
                                <h4>
                                    How Do I Get Started?
                                </h4>
                                <p>
                                    <a href="/get-started/">Fill out the form</a> and we will be in touch through the email address you provided.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="faq2-container"
                    class="grid">
                    <div class="vertical-center">
                        <h4>
                            How Much Does It Cost?
                        </h5>
                        <p>
                            We have multiple plans available for your needs and budget. <a href="/faq/">See Plans</a>
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
                <div class="container">
                    <input type="radio" name="nav" id="first" checked/>
                    <input type="radio" name="nav" id="second" />
                    <input type="radio" name="nav" id="third" />
                    
                    <div class="slider__buttons">
                        <label for="first" class="first"></label>
                        <label for="second"  class="second"></label>
                        <label for="third" class="third"></label>
                    </div>
                    
                    <div class="one slide">
                        <blockquote>
                            <span class="leftq quotes">&ldquo;</span>
                            I didn’t really know what to expect when I signed up with an accountability coach, but I knew that I was lacking some serious motivationwhen it came to my personal goals. Anne-Marie took the time to understand how I tick, what motivates me, and where I was seeing successes in my life specifically at work
                            <span class="rightq quotes">&bdquo; </span>
                        </blockquote>
                    </div>
                    
                    <div class="two slide">
                        <blockquote>
                            <span class="leftq quotes">&ldquo;</span> 
                            I didn’t really know what to expect when I signed up with an accountability coach, but I knew that I was lacking some serious motivationwhen it came to my personal goals. Anne-Marie took the time to understand how I tick, what motivates me, and where I was seeing successes in my life specifically at work
                            <span class="rightq quotes">&bdquo; </span>
                        </blockquote>
                    </div>
                    
                    <div class="three slide">
                        <blockquote>
                            <span class="quotes leftq"> &ldquo;</span>
                            I didn’t really know what to expect when I signed up with an accountability coach, but I knew that I was lacking some serious motivationwhen it came to my personal goals. Anne-Marie took the time to understand how I tick, what motivates me, and where I was seeing successes in my life specifically at work
                            <span class="rightq quotes">&bdquo; </span>
                        </blockquote>
                    </div>
                </div>
            </div>
        </section>

        <section id="featured-posts">
            <div class="grid-container">
                <h2>
                    The Blog
                </h2>
                <div class="grid-x grid-padding-x">
                    <?php
                        // THE WORDPRESS LOOP START
                        if ( have_posts() ) : while ( have_posts() ) : the_post();

                        $args = array(
                            'numberposts' => 2
                        );
                        $featured_posts = wp_get_recent_posts($args);
                    ?>
                    <div class="cell large-6 medium-6 small-12">
                        <h4>
                            <?php echo the_title(); ?>
                        </h4>
                        <p>
                            <?php echo get_the_excerpt($featured_post -> ID) ?>
                            <a href="<?php echo get_permalink($featured_post -> ID); ?>">Read More</a>
                        </p>
                    </div>
                    <?php
                        endwhile; else :
                    ?>
                        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php
                        endif;
                        // THE WORDPRESS LOOP ENDS
                    ?>
                </div>
            </div>
        </section>

    </main>

<?php    
    get_footer();
?>
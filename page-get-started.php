<?php
    get_header();
?>

<main id="started-page">
    <section class="page-title__section">
        <div class="grid-container">
            <h2 class="page-title">
                <?php echo the_title(); ?>
            </h2>
        </div>
    </section>

    <section class="background-orange">
        <div class="grid-container">
            <h4>
                Welcome to Anew Accountability and Lifestyle Coaching! Our Mission Statement revolves around our clients: To encourage and challenge people to live their best, most consistent, and most sustainable life yet.
            </h4>
            <h4>
                Are you ready to...
            </h4>
            <div class="grid-container grid-x grid-padding-x"
                 id="get-started__list">
                <ul class="no-bullet cell large-6">
                    <li>
                        <h5>
                            <i class="far fa-compass fa-lg"></i>
                            Start Over?
                        </h5>
                    </li>
                    <li>
                        <h5>
                            <i class="far fa-heart fa-lg"></i>
                            Get in shape?
                        </h5>
                    </li>
                    <li>
                        <h5>
                            <i class="far fa-lemon fa-lg"></i>
                            Eat better?
                        </h5>
                    </li>
                </ul>
                <ul class="no-bullet cell large-6">
                    <li>
                        <h5>
                            <i class="far fa-star fa-lg"></i>
                            Achieve the goals you've been waiting years to achieve?
                        </h5>
                    </li>
                    <li>
                        <h5>
                            <i class="far fa-building fa-lg"></i>
                            Change careers?
                        </h5>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="user-form__section">
        <div class="grid-container">
            <div class="form-text">
                <h4>
                    Fill out the form
                </h4>
                <h5>
                    Are you ready to get started? Do you want to achieve measurable results now? Complete the form below to schedule your session with your Anew Coach.
                </h5>
            </div>
            <?php
                echo do_shortcode('[wpforms id="45" title="false" description="false"]');
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
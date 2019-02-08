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
            <h3>
                Welcome to Anew Accountability and Lifestyle Coaching! Our Mission Statement revolves around our clients: To encourage and challenge people to live their best, most consistent, and most sustainable life yet.
            </h3>
            <h3>
                Are you ready to...
            </h3>
            <div class="grid-container grid-x grid-padding-x">
                <ul class="no-bullet cell large-6">
                    <li>
                        <h4>
                            Start Over?
                        </h4>
                    </li>
                    <li>
                        <h4>
                            Get in shape?
                        </h4>
                    </li>
                    <li>
                        <h4>
                            Eat better?
                        </h4>
                    </li>
                </ul>
                <ul class="no-bullet cell large-6">
                    <li>
                        <h4>
                            Achieve the goals you've been waiting years to achieve?
                        </h4>
                    </li>
                    <li>
                        <h4>
                            Change careers?
                        </h4>
                    </li>
                </ul>
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
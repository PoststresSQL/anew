<?php
    get_header();
?>

<main id="about-page">
    <section class="page-title__section">
        <div class="grid-container no-padding-bottom">
            <h2 class="page-title">
                <?php the_title(); ?>
            </h2>
        </div>
    </section>
    <section class="page-content__section">
        <div class="grid-container">
            <?php
                while ( have_posts() ) : the_post(); 
                    the_content();
                endwhile; 
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
                        $post_link = get_permalink($featured_post -> ID);
                ?>
                <div class="cell large-6 medium-6 small-12">
                    <h4>
                        <?php echo $featured_post -> post_title; ?>
                    </h4>
                    <p>
                        <?php echo $post_excerpt, '...'; ?>
                        <a href="<?php echo $post_link; ?>">Read More</a>
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
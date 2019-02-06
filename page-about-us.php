<?php
    get_header();
?>

<main class="grid-container">
    <section>
        <h2>
            <?php the_title(); ?>
        </h2>
        <?php
            while ( have_posts() ) : the_post(); 
                the_content();
            endwhile; 
        ?>
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
                        <?php echo $post_excerpt;; ?>...
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
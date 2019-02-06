<?php
    get_header();
?>

<main>
    <section>
        <div class="grid-container">
            <h2>
                <?php the_title(); ?>
            </h2>
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
            <div class="grid-x">
                <?php
                    $args = array(
                        'numberposts' => 2
                    );

                    $featured_posts = get_posts($args);
                    foreach ($featured_posts as $featured_post) {
                ?>
                <div class="cell large-6">
                    <h3>
                        <?php echo $featured_post -> post_title; ?>
                    </h3>
                    <p>
                        <?php var_dump($featured_post); ?>
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
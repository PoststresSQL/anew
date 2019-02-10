<?php
    get_header();
?>

<main id="blog-page">
    <!-- <section class="page-title__section">
        <div class="grid-container no-padding-bottom">
            <h2 class="page-title">
                <?php the_title(); ?>
            </h2>
        </div>
    </section> -->
    <section>
        <div class="grid-container">
                <ul class="grid-x grid-padding-x no-bullet">
                    <?php
                    // check if blog posts, loop through all of them and grab data of each post
                    $all_posts = new WP_QUERY(
                        array(
                            'post_type' => 'post'
                            , 'post_status' => 'publish'
                            , 'posts_per_page' => -1
                            )
                        );
                        
                    if($all_posts -> have_posts()) :
                        
                        // start the loop
                        while($all_posts -> have_posts()) :
                            $all_posts -> the_post();
                            $post_id = get_the_ID();
                            $category_object = get_the_category($post_id);
                            $category_name = $category_object[0] -> name;
                            $wpblog_fetrdimg = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                            ?>
                    <li class="cell large-6 medium-6 small-12">
                        <a href="<?php echo the_permalink(); ?> ">
                            <div class="post__image" style='background-image: url("<?php echo $wpblog_fetrdimg; ?>")'>
                            </div>
                            <h5 class="post__category">
                                <?php echo $category_name; ?>
                            </h5>
                            <h4 class="post__title">
                                <?php the_title(); ?>
                            </h4>
                            <a href="<?php echo the_permalink(); ?> "
                               class="post__link">
                                Read More
                            </a>
                        </a>
                    </li>
                <?php
                    endwhile;
                    // end the loop
                    
                    else :
                        ?>
                    <p>
                        <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
                    </p>
                    <?php       
                endif;
                ?>
            </ul>
        </div>
    </section>
</main>

<?php
    get_footer();
?>
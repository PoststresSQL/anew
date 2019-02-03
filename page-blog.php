<?php
    get_header();
?>

<main>
    <div class="grid-container">
        <ul>
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
            ?>
                <li>
                    <a href="<?php echo the_permalink(); ?>">
                        <h4>
                            <?php the_title(); ?>
                        </h4>
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
</main>

<?php
    get_footer();
?>
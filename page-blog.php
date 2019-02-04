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
                        $post_id = get_the_ID();
                        $category_object = get_the_category($post_id);
                        $category_name = $category_object[0] -> name;
            ?>
                <li>
                    <a href="<?php echo the_permalink(); ?>">
                        <h6>
                            <?php echo $category_name; ?>
                        </h6>
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
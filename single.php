<?php

    get_header();

    while(have_posts()) {
        the_post();
        $post_id = get_the_ID();
        $category_object = get_the_category($post_id);
        $category_name = $category_object[0] -> name;
?>

<main>
    <div class="grid-container">
        <h6>
            <?php echo $category_name; ?>
        </h6>
        <h2>
            <?php the_title(); ?>
        </h2>
        <?php
            the_content();
        ?>
    </div>
</main>

<?php 
    }

    get_footer();
?>
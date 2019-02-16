<?php

    get_header();

    while(have_posts()) {
        the_post();
        $post_id = get_the_ID();
        $category_object = get_the_category($post_id);
        $category_name = $category_object[0] -> name;
?>

<main id="single-page">
    <section class="page-title__section">
        <div class="grid-container no-padding-bottom"> 
            <h2 class="page-title">
                Blog
            </h2>
        </div>
    </section>
    <div class="grid-container grid-x">
        <section class="cell large-9">
            <div class="post__image-container text-center">
                <?php the_post_thumbnail( array( 450, 450 ) ); ?>
            </div>
            <h5 class="post__category">
                <?php echo $category_name; ?>
            </h5>
            <h2 class="post__title">
                <?php the_title(); ?>
            </h2>
            <?php
                the_content();
            ?>
        </section>
        <aside class="cell large-3"
               id="categories-list">
            <div class="categories-list__container">
                <h5>Categories:</h5>
                <?php echo get_the_category_list($post_id); ?>
            </div>
        </aside>
    </div>
</main>

<?php 
    }

    get_footer();
?>
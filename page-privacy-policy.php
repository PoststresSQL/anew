<?php 
    get_header(); 
    
    if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

<main>
    <section>
        <div class="grid-container">
            <?php echo the_content(); ?>
        </div>
    </section>
</main>

<?php 
    endwhile; else :
?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php 
    endif;
    get_footer(); 
?>
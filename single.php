<?php 
    get_header();

    while(have_posts()) {
        the_post(); ?>
        <div class="blogpost">
            <img src="<?php if (has_post_thumbnail()) {
        echo get_the_post_thumbnail_url();
        } ?>"> </img>
            <div class="singletextcontent">
                <h2><?php the_title() ?> </h2>
                <p><?php the_content(); ?></p>
            </div>
        </div>
    <?php }

    get_footer();
?>
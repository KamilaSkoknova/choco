<?php get_header(); ?>

<div class="padding-general articles">
    <div class="container">
        <div class="row">
            <?php 
                if (have_posts()) {
                    while(have_posts()) {
                        the_post();
                        get_template_part( 'partials/archive_content');
                    }
                }
            ?>
            <div class="mt-4">
                <?php the_posts_pagination(); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
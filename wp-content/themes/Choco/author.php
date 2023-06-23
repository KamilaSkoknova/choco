<?php get_header(); ?>

<div class="padding-general articles">
    <div class="container">
        <div class="row">
            <h1 class="mb-3">Články od <?php the_author() ?></h1>
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
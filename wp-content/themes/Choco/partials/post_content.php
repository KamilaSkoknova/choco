<div class="container" data-aos="fade-up">
    <div class="row">
        <div class="col-lg-10 offset-lg-1 col-12 offset-0 mt-5">
            <article id="post-<?php the_ID() ?>">
                <p class="d-flex"><small>Publikované dňa: <?php the_date(); ?></small></p>
                <?php the_title ('<h2 class="my-1 ">', '</h2>'); ?>
                <div class="post-img mb-3">
                    <img src="<?php the_post_thumbnail_url('full' ); ?>" class="img-fluid" alt="<?php the_post_thumbnail_caption(); ?>">
                </div>
                <h5>Napísal/a: <?php the_author_posts_link(); ?></h5>
                <?php the_content(); ?>
            </article>
        </div>
    </div>
</div>

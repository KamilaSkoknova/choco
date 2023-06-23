<div class="col-12 col-lg-4">
    <article class="post">
        <a href="<?php the_permalink(); ?>"><?php the_title ('<h2 class="">', '</h2>'); ?></a>
        <?php the_excerpt(); ?>
        <div class="mt-auto d-flex justify-content-between">
            <span><?php the_time('j. n. Y'); ?></span>
            <div class="me-4 ">
                <a href="<?php the_permalink(); ?>">Prečítať<i class="bi bi-arrow-right ms-1"></i></a>
            </div>
        </div>

    </article>
</div>
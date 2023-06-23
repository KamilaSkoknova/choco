<?php get_header(); ?>

<div class="padding-general articles">
	<main>
		<div class="container">
			<div id="post-<?php the_ID() ?>">
				<?php 
					if (has_post_thumbnail()):
						the_post_thumbnail('full');
					endif;
				?>
				<?php the_content(); ?>
			</div>
		</div>
	</main>
</div>

<?php get_footer(); ?>

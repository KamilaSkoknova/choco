<?php get_header(); ?>

<div class="padding-general articles">
	<main>
		<?php 
			while ( have_posts() ) :
				the_post();

				get_template_part( 'partials/post_content', 'article' );

			endwhile;
		?>
	</main>
</div>

<?php get_footer(); ?>

<?php get_header() ?>
<section class="noprobs-content">
	<div class="container">
		<div class="row justify-content-center">
				<?php
				if ( have_posts() ) : ?>
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/archive', 'post' );

					endwhile;
					?>
				<?php endif; ?>
		</div>
		<div class="row">
			<div class="col-12">
				<?php wp_pagenavi(); ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer();

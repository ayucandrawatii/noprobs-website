<?php get_header(); ?>
<div class="container">
	<div class="row">
		<?php
			if(have_posts()):
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/archive', 'post' );
				endwhile;
			endif;
		?>
	</div>
	<div class="row">
		<div class="col-12">
			<?php wp_pagenavi(); ?>
		</div>
	</div>
</div>
<?php get_footer();

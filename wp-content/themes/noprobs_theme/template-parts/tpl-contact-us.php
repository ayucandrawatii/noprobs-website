<?php /* Template Name: Contact Us */ ?>
<?php get_header(); ?>
<section class="noprobs-content">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-10">
				<div class="content-wrapper">
					<?php
						while ( have_posts() ) : the_post();
							the_content();
						endwhile;
					?>
				</div>
			</div>
			<div class="col-12">
				<div class="content-wrap">
					<?php
						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
							'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
							'separator'   => '<span class="screen-reader-text">, </span>',
						) );
					?>
				</div>

				<?php
					edit_post_link(
						sprintf(
							/* translators: %s: Name of current post */
							__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
							get_the_title()
						),
						'<div class="entry-footer"><span class="edit-link">',
						'</span></div><!-- .entry-footer -->'
					);
				?>
			</div>
		</div>
	</div>

</section>

<?php get_footer(); ?>

<div class="col-12 col-lg-8">
	<div class="">
		<p class="text-secondary mb-4"><i class="fa fa-bookmark-o mr-2" aria-hidden="true"></i> <?php echo get_the_date(); ?></p>
		<h1 class="mb-4"><?php the_title();?></h1>
	</div>

	<?php
		the_content();

		wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
			'separator'   => '<span class="screen-reader-text">, </span>',
		) );
	?>
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
<div class="col-12 col-lg-4">
	<div class="sidebar-blog-box">
		<?php dynamic_sidebar( 'sidebar-blog' ); ?>
	</div>
</div>

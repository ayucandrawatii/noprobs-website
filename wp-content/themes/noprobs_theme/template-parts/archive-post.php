<div class="col-12">
	<div class="post-wrap mb-5">
		<div class="row">
			<div class="col-12 col-lg-3">
				<?php if ( has_post_thumbnail() ) : ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<div class="img-container">
						<?php the_post_thumbnail('blog-thumbnail'); ?>
					</div>
				</a>
				<?php else: ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<div class="img-container">
						<img src="<?php echo get_template_directory_uri().'/assets/img/no-thumbnail.jpg' ?>" alt="" class="w-100">
					</div>
				</a>
				<?php endif; ?>
			</div>
			<div class="col clearfix">
				<h3><a href="<?php the_permalink() ?>" class="text-black"><?php the_title(); ?></a></h3>
				<?php the_excerpt(); ?>
				<?php echo sprintf( '<a class="btn blue-btn float-md-right mt-4" href="%1$s">%2$s</a>',
			        get_permalink( get_the_ID() ),
			        __( 'Read More', 'noprobs' )
			    );  ?>
			</div>
		</div>
	</div>
</div>

<?php global $my_redux; ?>
<?php if(is_home() || is_front_page()): ?>

<?php elseif(is_page() && !is_front_page()): ?>
<section class="noprobs-content mb-0">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12">
				<h1 class="mb-0"><?php echo get_the_title(); ?></h1>
			</div>
		</div>
	</div>
</section>

<?php elseif(is_archive()  && have_posts()): ?>
	<section class="pt-noprobs">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12">
					<?php
							the_archive_title( '<h1 class="archive-title mb-0 text-uppercase">', '</h1>' );
						?>
				</div>
			</div>
		</div>
	</section>

<?php elseif(is_singular()): ?>

<?php elseif(is_404()): ?>
	<section class="pt-noprobs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="banner-title text-center"><h1><small>404 Error - Page Not Found!</small></h1></div>
				</div>
			</div>
		</div>
	</section>

<?php elseif(is_search()): ?>
	<section class="py-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12">
					<h1 class="mb-0"><?php printf( esc_html__( 'Search Results for: %s', 'my'), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</div>
				<div class="col-12">
					<div class="mt-5">
						<?php echo get_search_form() ?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>

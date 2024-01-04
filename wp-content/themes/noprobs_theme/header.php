<?php global $my_redux; ?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="shortcut icon" href="<?php echo $my_redux['favicon-image']['url']; ?>" type="image/vnd.microsoft.icon" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!--- HEADER --->
	<header>
		<?php if(is_home() || is_front_page()): ?>
		<div class="homeimg-banner py-3">
			<div class="header-top">
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-9 col-lg-auto">
							<a href="<?php echo home_url('/'); ?>">
								<img src="<?php echo $my_redux['logo-image']['url']; ?>" alt="<?php bloginfo( 'description' ); ?>" class="logo">
							</a>
						</div>
						<div class="col-lg-auto d-none d-lg-block">
							<div class="d-flex cta-box">
								<div class="cta-phone-box">
									<h5>Call us:</h5>
									<a href="tel:<?php echo str_replace(' ', '', $my_redux['phone-number']) ?>"><?php echo $my_redux['phone-number']; ?></a>
								</div>
								<div class="cta-mail-box">
									<h5>Email us:</h5>
									<a href="mailto:<?php echo $my_redux['email']; ?>"><?php echo $my_redux['email']; ?></a>
								</div>
							</div>
						</div>
						<div class="d-block d-lg-none col-auto">
							<div class="py-3">
								<a href="#" class="showmenu text-white d-inline-block d-lg-none" data-toggle="collapse" data-target="#navbar-noprobs1" aria-controls="navbar-coastal" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-bottom">
				<div class="container">
					<div class="row justify-content-between d-none d-lg-block">
						<div class="col-lg-12">
							<div class="top-menu mb-0 mb-lg-0">
								<div class="d-flex align-items-center">
									<?php
										wp_nav_menu(array(
											'theme_location' => 'first-menu',
											'menu_class' => 'menu d-flex flex-column flex-lg-row flex-wrap',
											'container_class' => 'menu-wrap'
										));
									?>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="top-menu d-block d-lg-none">
								<div class="collapse" id="navbar-noprobs1">
									<?php
											wp_nav_menu(array(
												'theme_location' => 'first-menu',
												'menu_class' => 'menu d-flex flex-column flex-lg-row justify-content-between',
												'container_class' => 'menu-wrap'
											));
										?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="home-banner">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-6">
							<h1 class="text-white"><?php echo $my_redux['title-banner']; ?></h1>
							<div class="d-none d-lg-block google-rating-box">
								<img src="<?php echo $my_redux['google-rating-img']['url']; ?>" alt="">
							</div>
						</div>
						<div class="col-12 col-lg-6">
							<div class="desc-banner text-white"><?php echo $my_redux['description-banner']; ?></div>
							<div class="cta-group">
								<a href="#" class="limegreen-btn" data-toggle="modal" data-target="#enquire-form">SCHEDULE A JOB</a>
								<a href="tel:<?php echo str_replace(' ', '', $my_redux['phone-number']) ?>" class="blue-btn">CALL US NOW</a>
							</div>
							<div class="d-block d-lg-none google-rating-box">
								<img src="<?php echo $my_redux['google-rating-img']['url']; ?>" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php else: ?>
		<div class="bg-darkblue pt-3">
			<div class="header-top">
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-9 col-lg-auto">
							<a href="<?php echo home_url('/'); ?>">
								<img src="<?php echo $my_redux['logo-image']['url']; ?>" alt="<?php bloginfo( 'description' ); ?>" class="logo">
							</a>
						</div>
						<div class="col-lg-auto d-none d-lg-block">
							<div class="d-flex cta-box">
								<div class="cta-phone-box">
									<h5>Call us:</h5>
									<a href="tel:<?php echo str_replace(' ', '', $my_redux['phone-number']) ?>"><?php echo $my_redux['phone-number']; ?></a>
								</div>
								<div class="cta-mail-box">
									<h5>Email us:</h5>
									<a href="mailto:<?php echo $my_redux['email']; ?>"><?php echo $my_redux['email']; ?></a>
								</div>
							</div>
						</div>
						<div class="d-block d-lg-none col-auto">
							<div class="py-3">
								<a href="#" class="showmenu text-white d-inline-block d-lg-none" data-toggle="collapse" data-target="#navbar-noprobs1" aria-controls="navbar-coastal" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-bottom">
				<div class="container">
					<div class="row justify-content-between d-none d-lg-block">
						<div class="col-lg-12">
							<div class="top-menu mb-0 mb-lg-0">
								<div class="d-flex align-items-center">
									<?php
										wp_nav_menu(array(
											'theme_location' => 'first-menu',
											'menu_class' => 'menu d-flex flex-column flex-lg-row flex-wrap',
											'container_class' => 'menu-wrap'
										));
									?>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="top-menu d-block d-lg-none">
								<div class="collapse" id="navbar-noprobs1">
									<?php
											wp_nav_menu(array(
												'theme_location' => 'first-menu',
												'menu_class' => 'menu d-flex flex-column flex-lg-row justify-content-between',
												'container_class' => 'menu-wrap'
											));
										?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</header>
	<?php echo get_template_part( 'template-parts/template', 'header' ); ?>

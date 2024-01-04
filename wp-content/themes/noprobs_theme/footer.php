<?php global $my_redux; ?>

	<!--- FOOTER --->
	<div class="gap"></div>
	<span class="border-color"></span>
	<footer class="bg-darkblue text-white">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-12 col-lg-4">
					<div class="mr-5">
						<?php dynamic_sidebar( 'footer1' ); ?>
					</div>
				</div>
				<div class="col-12 col-lg-auto mt-5 mt-lg-0">
					<?php dynamic_sidebar( 'footer2' ); ?>
				</div>
				<div class="col-12 col-lg-auto mt-5 mt-lg-0">
					<?php dynamic_sidebar( 'footer3' ); ?>
				</div>
			</div>
			<button onclick="topFunction()" id="myBtn" title="Go to top">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
				  <g clip-path="url(#clip0_1_825)">
				    <path d="M12 20.25L12 3.75" stroke="#E0FB60" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				    <path d="M5.25 10.5L12 3.75L18.75 10.5" stroke="#E0FB60" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				  </g>
				  <defs>
				    <clipPath id="clip0_1_825">
				      <rect width="24" height="24" fill="white"/>
				    </clipPath>
				  </defs>
				</svg>
			</button>
			<!--- COPYRIGHT --->
			<div class="copyright">
					<div class="row">
						<div class="col-12">
							<p class="mb-0"><?php echo $my_redux['copyright'] ?></p>
						</div>
					</div>
			</div>
		</div>
	</footer>

	<div class="modal fade" id="enquire-form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"><strong>Schedule a Job</strong></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php echo do_shortcode( '[contact-form-7 id="'.$my_redux['enquire-form'].'"]' ); ?>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="contact-form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-uppercase" id="exampleModalLabel"><strong>Contact Us Now</strong></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php echo do_shortcode( '[contact-form-7 id="'.$my_redux['contact-form'].'"]' ); ?>

				</div>
			</div>
		</div>
	</div>

	<?php wp_footer();?>
</body>
</html>

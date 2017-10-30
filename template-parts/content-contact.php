<div id = "contactPage">

<div class="container">
	<div class="row">
		<div class = "col-sm-6">
			<div class = "contactInfo mb-3">
				<h3>Contact Info</h3>
					<div class="row mb-2">
						<div class="col-sm-4"><i class="fa fa-phone mr-2" aria-hidden="true"></i> <a href = "tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a></div>
						<div class="col-sm-8"><i class="fa fa-envelope mr-2" aria-hidden="true"></i><a href = "mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></div>
					</div><!-- .row -->
					<div class="row">
						<div class="col-sm-12">
							<i class="fa fa-map-marker mr-2" aria-hidden="true"></i><?php the_field('street_address_1', 'option'); ?> | <?php the_field('street_address_2', 'option'); ?>
						</div>
					</div>
			</div><!-- .contactInfo -->

			<div class = "studioHours mb-3">
				<h3>Studio Hours</h3>
				HOURS HERE
			</div><!-- .studioHours -->

			<div class = "locationMap">
				<h3>Location</h3>
				<?php $location = get_field('map', 'option');
				
				if( !empty($location) ): ?>
				
				<div class="acf-map">
 					<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
				</div>
				<?php endif; ?>
			</div><!-- .locationMap -->

		</div><!-- .col-sm-6 -->
		
		<div class = "col-sm-6">
			<h3>Contact Image Hair Studio</h3>
			<?php echo do_shortcode('[ninja_form id=1]'); ?>
		</div><!-- .col-sm-6 -->
	</div><!-- .row -->
</div><!-- .container -->

</div><!-- #contactPage -->
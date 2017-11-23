<div id = "contactPage">
	<div class="container">
		<div class="row">
			<div class = "col-sm-6">
				<div id="studioContact">
					<h3>Contact Image Hair Studio</h3>
					<a href = "tel:<?php the_field('phone', 'option'); ?>"><h5><i class="fa fa-phone mr-2" aria-hidden="true"></i><?php the_field('phone', 'option'); ?></h5></a>
					<a href = "mailto:<?php the_field('email', 'option'); ?>"><h5><i class="fa fa-envelope mr-2" aria-hidden="true"></i><?php the_field('email', 'option'); ?></h5></a>
				</div>

				<div id = "studioHours" class = "mt-5">
					<h3>Studio Hours</h3>
					<ul>
						<li><span>Monday </span><?php the_field('monday_hours'); ?></li>
						<li><span>Tuesday </span><?php the_field('tuesday_hours'); ?></li>
						<li><span>Wednesday </span><?php the_field('wednesday_hours'); ?></li>
						<li><span>Thursday </span><?php the_field('thursday_hours'); ?></li>
						<li><span>Friday </span><?php the_field('friday_hours'); ?></li>
						<li><span>Saturday </span><?php the_field('saturday_hours'); ?></li>
						<li><span>Sunday </span><?php the_field('sunday_hours'); ?></li>
					</ul>
				</div><!-- #studioHours -->
			</div><!-- .col-sm-6 -->
			
			<div class = "col-sm-6">
				<div class = "locationMap">
					<h3>Come and Visit</h3>
					<?php $location = get_field('map', 'option');
					
					if( !empty($location) ): ?>
					
					<div class="acf-map">
	 					<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
					</div>
					<?php endif; ?>
				</div><!-- .locationMap -->
			</div><!-- .col-sm-6 -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #contactPage -->
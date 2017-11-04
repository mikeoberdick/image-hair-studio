<div id = "aboutPage">

<div id = "contact_callout" class="container-fluid">
	<div class="row contact_info">
		<div class="col-sm-12">
			<h3>Contact Info</h3>
			<i class="fa fa-phone mr-2" aria-hidden="true"></i> <a href = "tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a> | <i class="fa fa-envelope mr-2" aria-hidden="true"></i><a href = "mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
		</div>		
	</div>
</div><!-- .container-fluid -->

<div class="container">
	<div class="row">
		<div class = "col-sm-6">
			<div id = "studioHours">
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

</div><!-- #aboutPage -->
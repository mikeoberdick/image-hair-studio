<?php $image = get_field('hero_image'); ?>
<div class="container-fluid heroSection" style = "background-image: url('<?php echo $image['url']; ?>')">
	<div class = "row opacityLayer">
		<div class = "container">
			<div class = "row">
				<div class = "col-sm-12 hpCallout">
						<h2 class = "text-center pl-5 pr-5 hpCTA"><?php the_field('hero_text'); ?></h2>
				</div>
			</div>
		</div><!-- .container -->
	</div><!-- #opacityLayer -->	
</div><!-- .container-fluid -->

<div id = "hpSlogan" class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3><?php the_field('slogan', 'option'); ?></h3>
			</div>
		</div>
	</div>
</div>

<?php $servicesImage = get_field('services_section_image'); ?>
<div class="container-fluid homepageSection" style = "background-image: url('<?php echo $servicesImage['url']; ?>')">
	<div class = "row opacityLayer">
		<div class = "container">
			<div class = "row">
				<div class = "col-sm-12">
						<h2 class = "sectionTitle text-center pl-5 pr-5">Services</h2>
				</div>
			</div>
		</div><!-- .container -->
	</div><!-- #opacityLayer -->	
</div><!-- .container-fluid -->

<?php $staffImage = get_field('staff_section_image'); ?>
<div class="container-fluid homepageSection" style = "background-image: url('<?php echo $staffImage['url']; ?>')">
	<div class = "row opacityLayer">
		<div class = "container">
			<div class = "row">
				<div class = "col-sm-12">
						<h2 class = "sectionTitle text-center pl-5 pr-5">Our Staff</h2>
				</div>
			</div>
		</div><!-- .container -->
	</div><!-- #opacityLayer -->	
</div><!-- .container-fluid -->

<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<?php $staffPhoto = get_field('staff_photo'); ?>
			<img src="<?php echo $staffPhoto['url']; ?>" alt="<?php echo $staffPhoto['alt']; ?>"></div>
		<div class="col-sm-6">
			<h5>The Girls of Image Hair Studio</h5>
			<p><?php the_field('staff_text'); ?></p>
			<a href = '<?php echo bloginfo('url'); ?>/meet-the-staff'><button role = 'button' class = 'btn btn-primary btn-lg'>Meet The Staff</button></a>
		</div>
	</div>
</div>

<?php $instagramImage = get_field('instagram_section_image'); ?>
<div class="container-fluid homepageSection" style = "background-image: url('<?php echo $instagramImage['url']; ?>')">
	<div class = "row opacityLayer">
		<div class = "container">
			<div class = "row">
				<div class = "col-sm-12">
						<h2 class = "sectionTitle text-center pl-5 pr-5">Instagram</h2>
				</div>
			</div>
		</div><!-- .container -->
	</div><!-- #opacityLayer -->	
</div><!-- .container-fluid -->
<div id = "instagramSlider">
	<?php echo do_shortcode('[rev_slider alias="instagram"]'); ?>
</div>

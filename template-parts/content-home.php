<?php $image = get_field('hero_image'); ?>
<div class="container-fluid heroSection" style = "background-image: url('<?php echo $image['url']; ?>')">
	<div class = "row opacityLayer">
		<div class = "container">
			<div class = "row">
				<div class = "col-sm-12 hpCallout">
						<h1 class = "text-center pl-5 pr-5 hpCTA"><?php the_field('hero_text'); ?></h1>
				</div>
			</div>
		</div><!-- .container -->
	</div><!-- #opacityLayer -->	
</div><!-- .container-fluid -->

<div id = "hpSlogan" style = "background-image: url(https://blisshairandbeauty.files.wordpress.com/2013/09/bliss-background.jpg);">
	<div class="container-fluid innerContainer">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1><?php the_field('slogan', 'option'); ?></h1>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $staffImage = get_field('staff_section_image'); ?>
<div class="container-fluid homepageTitle" style = "background-image: url('<?php echo $staffImage['url']; ?>')">
	<div class = "row opacityLayer">
		<div class = "container">
			<div class = "row">
				<div class = "col-sm-12">
						<h1 class = "sectionTitle text-center pl-5 pr-5">Our Staff</h1>
				</div>
			</div>
		</div><!-- .container -->
	</div><!-- #opacityLayer -->	
</div><!-- .container-fluid -->

<div class="container homepageSection">
	<div class="row">
		<div class="col-sm-6">
			<?php $staffPhoto = get_field('staff_photo', 'option'); ?>
			<img src="<?php echo $staffPhoto['url']; ?>" alt="<?php echo $staffPhoto['alt']; ?>"></div>
		<div class="col-sm-6">
			<h5>The Girls of Image Hair Studio</h5>
			<p><?php the_field('staff_text'); ?></p>
			<a href = '<?php echo bloginfo('url'); ?>/meet-the-staff'><button role = 'button' class = 'btn btn-primary btn-lg'>Meet The Staff</button></a>
		</div>
	</div>
</div>

<?php $servicesImage = get_field('services_section_image'); ?>
<div class="container-fluid homepageTitle" style = "background-image: url('<?php echo $servicesImage['url']; ?>')">
	<div class = "row opacityLayer">
		<div class = "container">
			<div class = "row">
				<div class = "col-sm-12">
						<h1 class = "sectionTitle text-center pl-5 pr-5">Services</h1>
				</div>
			</div>
		</div><!-- .container -->
	</div><!-- #opacityLayer -->	
</div><!-- .container-fluid -->

<?php $instagramImage = get_field('instagram_section_image'); ?>
<div class="container-fluid homepageTitle" style = "background-image: url('<?php echo $instagramImage['url']; ?>')">
	<div class = "row opacityLayer">
		<div class = "container">
			<div class = "row">
				<div class = "col-sm-12">
						<h1 class = "sectionTitle text-center pl-5 pr-5">Instagram</h1>
				</div>
			</div>
		</div><!-- .container -->
	</div><!-- #opacityLayer -->	
</div><!-- .container-fluid -->
<div class="container homepageSection">
	<div id = "instagramSlider">
		<?php echo do_shortcode('[rev_slider alias="instagram"]'); ?>
	</div>
</div>
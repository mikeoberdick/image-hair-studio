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

<div id = "hpSlogan" style = "background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/elegant_bg.jpg);">
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
			<?php $staffPhoto = get_field('staff_photo'); ?>
			<img id = "staffPhoto" src="<?php echo $staffPhoto['url']; ?>" alt="<?php echo $staffPhoto['alt']; ?>">
		</div>
		<div class="col-sm-6">
			<h5>The Girls of Image Hair Studio</h5>
			<p><?php the_field('staff_text'); ?></p>
			<!-- <a href = '<?php echo bloginfo('url'); ?>/meet-the-staff'><button role = 'button' class = 'btn btn-primary btn-lg'>Meet The Staff</button></a> -->
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

<?php $haircut = get_field('styling_img'); ?>
<?php $color = get_field('color_img'); ?>
<?php $texture = get_field('texture_img'); ?>
<?php $makeup = get_field('airbrush_img'); ?>
<?php $waxing = get_field('waxing_img'); ?>
<?php $bridal = get_field('bridal_img'); ?>

<div id = "hpServiceCards" class="container mt-5">
	<div class="card-deck">
		<div class="card">
			<div class = "cardInner" style = "background-image: url('<?php echo $haircut['url']; ?>')">
				<div class="opacityLayer">
  					<h3>Haircutting & Styling</h3>
  				</div>
  			</div>
		</div><!-- .card -->

		<div class="card">
			<div class = "cardInner" style = "background-image: url('<?php echo $color['url']; ?>')">
				<div class="opacityLayer">
  					<h3>Color Services</h3>
  				</div>
  			</div>
		</div><!-- .card -->

		<div class="card">
			<div class = "cardInner" style = "background-image: url('<?php echo $texture['url']; ?>')">
				<div class="opacityLayer">
  					<h3>Texture Treatments & Designer Waves</h3>
  				</div>
  			</div>
		</div><!-- .card -->

		<div class="card">
			<div class = "cardInner" style = "background-image: url('<?php echo $makeup['url']; ?>')">
				<div class="opacityLayer">
  					<h3>Air Brush Makeup</h3>
  				</div>
  			</div>
		</div><!-- .card -->

		<div class="card">
			<div class = "cardInner" style = "background-image: url('<?php echo $waxing['url']; ?>')">
				<div class="opacityLayer">
  					<h3>Waxing</h3>
  				</div>
  			</div>
		</div><!-- .card -->

		<div class="card">
			<div class = "cardInner" style = "background-image: url('<?php echo $bridal['url']; ?>')">
				<div class="opacityLayer">
  					<h3>Bridal Work</h3>
  				</div>
  			</div>
		</div><!-- .card -->
  	</div>
</div>

<?php $instagramImage = get_field('instagram_section_image'); ?>
<div class="container-fluid homepageTitle" style = "background-image: url('<?php echo $instagramImage['url']; ?>')">
	<div class = "row opacityLayer">
		<div class = "container">
			<div class = "row">
				<div class = "col-sm-12">
						<h1 class = "sectionTitle text-center pl-5 pr-5">Portfolio</h1>
				</div>
			</div>
		</div><!-- .container -->
	</div><!-- #opacityLayer -->	
</div><!-- .container-fluid -->
<div class="container homepageSection">
	<div id = "instagramSlider">
		<?php echo do_shortcode('[rev_slider alias="instagram"]'); ?>
	</div>
	<div class = "text-center">
		<a target = "_blank" href="http://www.instagram.com/imagehairstudio"><img id = "instagramFollow" class = "mt-3" src="<?php echo get_stylesheet_directory_uri() . '/img/follow_on_instagram.jpg';?>" alt="Follow Image Hair Studio in Instagram">
		</a>
	</div>
</div>
<div id = "staffPage">
	<div class="container">
		<h3>Image Hair Studio Staff</h3>
		<?php the_content(); ?>

		<?php while ( have_rows('staff_profile') ) : the_row();
		 	$image = get_sub_field('picture');
		 	$fullSizePic = $image['sizes']['staff-picture'];

		 	$name = get_sub_field('name');
		 	$title = get_sub_field('title');
		 	$bio = get_sub_field('bio');
		?>
		<div class="staffProfile row">
			<div class="col-sm-12 col-md-4">
				<img class="img-responsive mb-4 profilePic" src="<?php echo $fullSizePic; ?>" alt="<?php echo $image['alt'] ?>" title="<?php echo $image['title'] ?>" />
			</div><!-- .col-sm-12 .col-md-4 -->

			<div class="col-sm-12 col-md-8">
				<h3 class = "staff_name"><?php the_sub_field('name'); ?></h3>
				<h5><?php the_sub_field('title'); ?></h5>
				<p class = "staff_bio"><?php the_sub_field('bio'); ?></p>
			</div><!-- .col-sm-12 .col-md-8 -->
			<hr>
		</div><!-- .row -->
		
			<?php endwhile; ?>
	</div><!-- .container -->
</div><!-- #staffPage -->
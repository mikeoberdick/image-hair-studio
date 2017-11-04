<div id = "staffPage">
	<div class="container">
		<h3>SOME PAGE TITLE</h3>
		<?php the_content(); ?>

		<?php while ( have_rows('staff_profile') ) : the_row();
		 	$image = get_sub_field('picture');
		 	$name = get_sub_field('name');
		 	$title = get_sub_field('title');
		 	$bio = get_sub_field('bio');
		?>
		<div class="row">
			<div class="col-sm-12 col-md-4">
					<img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" title="<?php echo $image['title'] ?>" />
			</div><!-- .col-sm-12 .col-md-4 -->

			<div class="col-sm-12 col-md-8">
				<h3 class = "staff_name"><?php the_sub_field('name'); ?> | <?php the_sub_field('title'); ?></h3>
				<p class = "staff_bio"><?php the_sub_field('bio'); ?></p>
			</div><!-- .col-sm-12 .col-md-8 -->
		</div><!-- .row -->
		<hr>
			<?php endwhile; ?>
	</div><!-- .container -->
</div><!-- #staffPage -->
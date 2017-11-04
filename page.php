<?php
/**
 * The template for displaying all pages.
 *
 * This is the template for pages...note the conditionals for use with template parts.
 * Each page will need a container and a row.
 * These elements have been removed from this page to allow for each page to either be a fixed or fluid width container.
 *
 * @package understrap
 */

get_header();

?>

<div class="wrapper" id="page-wrapper">

	<main class="site-main" id="main">
	<?php if ( !is_front_page() && has_post_thumbnail() ): ?>
		<header class="entry-header" style = "background-image: url('<?php the_post_thumbnail_url(); ?>')">
		<div class="opacityLayer">
			<div class = "titleWrapper">
				<?php the_title( '<h1 class="entry-title page_header">', '</h1>' ); ?>
			</div>
		</div>
	</header><!-- .entry-header -->
	
	<?php elseif ( !is_front_page() && !has_post_thumbnail() ): ?>

	<header class="entry-header" style = "background-image: url( <?php echo get_stylesheet_directory_uri() . '/img/default_bg.jpg';?>)">
		<div class="opacityLayer">
	        <div class = "titleWrapper">
	        <?php the_title( '<h1 class="entry-title page_header">', '</h1>' ); ?>
	        </div>
	    </div>
    </header><!-- .entry-header -->
    <?php endif; ?>
	
		<?php while ( have_posts() ) : the_post(); ?>

			<?php

			if( is_page( 'homepage' ) ) {
					get_template_part( 'template-parts/content', 'home' );
			}

			elseif( is_page( 'about-our-studio' ) ) {
					get_template_part( 'template-parts/content', 'about' );
			}

			elseif( is_page( 'meet-the-staff' ) ) {
					get_template_part( 'template-parts/content', 'staff' );
			}

			elseif( is_page( 'contact-image-hair-studio' ) ) {
					get_template_part( 'template-parts/content', 'contact' );
			}

			else {
			   get_template_part( 'loop-templates/content', 'page' );
			}

			?>

		<?php endwhile; // end of the loop. ?>

	</main><!-- #main -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>

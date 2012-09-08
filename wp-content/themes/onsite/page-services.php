<?php get_header(); ?>

		<section class="page">
			<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			get_template_part( 'loop', 'page' );
			?>
			
			<div class="try-us-today"><a href="try-us-today"></a></div>
			<div class="clear">&nbsp;</div>
		</section><!-- .page -->

<?php get_footer(); ?>

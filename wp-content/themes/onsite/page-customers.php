<?php get_header(); ?>

		<section class="page">
			
			
			<h3><span>Companies we work with</span></h3>
			
			<div class="span-22 last company-logos">
				<?php query_posts('meta_key=_mf_write_panel_id&meta_value=1&showposts=-1'); ?>
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<img src="<?php echo get('logo_state_hover_state'); ?>" alt="<?php the_title(); ?>">
			<?php endwhile; ?>
			</div>
			
			<?php wp_reset_query(); ?>
			
			<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			get_template_part( 'loop', 'page' );
			?>
			
			<div class="testimonies">
				
				<?php wp_reset_query; ?>
				<?php query_posts('meta_key=_mf_write_panel_id&meta_value=2&showposts=-1'); ?>
				<?php if ( have_posts() ): ?>
					<h3><span>Customer Testimonies</span></h3>
					<?php while ( have_posts() ) : the_post(); ?>
					
				<blockquote>
					<?php the_content(); ?>
				<div class="single-testimony"><span class="name"><?php the_title(); ?></span> - <span class="company"><?php echo get ('company_name_company'); ?></span></div>
				</blockquote>
				
				<?php endwhile; ?>
				
				<?php endif; ?>
			</div>
			
			<div class="try-us-today"><a href="try-us-today"></a></div>
			<div class="clear">&nbsp;</div>
		</section><!-- .container -->

<?php get_footer(); ?>



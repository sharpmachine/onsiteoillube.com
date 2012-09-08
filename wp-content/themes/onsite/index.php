<?php get_header(); ?>

		<section class="page">
			
			<h4>Companies we work with</h4>
			<div class="span-22 last company-logos">
				<?php query_posts('meta_key=_mf_write_panel_id&meta_value=1&showposts=-5'); ?>
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<img src="<?php echo get('logo_state_default_state'); ?>" alt="<?php the_title(); ?>" class="grey">
			<?php endwhile; ?>
			</div>
			<?php wp_reset_query; ?>
			<div class="span-22 last company-logos colored-logos">
				<?php query_posts('meta_key=_mf_write_panel_id&meta_value=1&showposts=-5'); ?>
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<img src="<?php echo get('logo_state_hover_state'); ?>" alt="<?php the_title(); ?>">
			<?php endwhile; ?>
			</div>
			
			<div class="testimonies">
				<?php wp_reset_query; ?>
				<?php query_posts('meta_key=_mf_write_panel_id&meta_value=2&showposts=-0'); ?>
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					
				<blockquote>
					<?php the_content(); ?>
				<div class="single-testimony"><span class="name"><?php the_title(); ?></span> - <span class="company"><?php echo get ('company_name_company'); ?></span></div>
				</blockquote>
				
				<?php endwhile; ?>
			</div>
			
		</section>

<?php get_footer(); ?>

<?php get_header(); ?>

		<section class="page">
			
			<h3><span>Pricing Overview</span></h3>
			
			<div class="pricing-page">
				<div id="pricing-basic">
					<h2>Basic Service</h2>
					<div class="others">Retail Price</div>
					<div class="our-price">$40</div>
					<div class="us">What We Charge*</div>
					
					<table border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td>
								<li>Oil Change</li>
							</td>
							<td>
								<li>Change Oil Filter</li>
							</td>
							<td>
								<li>Lube Chassis</li>
							</td>
						</tr>
					</table>
				</div>
			</div>
			
			<div class="pricing-page last">
				<div id="pricing-full">
					<h2>Full Service</h2>
					<div class="others">Retail Price</div>
					<div class="our-price">$50</div>
					<div class="us">What We Charge*</div>
					
					<table border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td>
								<li>Oil Change</li>
							</td>
							<td>
								<li>12 PT Inspection</li>
							</td>
							<td>
								<li>Top Off Trans. Fluid</li>
							</td>
						</tr>
						<tr>
							<td>
								<li>Change Oil Filter</li>
							</td>
							<td>
								<li>Top off Brake Fluid</li>
							</td>
							<td>
								<li>Top off Wiper Fluid</li>
							</td>
						</tr>
						<tr>
							<td>
								<li>Lube Chassis</li>
							</td>
							<td>
								<li>Top Off Anitfreeze</li>
							</td>
							<td>
								<li>Top off Steering Fluid</li>
							</td>
						</tr>
					</table>
				</div>
			</div>
			
			<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			get_template_part( 'loop', 'page' );
			?>
			
			<div class="try-us-today"><a href="try-us-today"></a></div>
			<div class="clear">&nbsp;</div>
	
		</section><!-- .container -->

<?php get_footer(); ?>

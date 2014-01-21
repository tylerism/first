<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 */

get_header(); ?>			
			<div class="colored_back box_s_inset" style="position:relative;">				
				<div class="container">
					<div id="main_slider" style="height:auto; color:white; padding: 30px 0;">
						<h1><?php the_title(); ?></h1>
					</div>
				</div>
			</div>
			
			<div class="light_grey_back p50">
				<div class="container">					
					<div class="sub_section" style="overflow:visible">
							<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
					</div>
				</div>
			</div>
			<?php get_footer(); ?>
		</div>
	</div>

</body>
</html>

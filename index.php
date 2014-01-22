<?php
die();
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 */

get_header(); ?>			
			<div class="<?php 
			if(!ot_get_option('custom_background_color') && ot_get_option('themeocracy_background_main_preset')=="none"): print "colored_back_alpha"; endif?> box_s_inset" style="position:relative;">
			<img class="full_image" src="<?php 
			if(ot_get_option('themeocracy_background_main_preset') && ot_get_option('themeocracy_background_main_preset') != 'none'){
				print ot_get_option('themeocracy_background_main_preset');
			}
			else if(ot_get_option('custom_background_image')){
				print ot_get_option('custom_background_image');
			}
			else{
				print get_template_directory_uri() . "/images/mountain_back2.png";
			}
				 ?>">
				<div class="container">
					<div id="main_slider">
						<div class="slider_half l_o_d p50" style="padding-left:0;">
							<h1 class="slanted">Powerful Wordpress Themes</h1>
							<p>
	These themes have been designed to give you the most amout of power without having to do very much to customize. You will be able to create anything you want.
							</p>
							<h1 class="slanted">Powerful Wordpress Themes</h1>
							<p>
	These themes have been designed to give you the most amout of power without having to do very much to customize. You will be able to create anything you want.
							</p>
							<div class="my_btn colored_back_grad f-right">See More</div><div style="margin-right:20px;" class="my_btn colored_back_grad f-right">Purchase this theme</div>
						</div>
						<div class="slider_half">
							<img src="<?php print get_template_directory_uri() . "/images/themeocracy_screenshot.png" ?>" style="position:absolute;">
						</div>
					</div>
				</div>
			</div>
			<div class="p100 box_s">
				<div class="container">
					<div class="sub_section">
						<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>

		<?php endif ?>
					</div>
					<div class="sub_section">
						<div class="one_forth">
							<div class="block_header">
								<h2>Responsive Design</h2>
							</div>
							<div class="block_body">
								Nullam et enim risus, et dapibus est. Cras venenatis lectus nec sapien pretium eleifend. In vel elit sit amet odio mollis lacinia rutrum at nisi. In a varius nisi. Sed turpis nulla, auctor et accumsan 
							</div>
						</div>
						<div class="one_forth">
							<div class="block_header">
								<h2>Awesome Sliders</h2>
							</div>
							<div class="block_body">
								Nullam et enim risus, et dapibus est. Cras venenatis lectus nec sapien pretium eleifend. In vel elit sit amet odio mollis lacinia rutrum at nisi. In a varius nisi. Sed turpis nulla, auctor et accumsan 
							</div>
						</div>
						<div class="one_forth">
							<div class="block_header">
								<h2>Unlimited Colors</h2>
							</div>
							<div class="block_body">
								Nullam et enim risus, et dapibus est. Cras venenatis lectus nec sapien pretium eleifend. In vel elit sit amet odio mollis lacinia rutrum at nisi. In a varius nisi. Sed turpis nulla, auctor et accumsan 
							</div>
						</div>
						<div class="one_forth">
							<div class="block_header">
								<h2>Tons of Options</h2>
							</div>
							<div class="block_body">
								Nullam et enim risus, et dapibus est. Cras venenatis lectus nec sapien pretium eleifend. In vel elit sit amet odio mollis lacinia rutrum at nisi. In a varius nisi. Sed turpis nulla, auctor et accumsan 
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="light_grey_back p100">
				<div class="container">	
					<div class="sub_section">
						<div class="one_half">
							<div class="block_header">
								<h2>Responsive Design</h2>
							</div>
							<div class="block_body">
								Nullam et enim risus, et dapibus est. Cras venenatis lectus nec sapien pretium eleifend. In vel elit sit amet odio mollis lacinia rutrum at nisi. In a varius nisi. Sed turpis nulla, auctor et accumsan urpis nulla, auctor et accumsan
							</div>
						</div>
						<div class="one_half">
							<div class="block_header">
								<h2>Awesome Sliders</h2>
							</div>
							<div class="block_body">
								Nullam et enim risus, et dapibus est. Cras venenatis lectus nec sapien pretium eleifend. In vel elit sit amet odio mollis lacinia rutrum at nisi. In a varius nisi. Sed turpis nulla, auctor et accumsan 
							</div>
						</div>
						
					</div>		
					<div class="sub_section">
						<div class="one_whole">
							<div class="block_header">
									<h2>Awesome Sliders</h2>
							</div>
							<div class="block_body">
								In rutrum nulla a elit imperdiet convallis. Praesent eros mauris, volutpat vitae elementum quis, eleifend id nibh. Duis ullamcorper odio tincidunt dolor bibendum ut sodales magna viverra. Pellentesque purus mi, tincidunt ornare hendrerit at, gravida ultricies libero. Pellentesque consequat venenatis semper. Donec elementum lacinia magna a malesuada. Aenean sem neque, euismod ac mattis quis, condimentum at orci. 
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php get_footer(); ?>
		</div>
	</div>

</body>
</html>
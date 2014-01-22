<?php


include 'lib/classes/My_Widget.php';

add_action('widgets_init',
     create_function('', 'return register_widget("My_Widget");')
);

function section_func( $atts, $content ) {
	extract( shortcode_atts( array(
		'size' => 'something',
		'color' => 'something else',
		'class' => 'something else',
		'id' => 'something else',
	), $atts ) );

	
$string = "<div class='sub_section'>" . do_shortcode($content) .  "</div>";
return $string;
}
function one_forth_func( $atts, $content ) {
	extract( shortcode_atts( array(
		'size' => 'something',
		'color' => 'something else',
		'class' => 'something else',
		'id' => 'something else',
	), $atts ) );

	
$string = "<div class='one_forth'>" . do_shortcode($content) .  "</div>";
return $string;
}
function one_third_func( $atts, $content ) {
	extract( shortcode_atts( array(
		'size' => 'something',
		'color' => 'something else',
		'class' => 'something else',
		'id' => 'something else',
	), $atts ) );

	
$string = "<div class='one_third'>" . do_shortcode($content) .  "</div>";
return $string;
}
function two_thirds_func( $atts, $content ) {
	extract( shortcode_atts( array(
		'size' => 'something',
		'color' => 'something else',
		'class' => 'something else',
		'id' => 'something else',
	), $atts ) );

	
$string = "<div class='two-thirds'>" . do_shortcode($content) .  "</div>";
return $string;
}
function one_half_func( $atts, $content ) {
	extract( shortcode_atts( array(
		'size' => 'something',
		'color' => 'something else',
		'class' => 'something else',
		'id' => 'something else',		
	), $atts ) );
		
$string = "<div class='one_half'>" . do_shortcode($content) .  "</div>";
return $string;

}
function one_whole_func( $atts, $content ) {
	extract( shortcode_atts( array(
		'size' => 'something',
		'color' => 'something else',
		'class' => 'something else',
		'id' => 'something else',
	), $atts ) );


$string = "<div class='one_whole'>" . do_shortcode($content) .  "</div>";
return $string;
}
function button_func( $atts, $content ) {
	extract( shortcode_atts( array(
		'size' => 'small',
		'class' => null,
		'id' => null,
		'color_top' => null,
		'color_bottom' => null,
		'color' => null,
		'image'=>null,
		'float' => 'left',
		'gradient' => 'true'
	), $atts ) );

$size = preg_replace("/[^A-Za-z0-9 ]/", '', $size);
$class = preg_replace("/[^A-Za-z0-9\-\_]/", '', $class);
$id = preg_replace("/[^A-Za-z0-9 ]/", '', $id);	
$color = preg_replace("/[^A-Za-z0-9\#\(\)\,\.\-]/", '', $color);
$float = preg_replace("/[^A-Za-z0-9\#\(\)\,\.\-]/", '', $float);
$image_css = null;
$background_css = null;


if($color && $gradient==="true"){
	$color_bottom = colourBrightness($color,'-0.7');
	$color_top = $color;		
}
if($color_top && $color_bottom){
	$image_css = "background-image: linear-gradient(bottom, $color_bottom 0%, $color_top 100%); background-image: -o-linear-gradient(bottom, $color_bottom 0%, $color_top 100%); background-image: -moz-linear-gradient(bottom, $color_bottom 0%, $color_top 100%);
	background-image: -webkit-linear-gradient(bottom, $color_bottom 0%, $color_top 100%); background-image: -ms-linear-gradient(bottom, $color_bottom 0%, $color_top 100%); 
	background-image: -webkit-gradient(
		linear,
		left bottom,
		left top,
		color-stop(0, $color_bottom),
		color-stop(1, $color_top)
	);";
}
else if($color){
	$background_css = "background-color:$color;";
}

if($image){
	$image_css = "background-image:url('$image');";
}
$class_string = "my_btn";
if(!$background_css && !$image_css){
	$class_string .= " custom_back_color";
}
if($class){
	$class_string .=	" $class";
}
if($size){
	$class_string .=	" btn_$size";
}
if($float!=='false' && $float!=='none'){
	if($float === 'left'){
		$class_string .=	" f-left";
	}
	else{
		$class_string .=	" f-right";
	}
}

$string = "<div class='$class_string' style='$background_css$image_css'>" . $content .  "</div>";
return $string;
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if(is_single() && $item->title == "test"){ //Notice you can change the conditional from is_single() and $item->title
             $classes[] = "special-class";
     }
     return $classes;
}
add_shortcode( 'one_forth', 'one_forth_func' );
add_shortcode( 'one_third', 'one_third_func' );
add_shortcode( 'two_thirds', 'two_thirds_func' );
add_shortcode( 'one_half', 'one_half_func' );
add_shortcode( 'one_whole', 'one_whole_func' );
add_shortcode( 'button', 'button_func' );
add_shortcode( 'section', 'section_func' );
$args = array();
$args['theme_color'] = '0d6d85';
$args['container_width'] = ot_get_option('themeocracy_container_width');
$args_string = '?css=' . urlencode( serialize( $args ) );
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name' => 'Home right sidebar',
		'id' => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );
?>
<html <?php language_attributes(); ?>>
	<head>
	<title>Themeocracy</title>
	<!--<link type="text/css" href="<?php print get_template_directory_uri(); ?>/style.css" rel="stylesheet" />-->
	<link type="text/css" href="<?php print get_template_directory_uri(); ?>/style.php<?php print $args_string; ?>" rel="stylesheet" />
	<link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,800|Open+Sans:600italic,400,800|Raleway:400,800' rel='stylesheet' type='text/css'>
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<script>
/*
$(document).ready(function(){
    $('#top_logo').hide();
$('html').hide();
    setTimeout(function(){


$('.one_forth').fadeIn(1000);
$('.one_half').fadeIn(1000);
$('#top_logo').fadeIn(1000);
$('html').fadeIn(1000);
$('html').css('-webkit-transition-duration','5s');

},100);
var deg = 0;
setInterval(function(){

deg = deg+10;
//$('html').css('-webkit-filter','hue-rotate('+deg+'deg)');

},1000);
});0
*/
</script>
	</head>
	<body>
		<div class="main_header">
			<div class="container">
				<div id="top_header">
					<div id="top_logo">		
					<a href="/"><img src="<?php ot_get_option('custom_logo')? print ot_get_option('custom_logo') : print get_template_directory_uri() . "/images/themeocracy_logo.png"; ?>"></a>		
					</div>
					<div id="top_navigation" class="f-right">
						<ul>
							
							<?php
							wp_nav_menu();
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="main_body">
		
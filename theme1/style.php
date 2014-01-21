<?php
include('style_functions.php');
header('Content-type: text/css');
if( array_key_exists( 'css', $_GET ) ){
extract( unserialize( urldecode( $_GET['css'] ) ) );
}

$theme_color_9 = colourBrightness($theme_color,'0.2');
$theme_color_8 = colourBrightness($theme_color,'0.4');
$theme_color_7 = colourBrightness($theme_color,'0.6');
$theme_color_6 = colourBrightness($theme_color,'0.8');
$theme_color_5 = colourBrightness($theme_color,'1');
$theme_color_4 = colourBrightness($theme_color,'-0.8');
$theme_color_3 = colourBrightness($theme_color,'-0.6');
$theme_color_2 = colourBrightness($theme_color,'-0.4');
$theme_color_1 = colourBrightness($theme_color,'-0.2');


?>

.my_btn.btn_large{
font-size:22px;
}
.my_btn.btn_extra_large{
font-size:45px;
}

a {
  text-decoration: none;
}
.custom_back_color{
  background-color:#<?php print $theme_color_5;?>;
  color:white;
}
html,
body,
div,
span,
applet,
object,
iframe,
h1,
h2,
h3,
h4,
h5,
h6,
p,
blockquote,
pre,
a,
abbr,
acronym,
address,
big,
cite,
code,
del,
dfn,
em,
img,
ins,
kbd,
q,
s,
samp,
small,
strike,
strong,
sub,
sup,
tt,
var,
b,
u,
i,
center,
dl,
dt,
dd,
ol,
ul,
li,
fieldset,
form,
label,
legend,
table,
caption,
tbody,
tfoot,
thead,
tr,
th,
td,
article,
aside,
canvas,
details,
embed,
figure,
figcaption,
footer,
header,
hgroup,
menu,
nav,
output,
ruby,
section,
summary,
time,
mark,
audio,
video {
  margin: 0;
  padding: 0;
  border: 0;
  vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
menu,
nav,
section {
  display: block;
}
body {
  line-height: 1;
  font-family: 'Raleway', sans-serif;
}

ol,
ul {
  list-style: none;
}
blockquote,
q {
  quotes: none;
}
blockquote:before,
blockquote:after,
q:before,
q:after {
  content: '';
  content: none;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}
.container {
  width: <?php print $container_width; ?>;
  margin: 0 auto;
}
.headline {
  text-align: center;
  color: #fff;
  font-weight: 100;
}
#top_header {
  padding: 10px;
  position: relative;
}
#top_navigation li {
  display: inline-block;
}
#top_navigation a {
  color: #666;
  padding: 30px 25px;
  -webkit-transition-duration: 0.5s;
}
#top_navigation a:hover {
  color: #<?php print $theme_color_4; ?>
}
.f-right {
  float: right;
}
.f-left {
  float: left;
}
#top_navigation {
  position: absolute;
  bottom: 30px;
  right: 0;
}
#top_header {
  height: 130px;
}
.main_header {
  border-bottom: #bbb 1px solid;
  background: #fff;
  box-shadow: 0 2px 11px -5px rgba(0, 0, 0, 0.7);
}
.main_body {
  color: #666;
}
.colored_back {
  background: #<?php print $theme_color; ?>;
}
.colored_back_alpha {
  background: #<?php print $theme_color; ?>;
}
.slider_half {
  width: 50%;
  box-sizing: border-box;
  float: left;
}
#main_slider {
  height: auto;
  overflow:auto;
}
.box_s_inset {
  box-shadow: 0 0 40px -7px rgba(0, 0, 0, 0.7) inset;
}
.box_s {
  box-shadow: 0 0 40px -7px rgba(0, 0, 0, 0.7);
}
.l_o_d {
  color: #fefefe;
}
.p10 {
  padding: 10px;
}
.p30 {
  padding: 30px;
}
.p50 {
  padding: 50px;
}
.p100 {
  padding: 100px;
}
.slider_half {
  line-height: 170%;
}
.slider_half h1 {
  margin-bottom: 20px;
  margin-top: 30px;
}
.slider_half h1:first-child {
  margin-top: 0px;
}
.slanted {
  font-style: italic;
  font-weight: 800;
}
.my_btn {
  border-radius: 4px;
  padding: 10px;
  margin: 10px 0;
  cursor: pointer;
  font-weight: bold;
}
.colored_back_grad {
  background-image: linear-gradient(bottom, #<?php print $theme_color_4; ?> 0%, #<?php print $theme_color_5; ?> 100%);
  background-image: -o-linear-gradient(bottom, #<?php print $theme_color_4; ?> 0%, #<?php print $theme_color_5; ?> 100%);
  background-image: -moz-linear-gradient(bottom, #<?php print $theme_color_4; ?> 0%, #<?php print $theme_color_5; ?> 100%);
  background-image: -webkit-linear-gradient(bottom, #<?php print $theme_color_4; ?> 0%, #<?php print $theme_color_5; ?> 100%);
  background-image: -ms-linear-gradient(bottom, #<?php print $theme_color_4; ?> 0%, #<?php print $theme_color_5; ?> 100%);
  background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, #<?php print $theme_color_4; ?>), color-stop(1, #<?php print $theme_color_5; ?>));
  border: 1px solid #<?php print $theme_color_3; ?>;
}
.colored_back_grad:hover {
  background-image: linear-gradient(bottom, #<?php print $theme_color_3; ?> 0%, #<?php print $theme_color_4; ?> 100%);
  background-image: -o-linear-gradient(bottom, #<?php print $theme_color_3; ?> 0%, #<?php print $theme_color_4; ?> 100%);
  background-image: -moz-linear-gradient(bottom, #<?php print $theme_color_3; ?> 0%, #<?php print $theme_color_4; ?> 100%);
  background-image: -webkit-linear-gradient(bottom, #<?php print $theme_color_3; ?> 0%, #<?php print $theme_color_4; ?> 100%);
  background-image: -ms-linear-gradient(bottom, #<?php print $theme_color_3; ?> 0%, #<?php print $theme_color_4; ?> 100%);
  background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, #<?php print $theme_color_3; ?>), color-stop(1, #<?php print $theme_color_4; ?>));
}
.one_whole,
.one_forth,
.one_third,
.one_half {
  line-height: 155%;
  box-sizing: border-box;
  margin-right: 2%;
}
.one_forth,
.one_third,
.one_half {
  float: left;
}
.one_third {
  width: 32%;
}
.one_forth {
  width: 23.5%;
}
.one_forth:first-child,
.one_half:first-child,
.one_third:first-child {
  margin-left: 0;
}
.one_forth:last-child,
.one_half:last-child,
.one_third:last-child {
  margin-right: 0;
}
.one_half {
  width: 49%;
}
.block_header {
  font-size: 18px;
  margin-bottom: 20px;
}
.sub_section {
  margin-bottom: 50px;
  overflow: auto;
}
.sub_section:last-child {
  margin-bottom: 0;
}
.dark_back {
  background: #222;
}
.light_grey_back {
  background: #ddd;
}
.full_image {
  max-width: 100%;
  min-width: 100%;
  max-height: 100%;
  min-height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
}
footer{
color:#bbb;
}

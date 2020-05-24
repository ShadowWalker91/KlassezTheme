<?php
/**
 * Template Name: Klassez Authentication Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage klasseztheme
 * @since klasseztheme 1.0
 */

	global $post, $current_user;
	get_header();
	//the_post();
	$re_url = '';
	if( isset($_GET['ae_redirect_url']) ){
		$re_url = $_GET['ae_redirect_url'];
	}
?>
<div class="row">
  <div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-4">
			<h3 class="text-left">
			Klassez SignUp
			</h3>
			<p>
				Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
			</p>
			<div class="non-login">
					<a href="#" class="register register-btn btn btn-primary"><?php _e("SIGN UP", ET_DOMAIN) ?></a>
			</div>
		</div>
		<div class="col-md-4">
			<h3>
				Klassez Login
			</h3>
			<p>
				Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
			</p>
			<div class="non-login">
					<a href="#" class="login login-btn btn btn-success"><?php _e("LOGIN", ET_DOMAIN) ?></a>
		</div>
		</div>
		<div class="col-md-2">
		</div>
	</div>
<?php
	get_footer();
?>

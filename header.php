<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package autohouse
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="yandex-verification" content="594df1faac030c8e" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png">

<?php wp_head(); ?>
</head>





<body <?php body_class(); ?>>

<div class="off-canvas position-left" id="offCanvasLeft" data-off-canvas>
  <!-- Your menu or Off-canvas content goes here -->

	<!-- Close button -->
    <button class="close-button" aria-label="Close menu" type="button" data-close>
      <span aria-hidden="true">&times;</span>
    </button>

	<nav id="left-bar-menu" class="header-navigation" role="navigation">
		<?php wp_nav_menu(); ?>
	</nav>

</div>

<div id="page"  class="off-canvas-content"  data-off-canvas-content>
	<header id="masthead" class="header" role="banner">
		<div class="row  header-content">
			<div class="small-3  medium-4  columns  header__logo">
				<a class="hide-for-small-only" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo-mini.png" title="autohouse - Иваново" alt="autohouse - Иваново" />
				</a>

				<button class="menu-icon  show-for-small-only" type="button" data-open="offCanvasLeft"></button>

			</div>
					
			<div class="small-6  medium-4  columns  text-center  phone">
				<div>
					<i class="fa  fa-phone" aria-hidden="true"></i>
					<a href="tel:+74932454813">8 (4932) 45-48-13</a> 
				</div>
				<br/>
				<div>
					<i class="fa  fa-phone" aria-hidden="true"></i>
					<a href="tel:+74932342370">8 (4932) 342-370</a> 
				</div>
			</div>

			<div class="small-3  medium-4  columns  header__contacts  text-right">

				<p class="hide-for-small-only">г.Иваново ул.Станкостроителей 10а</p>

				<a class="button  popup" href="#form_call">
					<i class="fa  fa-phone" aria-hidden="true"></i>
					<span class="hide-for-small-only  hide-for-medium-only">Перезвоните мне!</span>
				</a>
				
				<!--<button type="button" class="button">
					<i class="fa  fa-phone" aria-hidden="true"></i>
					<span class="hide-for-small-only  hide-for-medium-only">Перезвоните мне!</span>
				</button>-->
			</div>
		</div>
		
		<div class="hide">
			<form id="form_call" class="callback-form  text-center">
				<p>У меня появились вопросы, пожалуйста, перезвоните мне</p>
				<input type="text" name="phone" placeholder="Ваш номер телефона" required="required"/ />
				<button class="button" type="submit">Перезвоните мне!</button>
			</form>
		</div>


		<!--<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'autohouse' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav>-->
		<!-- #site-navigation -->


	</header><!-- #masthead -->

	<div class="top-menu">
		<div class="row">
			<nav class="hide-for-small-only" id="site-navigation" role="navigation">
				<?php wp_nav_menu( array(
					'items_wrap'      => '<div class="menu-centered"><ul id="%1$s" class="%2$s">%3$s</ul></div>'
				)); ?>
			</nav>
		</div>
	</div>
	<!-- #site-navigation -->





	<div id="content" class="content">

<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package autohouse
 */

?>

<div class="line-separator"></div>
<div class="inform-block inform-block--other-page">
	<div class="row">
		<div class="inform-block__text  small-12  large-6  columns  text-center  large-text-left">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<a class="button  popup" href="#form_call">
				Заказать обратный звонок
			</a>

		</div>
		<div class="inform-block-thumbnail  small-12  large-6  columns  text-center  large-text-right">
			<!--<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" />-->
			<?php 
				// if ( has_post_thumbnail() ) {
				// 	the_post_thumbnail();
				// }
				// else {
				// 	echo '<img src="' . get_template_directory_uri() 
				// 		. '/images/logo.png" />';
				// }
			?>
		</div>
	</div>
</div>

<div class="row  breadcrumb">
	<div class="columns">
		<?php get_breadcrumb(); ?>
	</div>
</div>

<div class="row  other-page">
	<div class="columns">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="entry-header">
				<?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</div><!-- .entry-header -->

			<div class="entry-content">
				<?php
					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'autohouse' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->

		</article><!-- #post-## -->
	</div>
</div>


<div class="backcall-block  text-center">
	<div class="row">
		<div class="columns  backcall-content">
			<div class="backcall-content__title">Только в <span>Autohouse</span> - автосервис, автомойка, шиномонтаж, молярка, тонировка-винил, рестайлинг салона и много другое... </div>
			<i class="fa  fa-long-arrow-down" aria-hidden="true"></i>
			<br>
			<a class="button  popup" href="#form_call">
				Заказать обратный звонок
			</a>
		</div>
	</div>
</div>
<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package autohouse
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="main-navigation">
		<div class="row">
			<div class="columns  small-6  large-4  text-center">
				<a class="button" href="/service/" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/images/service.png" />
				</a>
				<p>СЕРВИС</p>
			</div>
			<div class="columns  small-6  large-4  text-center">
				<a class="button" href="/carwash/" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/images/autowash.png" />
				</a>
				<p>АВТО-МОЙКА</p>			
			</div>
			<div class="columns  small-6  large-4  text-center">
				<a class="button" href="/mounting/" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/images/shinomontaj.png" />
				</a>
				<p>ШИНОМОНТАЖ</p>	
			</div>
			<div class="columns  small-6  large-4  text-center">
				<a class="button" href="/painting/" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/images/molyrka.png" />
				</a>
				<p>ПОКРАСОЧНЫЙ ЦЕХ</p>
			</div>
			<div class="columns  small-6  large-4  text-center">
				<a class="button" href="/toning-autovinil/" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/images/autovinil.png" />
				</a>
				<p>ТОНИРОВКА-АВТОВИНИЛ</p>				
			</div>
			<div class="columns  small-6  large-4  text-center">
				<a class="button" href="/restyling/" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/images/restyle.png" />
				</a>
				<p>РЕСТАЙЛИНГ САЛОНА</p>			
			</div>
		</div>

	</div>












	<!--<div class="line-separator"></div>
	<div class="washing-form text-center">
		<span class="washing-form__title">Запишитесь на мойку</span>
		<form id="form_wash">
			<input class="phone" type="text" name="phone" required="required" value="" placeholder="Ваш телефон">
			<button class="button" type="submit">Помыть машину</button>
		</form>
		<span class="washing-form__text">или позвоните по телефону<br><span>(4932) 342-370</span>
		<hr>
		<p class="washing-form__confidence">Ваши данные не будут переданы 3-м лицам</p>
	</div>
	<div class="line-separator"></div>	-->


	<!-- MS:контент из админки -->
	<!--<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'autohouse' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'autohouse' ),
				'after'  => '</div>',
			) );
		?>
	</div>-->
	<!-- .entry-content -->

</article><!-- #post-## -->

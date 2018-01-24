<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package autohouse
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="row">
			<div class="columns  small-12  text-center">
				<div class="social-links">
					<a href="https://vk.com/autohouse37" alt="autohouse ВКонтакте" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a>
					<!-- <a href="" alt="autohouse в однокласниках" target="_blank"><i class="fa fa-odnoklassniki-square" aria-hidden="true"></i></a> -->
					<a href="https://www.instagram.com/autohouse37/" alt="autohouse в инстаграмме" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<!-- <a href="" alt="autohouse google plus" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a> -->
					<!-- <a href="" alt="autohouse Whatsapp" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> -->
					<!-- <a href="" alt="autohouse в Skype" target="_blank"><i class="fa fa-skype" aria-hidden="true"></i></a> -->
				</div>
			</div>
		</div>

		<div class="row  bot-menu">
			<?php wp_nav_menu( array(
				'items_wrap'      => '<div class="menu-centered"><ul id="%1$s" class="%2$s">%3$s</ul></div>'
			)); ?>
		</div>

		<div class="row  footer-conacts">
			<div class="columns  small-12  medium-6  text-center  medium-text-left">

					<div class="adress">
						<p>г.Иваново ул.Станкостроителей 10а</p>
					</div>
			</div>
			<div class="phone  columns  small-12  medium-6  text-center  medium-text-right">
				<div>
					<i class="fa  fa-phone" aria-hidden="true"></i>
					<a href="tel:+74932454813">8 (4932) 45-48-13</a> 
				</div>
				<div>
					<i class="fa  fa-phone" aria-hidden="true"></i>
					<a href="tel:+74932342370">8 (4932) 342-370</a> 
				</div>
			</div>
			
		</div>

		<div class="row  text-center">
			<p>© 2016-2017 autohouse.su</p>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
	$(document).foundation();
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter45509052 = new Ya.Metrika({
                    id:45509052,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/45509052" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html>

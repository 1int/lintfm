<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sanse
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	
		<?php get_sidebar( 'footer' ); // Loads the sidebar-footer.php template. ?>
	
		<div class="site-info">
			
			<?php
				get_template_part( 'menus/menu', 'social' ); // Loads the menus/menu-social.php template.
			?>

            <!--&copy;lint.fm, 2018 <span class="sep"> | </span> Вы можете <a href="#">написать мне</a> или <a href="#">подарить чашечку кофе</a>-->

            <p class="footer-text">Если вам что-то понравилось, вы можете <a href="#">подписаться на обновления</a>, <a href="#">написать мне письмо</a> или <a href="#">поддержать небольшой суммой</a>.</p>
            <p class="footer-text">Если вам что-то не понравилось, вымещайте  агрессию на жене и домашних животных.</p>
            <p class="footer-copyright">&copy;lint.fm, 2018</p>


		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

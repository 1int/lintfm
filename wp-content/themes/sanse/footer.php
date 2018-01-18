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
            <!--<a href="/feedback/" target="_blank">написать мне письмо</a> или-->

            <p class="footer-text">Если вам что-то понравилось, вы можете
            <a href="javascript: void(0)" id="btn-subscribe">подписаться на обновления</a>,
            <a href="<?php bloginfo('rss_url')?>" target="_blank">на RSS</a> или
            <a href="javascript: void(0)" id="donate">поддержать меня небольшой суммой</a>.</p>
            <p class="footer-text">Если вам что-то не понравилось, вымещайте  агрессию на жене и домашних животных.</p>
            <p class="footer-copyright">&copy;lint.fm, 2018</p>


		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->


<div id="yandex-popover" style="width: 468px; height: 161px; display: none">
    <iframe frameborder="0" allowtransparency="true" scrolling="no" src="https://money.yandex.ru/embed/donate.xml?account=410011330419306&quickpay=donate&payment-type-choice=on&mobile-payment-type-choice=on&default-sum=500&targets=lint.fm%20donate&project-name=lint.fm&project-site=lint.fm&button-text=01&comment=on&hint=%D0%91%D1%8B%D0%BB%D0%BE+%D0%B1%D1%8B+%D0%B7%D0%B4%D0%BE%D1%80%D0%BE%D0%B2%D0%BE%2C+%D0%B5%D1%81%D0%BB%D0%B8+%D0%B1%D1%8B+%D0%B2%D1%8B+%D0%BA%D0%B0%D0%BA-%D0%BD%D0%B8%D0%B1%D1%83%D0%B4%D1%8C+%D0%BF%D0%BE%D1%8F%D1%81%D0%BD%D0%B8%D0%BB%D0%B8+%D1%81%D0%B2%D0%BE%D1%91+%D1%81%D1%82%D1%80%D0%B0%D0%BD%D0%BD%D0%BE%D0%B5+%D1%80%D0%B5%D1%88%D0%B5%D0%BD%D0%B8%D0%B5&successURL=" width="468" height="161"></iframe>
</div>

<style>
    #onesignal-bell-launcher {
        visibility: hidden !important;
    }
</style>

<script type="text/javascript">
    var popper = null;
    document.getElementById('donate').addEventListener('click', function(){
        var e = document.getElementById('yandex-popover');
        if( popper != null ) {
            popper.destroy();
            popper = null;
            e.style.display = 'none';
        }
        else {
            e.style.display = 'block';
            popper = new Popper(this, e, {placement: 'top'});
        }
    });

    document.getElementById('btn-subscribe').addEventListener('click', function() {
        jQuery('.onesignal-bell-launcher-button').click();
    });
</script>


<?php wp_footer(); ?>

</body>
</html>

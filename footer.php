


</div><!-- end of content-wrapper -->

<footer>
	<div class="widget">
 <h3>Footer</h3>
 <ul>
 <li>Contenido de prueba</li>
 <li>Contenido de prueba</li>
 <li>Contenido de prueba</li>
 <li>Contenido de prueba</li>
 <li>Contenido de prueba</li>
 </ul>
 </div>
 <?php
 if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Widget Footer') ) : endif;
 ?>
 <ul class="social">
 <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/skype.png" /></a></li>
 <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/facebook.png" /></a></li>
 <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/twitter.png" /></a></li>
 <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/rss.png" /></a></li>
 </ul>

	<?php wp_nav_menu( 
		array(
		'container'		=> false,
		'items_wrap' 	=> '<ul id="menuFooter">%3$s<li class="toTop"><a href="#top">Volver arriba</a></li></ul>',
		'theme_location'=> 'menu',
	)); ?>
 
</footer>


    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#nivoslider').nivoSlider();
    });
    </script>

<?php wp_footer(); ?>

</body>
</html>
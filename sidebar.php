<aside>

<?php
 if (is_home()) {
 if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Home') ) : endif;
 } elseif (is_category()) {
 if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Categoria') ) : endif;
 } elseif (is_page()) {
 if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Pagina') ) : endif;
 }
 ?>
 	
<h3>Ultimas noticias</h3>
<ul>
<?php query_posts('category_name=Blog&posts_per_page=4' );
while ( have_posts() ) : the_post(); ?>
<li><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a> <br /> Por <?php the_author(); ?></li>
<?php endwhile; wp_reset_query(); ?>
</ul>

</aside>
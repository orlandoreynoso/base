<?php get_header(); ?>

<div id="wrapper-dos">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>	
	<?php the_content(); ?>
	<?php the_time('F jS, Y') ?> | <?php the_author() ?>
<?php endwhile; else: ?>
<h2>No encontrado</h2>
<p>Lo sentimos, intente utilizar nuestro formulario de b&uacute;squedas.</p>
<?php endif; ?>
</div><!-- end of wrapper-->



<p>ok de nuevo</p>
<div id="slider">
	<div class="slider-wrapper theme-default">
        <div class="ribbon"></div>
        <div id="nivoslider" class="nivoSlider">
				<?php query_posts('category_name=slider&posts_per_page=3' ); 
				while ( have_posts() ) : the_post(); ?>
				<a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail( 'homepage-slider' );  ?></a>
				<?php endwhile; wp_reset_query(); ?>
		</div>
    </div>
</div><!-- end of nivoslider -->

<p>veamos los posts.</p>

<div class="widget">
 <h3>Busqueda</h3>
 <!-- contenido del widget seleccionado -->
 </div>

<div id="featured">
	<?php query_posts('category_name=Productos&posts_per_page=3' ); 
	while ( have_posts() ) : the_post(); ?>
	<div class="item">
		<h3><?php the_title(); ?></h3>
		<?php the_content(); ?>
	</div><!-- end of item" -->
	<?php endwhile; wp_reset_query(); ?>
	
</div><!-- end of featured -->

	<?php query_posts('category_name=Noticias&posts_per_page=2' ); 
	while ( have_posts() ) : the_post(); ?>
		<div class="news">
			<?php the_post_thumbnail( 'homepage-thumb' );  ?>
			<h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php the_excerpt(); ?>
		</div>
	<?php endwhile; wp_reset_query(); ?>

<?php get_sidebar(); get_sidebar('dos'); get_sidebar('horizontal'); ?>

<?php get_footer(); ?>
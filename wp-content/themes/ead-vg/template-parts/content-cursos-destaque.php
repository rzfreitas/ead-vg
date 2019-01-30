<div class="p-t-50">
	<?php 
	$sticky = get_option('sticky_posts');
	$args = array(
		'post_type' => 'post',
		'posts_per_page' => 4,
		'post__in' => $sticky,
	);
	$query = new WP_query ( $args );
	if ( $query->have_posts() ) { ?>

	<div class="row">
		<?php while ( $query->have_posts() ) : $query->the_post(); ?>			
			<div class="col box-curso">
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'book' ); ?>>
					<?php if ( has_post_thumbnail() ) {
					    the_post_thumbnail();
					} else { ?>
					    <div class="text-center">
					    	<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/404.png" alt="<?php the_title(); ?>" />
					    </div>					    
					<?php } ?>
					<div class="campos-curso">
						<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
						<?php $courses = get_field('fields_course');
						if( $courses ):	?>						
							<p><?php echo $courses['call_course']; ?></p>
							<a href="<?php the_permalink(); ?>"><small>Leia mais</small></a>
							<div class="preco-curso"><?php echo $courses['price_course']; ?></div>
						<?php endif; ?>
					<div class="align-btn-bot">
						<a class="btn btn-amarelo" href="<?php the_permalink(); ?>">Compre</a>
					</div>
		  		</article>
		  	</div>
	  	<?php endwhile; ?>
	  	<?php wp_reset_postdata(); ?>  
		<?php } ?>
	</div>
	<div class="p-t-50 text-center">
		<a class="btn btn-laranja" href="">Veja mais cursos</a>
	</div>
</div>
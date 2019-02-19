<?php /* Template Name: Home */
get_header(); ?>

<section>
	<div class="container p-t-50">
		<?php if( have_rows('slide_banner') ): ?>
			<ul class="banner-home">
			<?php while( have_rows('slide_banner') ): the_row(); 
				// vars
				$title = get_sub_field('titulo');
				$image = get_sub_field('img_banner');
				$content = get_sub_field('text_banner');
				$link = get_sub_field('link_btn'); ?>

				<li class="slide">
					<div class="dp-flex">
						<div class="w-60 p-l-70">
							<h1><?php echo $title; ?></h1>
							<p><?php echo $content; ?></p>
							<a class="btn btn-azul" href="<?php echo $link; ?>">Comece já!</a>
						</div>
						<div class="w-40 p-s-15 img-slide">
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
						</div>
					</div>
				</li>
			<?php endwhile; ?>
			</ul>
		<?php endif; ?>
	</div>
</section>

<section>
	<div class="container p-t-50 p-b-50">
		<h2 class="float-border">MAIS VENDIDOS</h2>
		<?php get_template_part('template-parts/content' , 'cursos-destaque') ?>
	</div>
</section>

<section>
	<div class="container p-t-50 p-b-50">
		<h2 class="float-border">OUTROS CURSOS</h2>
		<?php get_template_part('template-parts/content' , 'cursos') ?>
	</div>
</section>

<section>
<div class="bg-plano">
	<div class="container">
		<div class="box-w-round-b">
			<div class="row">
				<?php $bloco_1 = get_field('bloco_1');
				if( $bloco_1 ): ?>		
				<div class="col">
					<h2 class="uppercase"><?php echo $bloco_1['titulo_1']; ?></h2>
					<p><?php echo $bloco_1['conteudo_1']; ?></p>						
				</div>			
				<div class="col">
					
				</div>
				<?php endif; ?>
			</div>
			<div class="p-t-50">
				<?php 
				$images = get_field('imgs_funcs');
				$size = 'full'; // (thumbnail, medium, large, full or custom size)
				if( $images ): ?>
				    <ul class="funcs">
				        <?php foreach( $images as $image ): ?>
				            <li>
				            	<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
				            </li>
				        <?php endforeach; ?>
				    </ul>
				<?php endif; ?>
			</div>
		</div>	
	</div>
	<div class="container m-t-50">
		<?php $bloco_2 = get_field('bloco_2');

		if( $bloco_2 ): ?>
			<div class="row box-w-round-t">			
				<div class="col">
					<h2 class="uppercase"><?php echo $bloco_2['titulo_2']; ?></h2>
					<?php echo $bloco_2['conteudo_2']; ?>
				</div>
				<div class="col">
					
				</div>
			</div>
		<?php endif; ?>
	</div>
</div>
</section>

<section>
	<div class="bg-azul">
		<div class="container p-t-100 p-b-100">
			<?php $bloco_3 = get_field('bloco_3');

			if( $bloco_3 ): ?>
				<div class="row">			
					<div class="col">
						<img src="<?php echo $bloco_3['img_app']['url']; ?>" alt="<?php echo $bloco_3['img_app']['alt']; ?>" />
					</div>
					<div class="col">
						<h2 class="uppercase p-t-25"><?php echo $bloco_3['titulo_3']; ?></h2>
						<?php echo $bloco_3['conteudo_3']; ?>
					</div>
				</div>			
				<div class="text-center">
					<a id="leiaMais" class="btn btn-branco">Veja passo a passo</a>
				</div>
				<div class="text-hide p-t-50">
					<?php echo $bloco_3['conteudo_3-4']; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>

<section>
<div class="bg-plano p-b-100">
	<div class="container">
		<?php $bloco_4 = get_field('bloco_4');

		if( $bloco_4 ): ?>
			<div class="row box-w-round-b">			
				<div class="col">
					<h2 class="uppercase"><?php echo $bloco_4['titulo_4']; ?></h2>
					<p><?php echo $bloco_4['conteudo_4']; ?></p>
				</div>
				<div class="col">
					<div class="box-combo">
						<h2 class="uppercase"><?php echo $bloco_4['titulo_5']; ?></h2>
						<p><?php echo $bloco_4['conteudo_5']; ?></p>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</div>
</div>
</section>

<section>
<div class="container p-t-100 p-b-100 faq text-center">
	<h2>FAQ</h2>
	<?php if( have_rows('faq') ): ?>
		<ul class="faq-list p-t-50">
	    <?php while ( have_rows('faq') ) : the_row(); ?>
	    	<li>
	    		<div class="click-faq d-flex">
	    			<h3 class="w-90"><?php the_sub_field('pergunta'); ?></h3>	    		
	    			<i class="fas fa-chevron-circle-down w-10"></i>
	    		</div>
	    		<div class="d-none">
	    			<p><?php the_sub_field('resposta'); ?></p>
	    		</div>
	    	</li>
		<?php  endwhile; ?>
		</ul>
	<?php endif; ?>
</div>
</section>

<?php get_footer(); ?>
<?php /* Template Name: Curso */
get_header(); ?>

<section>
<div class="banner">
	<?php $image = get_field('img_banner');
	if( !empty($image) ): ?>
		<div id="img-banner" style="background: url(<?php echo $image['url']; ?>) no-repeat center center fixed;    
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		height:80vh">
		<div class="container v-center f-branca">
			<div class="row">
		  		<div class="col-12 col-md-4">
		  			<div class="box-orange">
		  				<h1><strong><?php the_title(); ?></strong></h1>
		  			</div>
		   		</div>
		   		<div class="col-md-1"></div>
		   		<div class="col-12 col-md-7">
		   			<p class="p-t-25 p-b-25"><?php the_field('ban_text'); ?></p>
		   			<div class="text-center">
		   				<a class="btn btn-lg btn-amarelo" href="">Eu quero!</a>
		   			</div>
		   		</div>
	   		</div>
		</div>	
	<?php endif; ?>
</div>
</section>

<section>
	<div class="container p-t-50 p-b-50">
		<div class="row">
			<div class="col">
				<p>SAIBA o qUE AS EMPRESAS PRECISAM FAZER PARA FORNECER ÁGUA POTÁVEL COM SEGURANÇA E QUALIDADE PARA SEUS COLABORADORES.</p>
				<p><strong>VEJA O VÍDEO!</strong></p>
				<div class="box-gray dp-flex">
					<div><p>faça a primeira aula GRÁTIS</p></div>
					<div>
						<a class="btn btn-amarelo" href="">Clique AQUI</a>
					</div>
				</div>
			</div>
			<div class="col">
				
			</div>
		</div>
	</div>
</section>

<section>
	<div class="bg-azul">
		<div class="container">
			<div class="row">
				<div class="col-md-8 no-p p-t-50 p-b-50">
					<div class="box-white">
						<?php the_field('text_left'); ?>
					</div>
				</div>
				<div class="col-md-4 no-p">
					<div class="box-orange box-floating">
						<?php if( have_rows('list_content') ): ?>
						   <ul class="list-pa">
						   <?php while ( have_rows('list_content') ) : the_row();
								$image = get_sub_field('icon_content');
								$content = get_sub_field('desc_content'); ?>

								<li class="dp-flex align-mid">
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
								    <?php echo $content; ?>
								</li>

						    <?php endwhile; ?>
						  	</ul>
						<?php endif; ?>
					</div>					
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="bg-yellow p-t-100 p-b-100">
		<div class="container">
			<div class="row">
				<?php $prof1 = get_field('profissional_1');
				if( $prof1 ): ?>
					<div class="col-md-4">
						<?php echo $prof1['texto_chamada_1']; ?>
					</div>
					<div class="col-md-8">
						<img src="<?php echo $prof1['image']['url']; ?>" alt="<?php echo $prof1['image']['alt']; ?>" />
						<?php echo $prof1['qualificacao_profissional']; ?>
					</div>
				<?php endif; ?>
			</div>
			<div class="p-t-50 p-b-50">
				<div class="balloon-blue">
					<div class="row align-mid">
						<div class="col-md-10">
							<?php the_field('balao_azul'); ?>
						</div>
						<div class="col-md-2">
							<a href="" class="btn btn-pink">Eu quero!</a>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container p-t-100 p-b-100">
		<div class="text-center">
			<div class="box-orange w-400 mg-center">
				<h2>O QUE VAI APRENDER COM O CURSO?</h2>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="bg-mostarda p-t-100 p-b-100">
		<div class="container">
			<div class="balloon-white">
				<h2 class="text-center">Investimento</h2>
				<div class="row">
					<div class="col-md-3 text-center">
						 <div class="pill-blue">
						 	<span><?php the_field('preco_do_curso'); ?></span>
						 </div>
					</div>
					<div class="col-md-9">
						 <p>Pagamento em ambiente seguro PAGSEGURO <br>
							*Pagamento pelo Pagseguro, através de cartão de crédito ou boleto bancário <br>
							* Opções de parcelamento pelo Pagseguro em até 10 vezes </p>
					</div>
				</div>
				<div class="text-center">
					<a href="" class="btn btn-pink">Eu quero!</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
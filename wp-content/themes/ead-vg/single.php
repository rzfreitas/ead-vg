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
		  				<h1 class="text-center"><strong><?php the_title(); ?></strong></h1>
		  				<?php $qnts = get_field('qnt_c_curso'); 
		  				if( $qnts ): ?>
		  				<div class="list-qnts">
		  					<div><i class="fas fa-video"></i><?php echo $qnts['videos']; ?> vídeos </div>
		  					<div><i class="far fa-edit"></i><?php echo $qnts['provas']; ?> provas </div>
		  					<div><i class="far fa-newspaper"></i><?php echo $qnts['textos']; ?> textos </div>
		  					<div><i class="far fa-clock"></i><?php echo $qnts['horas']; ?> horas </div>
		  				</div>
		  				<?php endif; ?>
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
			<?php $t_v_utube = get_field('t_v_utube'); 
		  	if( $t_v_utube ): ?>
			<div class="col">				
				<p><?php echo $t_v_utube['tx_t_v_utube']; ?></p>
				<div class="box-gray align-mid dp-flex">
					<div><p>Faça a primeira <br> aula GRÁTIS</p></div>
					<div class="p-l-15">
						<a class="btn btn-amarelo" href="<?php echo $t_v_utube['btn_t_v_utube']; ?>">Clique AQUI</a>
					</div>
				</div>
			</div>
			<div class="col">
				<?php echo $t_v_utube['lk_t_v_utube']; ?>
			</div>
			<?php endif; ?>
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
					<div class="col-md-5">
						<?php echo $prof1['texto_chamada_1']; ?>
					</div>
					<div class="col-md-7">
						<img class="img-prof" src="<?php echo $prof1['foto_profissional']['url']; ?>" alt="<?php echo $prof1['foto_profissional']['alt']; ?>" />
						<div class="balloon-prof">
							<span><?php echo $prof1['qualificacao_profissional']; ?></span>
						</div>				
					</div>
				<?php endif; ?>
			</div>
			<div class="row p-t-50">
				<?php $prof2 = get_field('profissional_2');
				if( $prof2 ): ?>
					<div class="col-md-7">
						<img class="img-prof" src="<?php echo $prof2['foto_profissional_2']['url']; ?>" alt="<?php echo $prof2['foto_profissional_2']['alt']; ?>" />
						<div class="balloon-prof">
							<span><?php echo $prof2['qualificacao_profissional_2']; ?></span>
						</div>						
					</div>
					<div class="col-md-5">
						<?php echo $prof2['texto_chamada_2']; ?>			
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
		<div class="p-t-50">
			<p><?php the_field('aprendizado_curso'); ?></p>
		</div>
		<div class="p-t-50">
			<div class="square-black">
				<div class="row dp-flex align-mid">
					<div class="col-md-3">
						<div class="box-orange">
							<i class="far fa-file-alt"></i>
						</div>
					</div>
					<div class="col-md-9">
						<h3>CONFIRA O CONTEÚDO PROGRAMÁTICO</h3>

						<p>No curso <strong>EaD Verde Ghaia – <?php the_title(); ?></strong>, o tema é abordado de forma didática, interativa e contextualizada, utilizando vários materiais didáticos e mídias, para facilitar a compreensão do aluno.</p>
						<div class="text-right">
							<a class="btn btn-azul" id="leiaMais">Ver conteúdo</a>
						</div>
					</div>
				</div>
			</div>
			<div class="text-hide p-t-50">
				<?php the_field('c_pragmatico'); ?>
			</div>
		</div>
	</div>
</section>

<section>
	<div>
		<?php if( have_rows('slides_informativos') ): ?>
			<div class="banner-info">
			<?php while( have_rows('slides_informativos') ): the_row(); 
				// vars
				$title = get_sub_field('t_slide_inf');
				$image = get_sub_field('img_inf');
				$content = get_sub_field('c_slide_inf'); ?>

				<div class="slide">
					<div class="container p-t-50 p-b-50">
						<div class="dp-flex">
							<div class="w-60">
								<h2><?php echo $title; ?></h2>
								<p><?php echo $content; ?></p>							
							</div>
							<div class="w-40">
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
							</div>
						</div>
					</div>					
				</div>
			<?php endwhile; ?>
			</div>
		<?php endif; ?>
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
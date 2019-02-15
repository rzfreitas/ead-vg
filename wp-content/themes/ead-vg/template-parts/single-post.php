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
		  		<div class="col-12 col-md-5">
		  			<h1><strong><?php the_field('title_banner'); ?></strong></h1>
		   			<p class="p-t-25 p-b-25"><?php the_field('text_banner'); ?></p>
		   			<a class="btn-blue" data-toggle="modal" data-target="#modal-lira">Fale com um consultor</a>
		   		</div>
		   		<div class="col-12 col-md-7">
		   			<h2>Atenda os requisitos legais aplicáveis à sua empresa</h2>
		   			<ul>
		   				<li><i class="fa fa-star p-r"></i>Fácil organização e visualização</li>
						<li><i class="fa fa-star p-r"></i>Reconhecido pelas certificadoras internacionais</li>
						<li><i class="fa fa-star p-r"></i>Atualização mensal</li>
		   			</ul>
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
	<div class="bg-azul p-t-50 p-b-50">
		<div class="container">
			<div class="dp-flex">
				<div class="w-60">
					
				</div>
				<div class="w-40">
					
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
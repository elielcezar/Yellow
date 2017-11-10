<?php
/**
*Template Name: Yellow
*/
?>

<?php get_header(); ?>

<!-- Page Content -->
<div class="wrapper">
	<div class="container">
		<h3 class="title-timeline">Timeline Yellow</h3>
	</div>
	<section class="timeline">
  <ol>
    <li>
      <div>
        <time>2005</time> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
      </div>
    </li>
    <li>
      <div>
        <time>2006</time> Proin quam velit, efficitur vel neque vitae, rhoncus commodo mi. Suspendisse finibus mauris et bibendum molestie. Aenean ex augue, varius et pulvinar in, pretium non nisi.
      </div>
    </li>
    <li>
      <div>
        <time>2007</time> Proin iaculis, nibh eget efficitur varius, libero tellus porta dolor, at pulvinar tortor ex eget ligula. Integer eu dapibus arcu, sit amet sollicitudin eros.
      </div>
    </li>
    <li>
      <div>
        <time>2009</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
      </div>
    </li>
    <li>
      <div>
        <time>2011</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
      </div>
    </li>
    <li>
      <div>
        <time>2014</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
      </div>
    </li>
    <li>
      <div>
        <time>2015</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
      </div>
    </li>
    <li>
      <div>
        <time>2017</time> Aenean condimentum odio a bibendum rhoncus. Ut mauris felis, volutpat eget porta faucibus, euismod quis ante.
      </div>
    </li>    
    <li></li>
  </ol>
  
  <div class="arrows">
    <button class="arrow arrow__prev disabled" disabled>
      <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-left.png" alt="prev timeline arrow">
    </button>
    <button class="arrow arrow__next">
      <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-right.png" alt="prev timeline arrow">
    </button>
  </div>
</section>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js'></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/timeline.js"></script>		

    <div class="container">
        
        <div id="principal">

        
			<div class="row">
				<div class="col-sm-4">
					<h3>Salas e Equipamentos</h3>
					<a href="<?php echo get_site_url(); ?>/salas-e-equipamentos/"><img src="<?php echo get_template_directory_uri(); ?>/img/salas-equipamentos.jpg" class="img-responsive" /></a>
					<div class="info box-double">
						<p>Ambientes aconchegantes e todo o equipamento que você precisa para obter o máximo do seu potencial.</p>
						
					</div>
				</div>
				<div class="col-sm-4">
					<h3>Estúdios de Ensaio</h3>
					<a href="<?php echo get_site_url(); ?>/estudios-de-ensaio/"><img src="<?php echo get_template_directory_uri(); ?>/img/estudios-ensaio.jpg" class="img-responsive" /></a>
					<div class="info box-double">
						<p>Salas para você colocar em prática aquilo que aprendeu nas aulas e melhorar suas habilidades.</p>
						
					</div>
				</div>
				<div class="col-sm-4">
					<h3>Equipe</h3>
					<a href="<?php echo get_site_url(); ?>/equipe"><img src="<?php echo get_template_directory_uri(); ?>/img/equipe2.jpg" class="img-responsive" /></a>
					<div class="info box-double">
						<p>O coração da Yellow é um grupo de profissionais notáveis, apaixonados e atuantes no mercado.</p>
						<span class="saiba-mais"><a href="<?php echo get_site_url(); ?>/equipe">saiba mais</a></span>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-4">
					<h3>Café Yellow</h3>
					<a href="<?php echo get_site_url(); ?>/cafe-yellow"><img src="<?php echo get_template_directory_uri(); ?>/img/cafe.jpg" class="img-responsive" /></a>
					<div class="info box-double">
						<p>Um lugar para você relaxar entre as aulas, fazer amigos e compartilhar experiências.</p>
						
					</div>
				</div>
				<div class="col-sm-4">
					<h3>Localização</h3>
					<a href="<?php echo get_site_url(); ?>/localizacao"><img src="<?php echo get_template_directory_uri(); ?>/img/localizacao.jpg" class="img-responsive" /></a>
					<div class="info box-double">
						<p>A Yellow está em uma área de fácil acesso no centro da cidade.</p>
						<span class="saiba-mais"><a href="<?php echo get_site_url(); ?>/localizacao">saiba mais</a></span>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="info box-double">
						<p>Acreditamos no poder transformador da música.</p>
						<p>Estamos em constante movimento para trazer o melhor ensino para você.</p>
						<p>Conte com a experiência de quem já está no mercado há 13 ANOS</p>
						<img src="<?php echo get_template_directory_uri(); ?>/img/13anos.jpg" class="img-responsive" />
					</div>					
				</div>
			</div>

        </div>

    </div>
    <!-- /.container -->
</div>

<?php get_footer(); ?>


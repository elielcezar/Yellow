<?php
/**
*Template Name: Yellow
*/
?>

<?php get_header(); ?>

<!-- Page Content -->
<div class="wrapper">
	<!--div class="container">
		<h3 class="title-timeline">Timeline Yellow</h3>
	</div-->
	<!--section class="timeline">
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
</section-->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js'></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/timeline.js"></script>		

    <div class="container">
        
        <div id="principal">

        
			<div class="row">
				<div class="col-sm-4">
					<h3>Salas e Equipamentos</h3>
					<a data-fancybox data-src="#modal-salas-equipamentos" href="javascript:;"><img src="<?php echo get_template_directory_uri(); ?>/img/salas-equipamentos.jpg" class="img-responsive" /></a>
					<div class="info box-double">
						<p>Ambientes aconchegantes e todo o equipamento que você precisa para obter o máximo do seu potencial.</p>						
					</div>
				</div>

        <div id="modal-salas-equipamentos" class="info descricao-longa fancyboox" style="display: none; padding: 0; max-width: 800px;text-align: center;">
          
           <div id="carousel-salas-equipamentos" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
              <!-- galeria de salas e equipamentos -->
              <?php
                  //Get the images ids from the post_metadata
                  $images = acf_photo_gallery('imagens', 182);
                  //Check if return array has anything in it
                  if( count($images) ):
                      //Cool, we got some data so now let's loop over it
                      foreach($images as $image):
                          $id = $image['id']; // The attachment id of the media
                          $title = $image['title']; //The title
                          $caption= $image['caption']; //The caption
                          $full_image_url= $image['full_image_url']; //Full size image url
                          $full_image_url = acf_photo_gallery_resize_image($full_image_url, 700, 500); //Resized size to 262px width by 160px height image url
                          $thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
                          $url= $image['url']; //Goto any link when clicked
                          $target= $image['target']; //Open normal or new tab
                          $alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
                          $class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
              ?>

                <div class="item">
                      <?php if( !empty($url) ){ ?><a href="<?php echo $url; ?>" <?php echo ($target == 'true' )? 'target="_blank"': ''; ?>><?php } ?>
                          <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
                      <?php if( !empty($url) ){ ?></a><?php } ?>
                </div>            

              <?php endforeach; endif; ?>

               </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#carousel-salas-equipamentos" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-salas-equipamentos" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div><!-- modal-salas-equipamentos -->


				<div class="col-sm-4">
					<h3>Estúdios de Ensaio</h3>
					<a data-fancybox data-src="#modal-estudios" href="javascript:;"><img src="<?php echo get_template_directory_uri(); ?>/img/estudios-ensaio.jpg" class="img-responsive" /></a>
					<div class="info box-double">
						<p>Salas para você colocar em prática aquilo que aprendeu nas aulas e melhorar suas habilidades.</p>						
					</div>
				</div>

        <div id="modal-estudios" class="info descricao-longa fancyboox" style="display: none; padding: 0; max-width: 800px;text-align: center;">
          
           <div id="carousel-estudios" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
              <!-- galeria de salas e equipamentos -->
              <?php
                  //Get the images ids from the post_metadata
                  $images = acf_photo_gallery('imagens', 185);
                  //Check if return array has anything in it
                  if( count($images) ):
                      //Cool, we got some data so now let's loop over it
                      foreach($images as $image):
                          $id = $image['id']; // The attachment id of the media
                          $title = $image['title']; //The title
                          $caption= $image['caption']; //The caption
                          $full_image_url= $image['full_image_url']; //Full size image url
                          $full_image_url = acf_photo_gallery_resize_image($full_image_url, 700, 500); //Resized size to 262px width by 160px height image url
                          $thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
                          $url= $image['url']; //Goto any link when clicked
                          $target= $image['target']; //Open normal or new tab
                          $alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
                          $class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
              ?>

                <div class="item">
                      <?php if( !empty($url) ){ ?><a href="<?php echo $url; ?>" <?php echo ($target == 'true' )? 'target="_blank"': ''; ?>><?php } ?>
                          <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
                      <?php if( !empty($url) ){ ?></a><?php } ?>
                </div>            

              <?php endforeach; endif; ?>

               </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#carousel-estudios" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-estudios" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div><!-- modal-estudios -->


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
					<img src="<?php echo get_template_directory_uri(); ?>/img/cafe.jpg" class="img-responsive" />
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


<?php
/**
*Template Name: Cursos
*/
?>

<?php get_header(); ?>

<!-- Page Content -->
<div class="wrapper">
    <div class="container">
        
        <div id="principal">		

        	<h2>Cursos Presenciais</h2>	

			<div class="row">

				<div class="col-sm-3">
					<?php
					    $loop = new WP_Query( array( 'post_type' => 'curso', 'post__in' => array( 99 ) ) );
					    if ( $loop->have_posts() ) :
					        while ( $loop->have_posts() ) : $loop->the_post(); ?>
					            	<h3><?php the_title(); ?></h3>        
					                <div class="post-thumbnail"><a href="<?php the_permalink(); ?>" >				                	
					                	<?php the_post_thumbnail('thumb-square', array('class' =>'img-responsive')); ?>
					                </a></div>
		        					<div class="info box-double">
		        						<p><?php the_field('descricao_curta'); ?></p>
		        						<span class="saiba-mais"><a href="<?php the_permalink(); ?>">saiba mais</a></span>
		        					</div>
		        					 <?php if( get_field('inscricoes') ): ?>
								          <div class="inscricoes">
								            <a class="" href="<?php the_field('inscricoes'); ?>">Inscreva-se</a>
								          </div>
								      <?php endif; ?>
					        <?php endwhile;			        
					    endif;
					    wp_reset_postdata();
					?>
				</div>
				<div class="col-sm-3">
					<?php
					    $loop = new WP_Query( array( 'post_type' => 'curso', 'post__in' => array( 98 ) ) );
					    if ( $loop->have_posts() ) :
					        while ( $loop->have_posts() ) : $loop->the_post(); ?>
					            	<h3><?php the_title(); ?></h3>        
					                <div class="post-thumbnail"><a href="<?php the_permalink(); ?>" >				                	
					                	<?php the_post_thumbnail('thumb-square', array('class' =>'img-responsive')); ?>
					                </a></div>
		        					<div class="info box-double">
		        						<p><?php the_field('descricao_curta'); ?></p>
		        						<span class="saiba-mais"><a href="<?php the_permalink(); ?>">saiba mais</a></span>
		        					</div>
		        					 <?php if( get_field('inscricoes') ): ?>
								          <div class="inscricoes">
								            <a class="" href="<?php the_field('inscricoes'); ?>">Inscreva-se</a>
								          </div>
								      <?php endif; ?>
					        <?php endwhile;			        
					    endif;
					    wp_reset_postdata();
					?>
				</div>
				<div class="col-sm-3">
					<?php
					    $loop = new WP_Query( array( 'post_type' => 'curso', 'post__in' => array( 122 ) ) );
					    if ( $loop->have_posts() ) :
					        while ( $loop->have_posts() ) : $loop->the_post(); ?>
					            	<h3><?php the_title(); ?></h3>        
					                <div class="post-thumbnail"><a href="<?php the_permalink(); ?>" >				                	
					                	<?php the_post_thumbnail('thumb-square', array('class' =>'img-responsive')); ?>
					                </a></div>
		        					<div class="info box-double">
		        						<p><?php the_field('descricao_curta'); ?></p>
		        						<span class="saiba-mais"><a href="<?php the_permalink(); ?>">saiba mais</a></span>
		        					</div>
		        					 <?php if( get_field('inscricoes') ): ?>
								          <div class="inscricoes">
								            <a class="" href="<?php the_field('inscricoes'); ?>">Inscreva-se</a>
								          </div>
								      <?php endif; ?>
					        <?php endwhile;			        
					    endif;
					    wp_reset_postdata();
					?>
				</div>
				<div class="col-sm-3">
					<?php
					    $loop = new WP_Query( array( 'post_type' => 'curso', 'post__in' => array( 121 ) ) );
					    if ( $loop->have_posts() ) :
					        while ( $loop->have_posts() ) : $loop->the_post(); ?>
					            	<h3><?php the_title(); ?></h3>        
					                <div class="post-thumbnail"><a href="<?php the_permalink(); ?>" >				                	
					                	<?php the_post_thumbnail('thumb-square', array('class' =>'img-responsive')); ?>
					                </a></div>
		        					<div class="info box-double">
		        						<p><?php the_field('descricao_curta'); ?></p>
		        						<span class="saiba-mais"><a href="<?php the_permalink(); ?>">saiba mais</a></span>
		        					</div>
		        					 <?php if( get_field('inscricoes') ): ?>
								          <div class="inscricoes">
								            <a class="" href="<?php the_field('inscricoes'); ?>">Inscreva-se</a>
								          </div>
								      <?php endif; ?>
					        <?php endwhile;			        
					    endif;
					    wp_reset_postdata();
					?>
				</div>
				
				
				
			</div>

			<section class="cursos-ead">

				<h2>Cursos EAD</h2>	

				<div class="container">					

					<div class="row">

						<div class="col-sm-3"> </div>

						<div class="col-sm-3">
					<?php
					    $loop = new WP_Query( array( 'post_type' => 'curso', 'post__in' => array( 163 ) ) );
					    if ( $loop->have_posts() ) :
					        while ( $loop->have_posts() ) : $loop->the_post(); ?>
					            	<h3><?php the_title(); ?></h3>        
					                <div class="post-thumbnail"><a href="<?php the_permalink(); ?>" >				                	
					                	<?php the_post_thumbnail('thumb-square', array('class' =>'img-responsive')); ?>
					                </a></div>
		        					<div class="info box-double">
		        						<p><?php the_field('descricao_curta'); ?></p>
		        						<span class="saiba-mais"><a href="<?php the_permalink(); ?>">saiba mais</a></span>
		        					</div>
		        					 <?php if( get_field('inscricoes') ): ?>
								          <div class="inscricoes">
								            <a class="" href="<?php the_field('inscricoes'); ?>">Inscreva-se</a>
								          </div>
								      <?php endif; ?>
					        <?php endwhile;			        
					    endif;
					    wp_reset_postdata();
					?>
				</div>
				<div class="col-sm-3">
					<?php
					    $loop = new WP_Query( array( 'post_type' => 'curso', 'post__in' => array( 165 ) ) );
					    if ( $loop->have_posts() ) :
					        while ( $loop->have_posts() ) : $loop->the_post(); ?>
					            	<h3><?php the_title(); ?></h3>        
					                <div class="post-thumbnail"><a href="<?php the_permalink(); ?>" >				                	
					                	<?php the_post_thumbnail('thumb-square', array('class' =>'img-responsive')); ?>
					                </a></div>
		        					<div class="info box-double">
		        						<p><?php the_field('descricao_curta'); ?></p>
		        						<span class="saiba-mais"><a href="<?php the_permalink(); ?>">saiba mais</a></span>
		        					</div>
		        					 <?php if( get_field('inscricoes') ): ?>
								          <div class="inscricoes">
								            <a class="" href="<?php the_field('inscricoes'); ?>">Inscreva-se</a>
								          </div>
								      <?php endif; ?>
					        <?php endwhile;			        
					    endif;
					    wp_reset_postdata();
					?>
				</div>

						<?php /*
							$args = array(
							'post_type' => 'curso',
							'tax_query' => array(
								array(
									'taxonomy' => 'tipo_curso',
									'field'    => 'slug',
									'terms'    => 'ead',
								),
							),
						);
						$loop = new WP_Query( $args );

						    if ( $loop->have_posts() ) :
						        while ( $loop->have_posts() ) : $loop->the_post(); ?>
						            <div class="col-sm-3">
						            	<h3><?php the_title(); ?></h3>        
						                <div class="post-thumbnail"><a href="<?php the_permalink(); ?>" >				                	
						                	<?php the_post_thumbnail('thumb-square', array('class' =>'img-responsive')); ?>
						                </a></div>
			        					<div class="info box-double">
			        						<p><?php the_field('descricao_curta'); ?></p>
			        						<!--span class="saiba-mais"><a href="<?php the_permalink(); ?>">saiba mais</a></span-->
			        						<span class="saiba-mais"><a data-fancybox data-src="#modal-<?php the_ID(); ?>" href="javascript:;">saiba mais</a></span>
			        					</div>
			        					 <?php if( get_field('inscricoes') ): ?>
									          <div class="inscricoes">
									            <a class="" href="<?php the_field('inscricoes'); ?>">Inscreva-se</a>
									          </div>
									      <?php endif; ?>

									     <div id="modal-<?php the_ID(); ?>" class="info descricao-longa fancyboox" style="display: none; padding: 50px 5vw; max-width: 800px;text-align: center;">
			        						<p><?php the_field('descricao_longa'); ?></p>			        						
			        					</div>

						            </div>
						        <?php endwhile;			        
						    endif;
						    wp_reset_postdata();
						*/?>

						<div class="col-sm-3"> </div>


					</div>
					
				</div>
			</section>	

        </div>

    </div>
    <!-- /.container -->
</div>

<?php get_footer(); ?>


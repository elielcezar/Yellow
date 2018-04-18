<?php
/**
*Template Name: EAD
*/
?>

<?php get_header(); ?>

<!-- Page Content -->
<div class="wrapper">
        
    <div id="principal">	

    	<div class="container">		

			<div class="row">
				<div class="col-sm-6"> 

					<div class="col-sm-2"> </div>

					<?php
					    $loop = new WP_Query( array( 'post_type' => 'curso', 'post__in' => array( 165 ) ) );
					    if ( $loop->have_posts() ) :
					        while ( $loop->have_posts() ) : $loop->the_post(); ?>
					            <div class="col-sm-8">
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
					            </div>
					        <?php endwhile;			        
					    endif;
					    wp_reset_postdata();
					?>
				</div>

				<div class="col-sm-6"> 

					<div class="col-sm-2"> </div>

					<?php
					    $loop = new WP_Query( array( 'post_type' => 'curso', 'post__in' => array( 163 ) ) );
					    if ( $loop->have_posts() ) :
					        while ( $loop->have_posts() ) : $loop->the_post(); ?>
					            <div class="col-sm-8">
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
					            </div>
					        <?php endwhile;			        
					    endif;
					    wp_reset_postdata();
					?>

				</div>

			</div>

        </div>

    </div><!-- principal -->

    <section class="mais-cursos">
				<div class="container">
					<h2 class="box-triple">Mais Cursos</h2>

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

			
					<!--div class="row">
						<?php
						    $loop = new WP_Query( array( 'post_type' => 'curso', 'orderby' => 'rand', 'showposts' => 3 ) );
						    if ( $loop->have_posts() ) :
						        while ( $loop->have_posts() ) : $loop->the_post(); ?>
						            <div class="col-sm-4">
						            	<h3><?php the_title(); ?></h3>        
						                <div class="post-thumbnail"><a href="<?php the_permalink(); ?>" >				                	
						                	<?php the_post_thumbnail('thumb-square', array('class' =>'img-responsive')); ?>
						                </a></div>
			        					<div class="info box-double">
			        						<p><?php the_field('descricao_curta'); ?></p>
			        						<span class="saiba-mais"><a href="<?php the_permalink(); ?>">saiba mais</a></span>
			        					</div>
						            </div>
						        <?php endwhile;			        
						    endif;
						    wp_reset_postdata();
						?>
					</div-->
				</div>
			</section>


    <!-- /.container -->
</div>

<?php get_footer(); ?>


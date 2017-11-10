<?php
/**
*Template Name: Landing EAD
*/
?>

<?php get_header(); ?>

<!-- Page Content -->
<div class="wrapper">

	<section class="intro">
			<div class="container">
				<h2><?php the_title(); ?></h2>
				<p><?php the_field('chamada'); ?></p>
			</div>
	</section>
    	
        
    <div id="principal">	

		    <section class="cursos">
				<div class="container">

					<div class="row">

						<?php
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
						            <div class="col-sm-6">
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
			</section>	

			<section class="valor">
				<div class="container">
					<?php the_content(); ?>


						<div class="row">
							

						<?php
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
						            <div class="col-sm-6">
						            	<h3><?php the_title(); ?></h3> 			        					
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

			</section>	
			
    </div><!-- principal -->

    


    <!-- /.container -->
</div>

<?php get_footer(); ?>


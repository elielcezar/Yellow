<?php
/**
 * The template for displaying all single posts.
 *
 * @package Dyad
 */

get_header(); ?>


	<div class="container">

        <div class="row">

        	 
            <div class="col-md-9">

            	<div class="voltar"><a href="<?php echo get_site_url(); ?>">« Voltar</a></div>

            			<?php while ( have_posts() ) : the_post(); ?> 					

				 					<h1><?php the_title(); ?></h1>

				 					<?php if( get_field('chamada') ): ?>
				 						<div class="chamada"><?php the_field('chamada'); ?></div>										
									<?php endif; ?>	

									<div class="extras">
										<span class="data"><?php the_date('d/m/Y'); ?></span>
									</div>

				                    <div class="conteudo"><?php the_content(); ?></div>

						<?php endwhile; ?>

					

            </div>

            <div class="col-md-3 sidebar">
            	  <?php if ( is_active_sidebar( 'lateral' ) ) : ?>                    
                        <?php dynamic_sidebar( 'lateral' ); ?>                    
                <?php endif; ?>
            </div>

        </div>

    </div>

	
	
	

<?php get_footer(); ?>

<?php
/**
 * The template for displaying all single posts.
 *
 * @package Dyad
 */

get_header(); ?>

<div class="conteudo">

	<div class="container">

        <div class="row">

            	<div class="box-blog">

            			<?php while ( have_posts() ) : the_post(); ?> 					

				 					<h1 class="box-triple"><?php the_title(); ?></h1>

				 					<?php /*if( get_field('chamada') ): ?>
				 						<div class="chamada"><?php the_field('chamada'); ?></div>										
									<?php endif;*/?>	

									<!--div class="extras">
										<span class="data"><?php the_date('d/m/Y'); ?></span>
									</div-->

				                    <div class="conteudo"><?php the_content(); ?></div>

						<?php endwhile; ?>	

						<section class="mais-posts">
						
								<h2 class="box-triple">Mais Matérias</h2>
								<div class="row">
									<?php
										$args = array(
											'post_type' => 'post'											
										);
										$loop = new WP_Query( $args );
									    $loop = new WP_Query( array( 'post_type' => 'post', 'orderby' => 'rand', 'showposts' => 3 ) );
									    if ( $loop->have_posts() ) :
									        while ( $loop->have_posts() ) : $loop->the_post(); ?>
									            <div class="col-sm-4">
									            	<div class="post-thumbnail"><a href="<?php the_permalink(); ?>" >                                   
					                                    <?php the_post_thumbnail('thumb-square', array('class' =>'img-responsive')); ?>
					                                </a></div>
					                                <div class="info box-double">
					                                    <p><?php the_field('chamada'); ?></p>
					                                    <span class="saiba-mais"><a href="<?php the_permalink(); ?>">saiba mais</a></span>
					                                </div>
									            </div>
									        <?php endwhile;			        
									    endif;
									    wp_reset_postdata();
									?>
								</div>
					
						</section>
				</div>       


        </div>

    </div>

</div>


	
	
	

<?php get_footer(); ?>

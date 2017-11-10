<?php
/**
 * The template for displaying all single posts.
 *
 * @package Dyad
 */

get_header(); ?>


<!--section class="diferenciais">
	<div class="container">
		<div class="row">			
			<div class="col-sm-3">
				<?php if( get_field('titulo_1') ): 
					// busca as informacoes da imagem
					$imagem_1 = get_field('imagem_1');
					$url = $imagem_1['url'];
					$size = 'thumb-square';
					$thumb = $imagem_1['sizes'][ $size ];

				?>
					<h3><?php the_field('titulo_1'); ?></h3>
					<div class="imagem"><img src="<?php echo $thumb; ?>" class="img-responsive" /></div>
					<div class="info box-double"><?php the_field('descricao_1'); ?></div>
				<?php endif; ?>
			</div>	
			<div class="col-sm-3">
				<?php if( get_field('titulo_2') ): 
					// busca as informacoes da imagem
					$imagem_2 = get_field('imagem_2');
					$url = $imagem_2['url'];
					$size = 'thumb-square';
					$thumb = $imagem_2['sizes'][ $size ];

				?>
					<h3><?php the_field('titulo_2'); ?></h3>
					<div class="imagem"><img src="<?php echo $thumb; ?>" class="img-responsive" /></div>
					<div class="info box-double"><?php the_field('descricao_2'); ?></div>
				<?php endif; ?>
			</div>	
			<div class="col-sm-3">
				<?php if( get_field('titulo_3') ): 
					// busca as informacoes da imagem
					$imagem_3 = get_field('imagem_3');
					$url = $imagem_3['url'];
					$size = 'thumb-square';
					$thumb = $imagem_3['sizes'][ $size ];

				?>
					<h3><?php the_field('titulo_3'); ?></h3>
					<div class="imagem"><img src="<?php echo $thumb; ?>" class="img-responsive" /></div>
					<div class="info box-double"><?php the_field('descricao_3'); ?></div>
				<?php endif; ?>
			</div>	
			<div class="col-sm-3">
				<?php if( get_field('titulo_4') ): 
					// busca as informacoes da imagem
					$imagem_4 = get_field('imagem_4');
					$url = $imagem_4['url'];
					$size = 'thumb-square';
					$thumb = $imagem_4['sizes'][ $size ];

				?>
					<h3><?php the_field('titulo_4'); ?></h3>
					<div class="imagem"><img src="<?php echo $thumb; ?>" class="img-responsive" /></div>
					<div class="info box-double"><?php the_field('descricao_4'); ?></div>
				<?php endif; ?>
			</div>			
		</div>
	</div>
</section-->

<!--section class="professor">

	<?php if( get_field('foto_professor') ): 
		$foto_professor = get_field('foto_professor');
		$url = $foto_professor['url'];
	?>
		<div class="imagem"><img src="<?php echo $url; ?>" class="img-responsive" /></div>
	<?php endif; ?>

</section-->

<section class="conteudo">
	<div class="container">
		<?php the_field('descricao_longa'); ?>
	</div>
</section>

<section class="mais-cursos">
	<div class="container">
		<h2 class="box-triple">Mais Cursos</h2>
		<div class="row">
			<?php
				$args = array(
					'post_type' => 'curso',
					'tax_query' => array(
						array(
							'taxonomy' => 'tipo_curso',
							'field'    => 'slug',
							'terms'    => 'presencial',
						),
					),
				);
				$loop = new WP_Query( $args );
			    //$loop = new WP_Query( array( 'post_type' => 'curso', 'orderby' => 'rand', 'showposts' => 3 ) );
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
		</div>
	</div>
</section>
	
	
	
	

<?php get_footer(); ?>

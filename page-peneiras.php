<?php
/**
*Template Name: Peneiras
*/
?>

<?php 
	get_header('peneiras');
?>

<!-- Page Content -->
<div class="wrapper">
    <div class="container">   	
        
        <div id="principal">

        	<div class="destaque">
        		<h2 class="box-triple page-title">Peneiras</h2>	
        		<h2>Peneira #59</h2>
        	</div>

        	<h2 class="box-triple">Mais Peneiras</h2>			

			<div class="row">
				
				<?php
				    $loop = new WP_Query( array( 'post_type' => 'peneira', 'paged' => $paged ) );
				    if ( $loop->have_posts() ) :
				        while ( $loop->have_posts() ) : $loop->the_post(); ?>
				            <div class="col-sm-3">    
				                <div class="post-thumbnail"><a href="<?php the_permalink(); ?>" >				                	
				                	<?php the_post_thumbnail('thumb-square', array('class' =>'img-responsive')); ?>
				                </a></div>
            					<div class="info box-double">
            						<p><?php the_field('descricao_curta'); ?></p>
            						<span class="saiba-mais"><a href="<?php the_permalink(); ?>">saiba mais</a></span>
            					</div>
				            </div>
				        <?php endwhile;
				        if (  $loop->max_num_pages > 1 ) : ?>
				            <div id="nav-below" class="navigation">
				                <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Previous', 'domain' ) ); ?></div>
				                <div class="nav-next"><?php previous_posts_link( __( 'Next <span class="meta-nav">&rarr;</span>', 'domain' ) ); ?></div>
				            </div>
				        <?php endif;
				    endif;
				    wp_reset_postdata();
				?>
				
			</div>

        </div>

    </div>
    <!-- /.container -->
</div>

<?php get_footer(); ?>


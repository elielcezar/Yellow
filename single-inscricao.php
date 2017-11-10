<?php
/**
 * The template for displaying all single posts.
 *
 * @package Dyad
 */

get_header(); ?>


<div id="principal">
	<div class="container">
		<div class="col-sm-8">
			<?php if( get_field('formulario_render') ): ?>
					<p><?php the_field('formulario_render'); ?></p>
			<?php endif; ?>
		</div>
		<div class="col-sm-4">			
			<?php if( get_field('descricao_curta') ): ?>
				<div class="info">
					<h2>Inscreva-se</h2>
					<p><?php the_field('descricao_curta'); ?></p>
				</div>
			<?php endif; ?>			
		</div>
	</div>
</div>
	
	

<?php get_footer(); ?>

<?php get_header(); ?>

<!-- Page Content -->
<div class="wrapper">
    <div class="container">
        
        <div id="principal">			

			<?php while ( have_posts() ) : the_post(); ?>
	            <div class="conteudo"><?php the_content(); ?></div>
			<?php endwhile; ?>
         

        </div>

    </div>
    <!-- /.container -->
</div>

<?php get_footer(); ?>


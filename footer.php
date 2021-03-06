<?php

/*
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Dyad
 */

?>


        <?php if ( is_active_sidebar( 'rodape_home' ) ) : ?>
            <div class="rodape-home widget-area" role="complementary">
            	<div class="container">
	                <?php dynamic_sidebar( 'rodape_home' ); ?>
	            </div>
            </div><!-- #primary-sidebar -->
        <?php endif; ?>


<footer>

	<div class="container">

		<div class="row">
			<div class="col-sm-4">
				<p>Tel: (41)3363-0113</p>
				<p>Whats: (41)99848-4807</p>
			</div>
			<div class="col-sm-4">
				<p>R. Desembargador Motta, 2041</p>
				<p>Batel | Curitiba - PR</p>
			</div>
			<div class="col-sm-4">
				<img src="<?php echo get_template_directory_uri(); ?>/img/assinatura-rodape2.jpg" />				
			</div>
		</div>

		<!--img src="<?php echo get_template_directory_uri(); ?>/img/assinatura-rodape.jpg" />

		<div class="especial">
			<p>41 3363 0113 | contato@yellow.art.br | R. Desembargador Motta, 2041</p>
			<small>Yellow 2017 - Todos os Direitos Reservados</small>
		</div-->

	</div>

</footer>









<!-- jQuery -->
<script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
<!-- Bootstrap Core JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.0/jquery.fancybox.min.js"></script>


<script>

jQuery(document).ready(function(){   

    $('#nav-icon').click(function(){
		$('#nav-icon, header .topo').toggleClass('open');
	});

	$('.carousel .item:first-child').addClass('active');  

	$('.page-id-16 .wpforms-field-container div:lt(3)').wrapAll('<div class="coluna-1"></div>');
	$('.page-id-16 #principal ul.socialmedia').insertAfter('.coluna-1');

});

</script>





<?php wp_footer(); ?>



</body>

</html>


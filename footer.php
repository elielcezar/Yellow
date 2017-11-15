<?php

/*
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Dyad
 */

?>


<footer>

	<div class="container">

		<img src="<?php echo get_template_directory_uri(); ?>/img/assinatura-rodape.jpg" />

		<div class="especial">
			<p>41 3363 0113 | contato@yellow.art.br | R. Desembargador Motta, 2041</p>
			<small>Yellow 2017 - Todos os Direitos Reservados</small>
		</div>

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

   

});



</script>





<?php wp_footer(); ?>



</body>

</html>


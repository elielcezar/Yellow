<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>


    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->



<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>


<header>

  <div id="nav-icon">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
 
  <h2 class="main flex main-title"><a href="<?php echo get_site_url(); ?>">yellow</a></h2> 


  <?php if(is_page()){ ?>
    <div class="chamada">
        <h1><?php the_title(); ?></h1>
        <p><?php the_field('chamada'); ?></p>
    </div>
  <?php }  ?>


  <?php if(is_singular(array( 'curso', 'inscricao' ) )){ ?>

      <div class="chamada">
          <h1><?php the_title(); ?></h1>
          <p><?php the_field('descricao_curta'); ?></p>
      </div>
      <?php if( get_field('inscricoes') ): ?>
          <div class="inscricoes">
            <a class="" href="<?php the_field('inscricoes'); ?>">Inscreva-se</a>
          </div>
      <?php endif; ?>

  <?php }  ?>

  
  <div class="social-media">
    <a class="youtube" href="http://www.youtube.com/yellowartbr" target="_blank">Youtube</a>      
    <a class="fb" href="https://www.facebook.com/yellow.art.br">Facebook</a>
    <a class="insta" href="#">Instagram</a>
  </div>

  <div class="topo">
        <?php if ( is_active_sidebar( 'topo' ) ) : ?>                    
                <?php dynamic_sidebar( 'topo' ); ?>                    
        <?php endif; ?>
  </div>

  

</header>
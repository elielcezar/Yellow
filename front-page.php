
<?php
/*
Template Name: Homepage
*/

//the content of page.php and now you can do what you want.
?>


<?php get_header(); ?>


<!-- Page Content -->
<div class="wrapper">
    <div class="container">

        <h2 class="about">About</h2>
        <img src="<?php echo get_template_directory_uri(); ?>/img/cdj.png" class="cdj" />
        
        <div id="principal">
            <div class="intro">
                <p>A Yellow é onde quem é apaixonado por música se encontra. Um espaço democrático, sem rótulos e nem limites. Aqui você é livre para deixar sua criatividade e sua paixão ganharem vida em forma de som.</p>                
                <p>Estamos em um lugar incrível, no centro de Curitiba-PR, em um espaço com 450m2 totalmente dedicados à música, onde oferecemos diversos cursos de formação técnica para música, áudio e artes contemporâneas, assessoria para eventos e um espaço livre para divulgação e apresentação de trabalhos, workshops, palestras e oficinas.</p>
            </div>

            <div class="destaques">
                <div class="row">
                    <div class="col-sm-4">
                        <h3>Cursos</h3>
                        <a href="<?php echo get_site_url(); ?>/cursos"><img src="<?php echo get_template_directory_uri(); ?>/img/curso.jpg" class="img-responsive" /></a>
                        <div class="info box-double">
                            <p>Todo o conhecimento que você precisa para colocar o seu sonho em prática está aqui.</p>
                            <span class="saiba-mais"><a href="<?php echo get_site_url(); ?>/cursos">saiba mais</a></span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <h3>Eventos</h3>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/peneiras.jpg" class="img-responsive" />
                        <div class="info box-double">
                            <p>Os DJs formados pela Yellow têm acesso exclusivo às Peneiras, promovidas em conjunto com vários núcleos e casas noturnas parceiras.</p>
                            <!--span class="saiba-mais"><a href="<?php echo get_site_url(); ?>/peneiras">saiba mais</a></span-->
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <h3>Equipe</h3>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/equipe.jpg" class="img-responsive" />
                        <div class="info box-double">
                            <p>Conheça as pessoas que fazem a Yellow ser referência.</p>
                            <!--span class="saiba-mais"><a href="<?php echo get_site_url(); ?>/equipe">saiba mais</a></span-->
                        </div>
                    </div>  
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
</div>



<?php get_footer(); ?>


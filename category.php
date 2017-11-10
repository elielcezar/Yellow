
<?php
/*
Template Name: Homepage
*/

//the content of page.php and now you can do what you want.
?>


<?php get_header(); ?>


<!-- Page Content -->
    <div class="container">

        <div class="row">

             <!-- categorias -->
            <div class="col-sm-12 navbar">          

                <?php if ( is_active_sidebar( 'destaque' ) ) : ?>                    
                        <?php dynamic_sidebar( 'destaque' ); ?>                    
                <?php endif; ?>

            </div>


            <!-- Blog Entries Column -->
            <div class="col-md-9 noticias">


                        <h2 class="page-title"><?php echo single_cat_title(); ?></h2>               

                         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                                        
                                <div class="row">
                                    <div class="col-sm-5">                                        
                                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumb-noticias', array( 'class' => 'img-responsive' ) ); ?></a>
                                      
                                  
                                     </div>
                                        <div class="col-sm-7">
                                            <div class="extras">
                                                  <span class="data"><?php echo get_the_date(); ?></span>   
                                            </div>
                                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                            <div class="chamada"><?php the_excerpt(); ?></div>
                                            <div class="leia-mais"><a class="btn" href="<?php the_permalink(); ?>">Leia Mais</a></div>
                                            <div class="compartilhe"><a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">Compartilhe</a></div>
                                        </div>                                   
                                </div>

                                <?php endwhile; ?>
                                    <!-- pagination -->
                                    <?php wp_pagenavi(); ?>
                                    <?php else : ?>
                                    <!-- No posts found -->
                                    <?php endif; ?>                           
                              
              

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-3 sidebar">

                <?php if ( is_active_sidebar( 'lateral' ) ) : ?>                    
                        <?php dynamic_sidebar( 'lateral' ); ?>                    
                <?php endif; ?>

            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->



<?php get_footer(); ?>


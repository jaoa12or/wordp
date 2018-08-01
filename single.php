<?php 

/*
Template Name: Nosotros
*/


get_header('about'); ?>
           

           
<div class="home">
     
     <?php
    $estilo = 'background-image: url(\'' . get_stylesheet_directory_uri() . '/images/about_background.jpg\')';
    ?>

     
           
           <div class="home_background parallax-window" data-parallax="scroll" style="<?php echo esc_attr($estilo); ?>" data-image-src="images/about_background.jpg">
              
       
               
           </div>
   
   <?php  if(have_posts()) : while (have_posts()) : the_post(); ?>             
            
            <div class="home_content">
                <div class="home_title"><?php the_title();?></div>
            </div>
        </div>

        <!-- Intro -->

    
        
<?php
    $estilo = 'background-image: url(\'' . get_stylesheet_directory_uri() . '/images/background_celebrityspecialco.png\')';
?>
<div style="<?php echo esc_attr($estilo); ?>"></div>


        <div class="intro intro_1" style="background: #FFFF;">
            <div class="container">
                <div class="row">

                    <div class="col-lg-7">
                        <div class="intro_content">

                            <p class="intro_text intro_text_1" style="color: #929191;"><?php the_content();?></p>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="intro_image">
                        
                          <div class="content_img">
                                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'single_thumbs' ); } ?>
                                
                                </div>
                        
                   
                        
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <?php endwhile; else: ?>
                
                        <h1>no hay pa mostrar</h1>
                
                 <?php endif; ?>
				<!-- Intro Item --
        <!-- Stats -->

<?php get_footer(); ?>
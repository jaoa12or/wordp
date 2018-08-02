<?php 

/*
Template Name: Registro
*/


get_header('about'); ?>
           

           
<div class="home">
     
     <?php
    $estilo = 'background-image: url(\'' . get_stylesheet_directory_uri() . '/images/about_background.jpg\')';
    ?>

     
           
           <div class="home_background parallax-window" data-parallax="scroll" style="<?php echo esc_attr($estilo); ?>" data-image-src="images/about_background.jpg">
              
       
               
           </div>
   
            
            
            <div class="home_content">
                <div class="home_title">Registro</div>
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

                    <div class="col-lg-12">
                        <div class="intro_content">
                            
                             <?php
                        echo do_shortcode( '[pie_register_form id="1" title="true" description="true" ]' );
                        
                        ?> 

                            
                        </div>
                    </div>

                 
                </div>
            </div>
        </div>
            
				<!-- Intro Item --
        <!-- Stats -->

<?php get_footer(); ?>
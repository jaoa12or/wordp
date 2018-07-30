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
   
                
            
            <div class="home_content">
                <div class="home_title">about us</div>
            </div>
        </div>

        <!-- Intro -->

        <div class="intro">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="intro_content">
                            <div class="intro_title">nosotros</div>
                            <p class="intro_text">En Celebrity Special Tours SAS, somos un grupo de emprendedores turísticos que contamos con personal calificado dispuesto a organizar y ofertar para ustedes los planes de viajes soñados. Contamos con GRAND TOURISM el cual les brinda la oportunidad de acceder de una forma selecta y oportuna a los mejores pre- cios y tarifas del mercado turístico. Operamos bajo el RNT 5110 autorizado por el Ministerio de Industria y Turismo y FONTUR.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
<?php
    $estilo = 'background-image: url(\'' . get_stylesheet_directory_uri() . '/images/background_celebrityspecialco.png\')';
?>
<div style="<?php echo esc_attr($estilo); ?>"></div>


        <div class="intro intro_1" style="<?php echo esc_attr($estilo); ?>">
            <div class="container">
                <div class="row">

                    <div class="col-lg-7">
                        <div class="intro_content">

                            <p class="intro_text intro_text_1">GRAND TOURISM les brinda la oportunidad de acceder de una forma selecta y oportuna a los mejores precios y tarifas del mercado turístico. Contamos con un personal especializado en viajes de placer, lunas de miel, cruce- ros, europa y cualquier destino exótico. Es un plus tener un equipo humano lo suficientemente capacitado en aplicaciones modernas y con recursos técnicos que per- mitan prestar a los clientes una asesoría integral, gene- rando cada día mayor confianza, solidez y respaldo.</p>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="intro_image"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/img%20nosotros.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats -->

        <div class="stats">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 text-center">
                        <div class="section_title"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icono1.png" alt=""></div>
                        <div class="col-lg-10 offset-lg-1 text-center">
                            <p class="stats_text">Asesora a sus clientes para que puedan realizar sus viajes al destino que prefieran, a la medida de su presupuesto y necesidad. </p>
                        </div>

                    </div>

                    <div class="col-lg-3 text-center">
                        <div class="section_title"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icono%202.png" alt=""></div>
                        <div class="col-lg-10 offset-lg-1 text-center">
                            <p class="stats_text">Asesoría personalizada per- mite a nuestros clientes pla- nificar sus viajes al destino que prefieran y al alcance de su presupuesto.</p>
                        </div>

                    </div>

                    <div class="col-lg-3 text-center">
                        <div class="section_title"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icono%203.png" alt=""></div>
                        <div class="col-lg-10 offset-lg-1 text-center">
                            <p class="stats_text">Obtén los mejores precios y descuentos en tus reservas de hotel y/o boletos de avión. </p>
                        </div>

                    </div>

                    <div class="col-lg-3 text-center">
                        <div class="section_title"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icono%204.png" alt=""></div>
                        <div class="col-lg-10 offset-lg-1 text-center">
                            <p class="stats_text">Respaldo y garantía. Reserva- ciones seguras y políticas de privacidad de protección. </p>
                        </div>

                    </div>
                </div>


                <div class="row">
                    <div class="col">
                        <div class="stats_contents">

                            <!-- Stats Item -->


                            <!-- Stats Item -->


                            <!-- Stats Item -->


                            <!-- Stats Item -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer(); ?>
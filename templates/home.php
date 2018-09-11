<?php
    /* Template Name: Inicio */ 
    get_header();
?>

    <section id="tipo_acuario" class="template-section">
        <div class="caracteristicas1">
        <div class="contenedor">
            <h2 class="tipo"><i>¿Qué tipo de acuario</i>te interesa?</h2>
            <div class="grid">
               
                <div class="col">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/diseno_medida.png" alt="Diseño Medida">
                </div>
                <div class="col">
                   <h3 class="diseño">Diseño a la medida</h3>
                    <p class="azul">
                       
                    Diseñamos y construimos acuarios marinos a la medida de sus necesidades. Ideales para decorar espacios de lujo en empresas (Hoteles, restaurantes, clubs, oficinas, consultorios, entre otros) y hogares. 
                     
                        
                    </p>
                    <a href="#contacto" class="btn amarillo">ME INTERESA</a>
                </div>
            </div>
        </div>
        </div>
        <div class="caracteristicas2">
        <div class="contenedor">
            <div class="grid">
                <div class="col">
                   <h3 class="diseño">Diseño a la medida</h3>
                    <p class="azul">
                       
                    Diseñamos y construimos acuarios marinos a la medida de sus necesidades. Ideales para decorar espacios de lujo en empresas (Hoteles, restaurantes, clubs, oficinas, consultorios, entre otros) y hogares. 
                       <br>
                        <a href="#contacto" class="btn amarillo">ME INTERESA</a>
                    </p>
                </div>
                <div class="col">
                   <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/acuario_prefabricado.png" alt="Acuario Prefabricado">
                </div>
            </div>
        </div>
        </div>

    </section>
   <section id="galeria" class="template-section padding-50">
        <h2 class="azul">Galería de <i>acuarios marinos a la medida</i></h2>
    </section>
 <section id="contacto" class="template-section padding-50">

        <div class="contenedor">
            <div class="title">
                <h2><i>¡Contáctanos</i>hoy mismo!</h2>
                <p>Coméntenos que desea para brindarle una mejor atención. </p>
                <hr>
            </div>

            <div class="grid">

                <div class="col prueba_col">
                    <?php echo do_shortcode( '[caldera_form id="CF5b91689843b49"]' ); ?>
                </div>

                <div class="col">

                    <div class="datos">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/correo.png" alt="Correo"> contacto@pandasreef.com
                    </div>



                    <div class="grid datos">
                        <i class="icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/telefono.png" alt="Teléfono"></i>
                        <div class="info">
                            <a href="tel:5522726203">552 272 6203</a>
                            <a href="tel:5581455952">558 145 5952</a>
                        </div>
                    </div>

                    <div class="datos">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tiempo.png" alt="Horario"> 09:00 a.m. a 11:00 p.m.
                    </div>


                    <div class="grid datos">
                        <i class="icon">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lugar.png" alt="Lugar">
                        </i>
                        <div class="info">
                            Rocas 185, Jardines del pedregal, <br>AlvaroObregon, CDMX, <br>CP:01900
                        </div>
                    </div>


                    <div class="siguenos">

                        <span> Síguenos en: </span>

                        <a href="#" title="Síguenos en Instagram"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/instagram.png" alt=""></a>
                        <a href="#" title="Síguenos en Facebook"><img src="" alt="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook.png" alt="">
                        </a>
                    </div>

                </div>


            </div>
        </div>
    </section>
    <section id="acerca_de" class="template-section">

        <div class="contenedor">
            <div class="grid">
                <div class="col">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/acerca.png" alt="Acerca">
                </div>
                <div class="col">
                    <h2>Acerca de <i>Panda’s Reef</i></h2>
                    <p class="azul">
                        Somos una empresa con 15 años de experiencia en el diseño y construcción de acuarios marinos arquitectónicos y prefabricados. 
                        
                       
                    </p>
                     <a href="#contacto" class="btn amarillo">SABER MÁS</a>
                </div>
            </div>
        </div>

    </section>



<?php 
    get_footer();
?>
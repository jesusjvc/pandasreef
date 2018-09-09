<?php
    /* Template Name: Inicio */ 
    get_header();
?>


<section id="tipo_acuario">
    
     <h2><span class="tipo">¿Qué tipo de acuario</span> <br><span class="interesa">te interesa?</span></h2>
    <div class="tipo_acuario">
       <div> <br></div>
        <div class="columna columna1">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/diseno_medida.png" alt="Diseño Medida">
        </div>
        <div class="columna columna2">
            <h3 class="diseño">Diseño a la medida</h3>
            <p class="diseño2">Diseñamos y construimos acuarios marinos a la medida de sus necesidades. Ideales para decorar espacios de lujo en empresas (Hoteles, restaurantes, clubs, oficinas, consultorios, entre otros) y hogares.  
            </p>
            <button>Me interesa</button>
        </div>
        <div> <br></div>
    </div>
    <div class="tipo_acuario2">
       <div> <br></div>
        
        <div class="columna columna1">
            <h3 class="diseño">Acuarios prefabricados</h3>
            <p class="diseño2">Línea de acuarios prefabricados elaborados con variedad de medidas, diseño superior y los mejores materiales existentes.
            </p>
            <button>Ver catálogo</button>
        </div>
        <div class="columna columna2">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/acuario_prefabricado.png" alt="Acuario Prefabricado">
        </div>

        <div> <br></div>
    </div>
</section>

<section id="slider">
    <div class="slider">
       <h2><span class="tipo">Galería de</span> <br><span class="interesa">acuarios marinos realizados</span></h2>
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        
    <div class="elfsight-app-6e426192-d18b-4765-8021-656bf900591d"></div>
        
         
    </div>
</section>

<section id="contacto" class="prueba">
    
     <h2><span class="tipo">¡Contáctanos</span> <br><span class="interesa">hoy mismo!</span></h2>
     <p class="contacto_letra">Coméntenos que desea para brindarle una mejor atención. </p>
    <hr>
    <div class="columna_contacto"> 
      
       <div class="col prueba_columna"><?php echo do_shortcode( '[caldera_form id="CF5b91689843b49"]' ); ?></div>

        <div class="col">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/correo.png" alt="Correo"> &nbsp;contacto@pandasreef.com<br><br>
            
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/telefono.png" alt="Teléfono"> &nbsp;5522726203<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5581455952<br><br>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tiempo.png" alt="Horario"> &nbsp;09:00 a.m. a 11:00 p.m.<br><br>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lugar.png" alt="Lugar"> &nbsp;Rocas 185, Jardines del pedregal, <br>AlvaroObregon, CDMX, <br>CP:01900<br><br><br><br><br>
            <p><br>&nbsp;Síguenos en:&nbsp;&nbsp;<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/redes.png" alt="Redes Sociales"> </p>
        </div>
        
    
    </div>
</section>



<section>
         <h2><span class="tipo">¿Qué tipo de acuario</span> <br><span class="interesa">te interesa?</span></h2>
    <div class="tipo_acuario">
       <div> <br></div>
        <div class="columna columna1">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/acerca.png" alt="Diseño Medida">
        </div>
        <div class="columna columna2">
            <h3 class="diseño">Diseño a la medida</h3>
            <p class="diseño2">Diseñamos y construimos acuarios marinos a la medida de sus necesidades. Ideales para decorar espacios de lujo en empresas (Hoteles, restaurantes, clubs, oficinas, consultorios, entre otros) y hogares.  
            </p>
            
        </div>
        <div> <br></div>
    </div>
</section>
<footer>
   <div class="col">
    <p>Copyright © 2018 Panda’s Reef - Diseño Web por esbrillante.mx</p></div>
    <div class="col">
    <img src="//woodmart.xtemos.com/wp-content/uploads/2017/01/payments.png"></div>
</footer>

<?php 
    get_footer();
?>
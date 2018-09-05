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
            <h3 class="diseño">Diseño a la medida</h3>
            <p class="diseño2">Diseñamos y construimos acuarios marinos a la medida de sus necesidades. Ideales para decorar espacios de lujo en empresas (Hoteles, restaurantes, clubs, oficinas, consultorios, entre otros) y hogares.  
            </p>
            <button>Me interesa</button>
        </div>
        <div class="columna columna2">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/acuario_prefabricado.png" alt="Acuario Prefabricado">
        </div>

        <div> <br></div>
    </div>
</section>

<section id="mcl">
    <div class="flex">
        <div class="columna">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/MCL.png" alt="MCL">
            <h1>Magna Carta Lex</h1>
            <p class="sup">Somos una firma de abogadas y abogados especializada en amparo, así como en derechos humanos y en temas constitucionales y referentes a las soberanías de los Estados, en México y/o en los diversos mecanismos internacionales, como por ejemplo la Corte Internacional de Justicia, la Comisión Interamericana de Derechos Humanos o la Corte Interamericana de Derechos Humanos, que trata a sus clientas y clientes de manera personalizada, en un entorno de familiaridad.</p>
            <p class="inf">Nuestros productos y servicios jurídicos pasan por un riguroso proceso de perfeccionamiento que tiene como destino la excelencia.</p>
        </div>
        <div class="columna">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mcl/rey.png" alt="Rey bicolor ajedrez">
        </div>
    </div>
</section>

<section id="pro">
    <h2>
        <i>Pro bono</i>
        y equidad de género
    </h2>
    <p class="sup">Creemos en la constante necesidad de impulsar el estado de las cosas hacia adelante, y en la equidad de género, que, en lo que nos compete, desemboca en la autonomía de las personas respecto a la plena defensa de sus derechos y en el trato equitativo a quienes forman parte de nuestra firma.</p>
    <p class="inf">/</p>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mcl/equidadGenero.png" alt="balanza con hombre y mujer frente a la ciudad">
</section>

<section id="blog">
    <h2>Blog</h2>
    <div class="flex">
        <div class="columna"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mcl/law.png" alt="libro de leyes y martillo de juez"></div>
        <div class="columna"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mcl/librosFeosApilados.png" alt="libros apilados"></div>
        <div class="columna"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mcl/martilloColor.png" alt="martillo de juez"></div>
    </div>
</section>

<section id="suscribir">
    <div class="flex">
        <div class="columna"></div>
        <div class="columna">
            <h2>Suscríbase a nuestro blog</h2>
            <input type="text" placeholder="Introduzca su correo electrónico">
            <button>Suscribirme</button>
        </div>
    </div>
</section>


<?php 
    get_footer();
?>
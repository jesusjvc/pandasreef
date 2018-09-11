<?php
    /* Template Name: Acuarios a su medida */ 
    get_header();
?>

    <section id="acuarios-medida" class="template-section">
        <div class="grid">
            <div class="col">
                <h2><i>Acuarios</i>a su medida</h2>
                <p>
                    Diseñamos y construimos acuarios marinos arquitectónicos. Ideales para decorar espacios de lujo en empresas (Hoteles, restaurantes, clubs, oficinas, consultorios, entre otros) y hogares.
                </p>

                <p class="txt-azul">
                    ¡Panda´s Reff es su mejor opción!
                </p>
            </div>
            <div class="col fondo"></div>
        </div>
    </section>

    <section id="beneficios-acuario" class="template-section">
        <div class="grid">
            <div class="col fondo"></div>
            <div class="col">
                <h2><i>Beneficios</i>que te ofrecemos:</h2>
                <ul>
                    <li>Ofrecemos una visita gratuita con asesoría preventa.</li>
                    <li>Construimos la totalidad del acuario a la medida de sus necesidades y con los acabados que desee. </li>
                    <li>Proveemos muchas especies marinas (con los permisos legales) y también decoraciones para su acuario. </li>
                    <li>Aceptamos todos los métodos de pago.</li>
                    <li>Brindamos servicios post venta, en reparación, mantenimiento y refacciones o cambio de componentes. </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="pasos" class="template-section">
        <div class="grid">
            <div class="col">
                <h2>5 pasos para tener el <i>acuario de sus sueños</i></h2>
                <ul class="azul">
                    <li>¡Contáctenos! </li>
                    <li>Programaremos una visita gratuita al lugar donde desea construir su acuario y plantearemos el proyecto general con medidas, especificaciones, concepto y acabados de su acuario. El mismo día recibirá su presupuesto. </li>
                    <li>En una semana recibirá el diseño. </li>
                    <li>Su acuario estará listo de 3 a 6 semanas despúes de aprobar el presupuesto.</li>
                </ul>
            </div>
            <div class="col fondo"></div>
        </div>
    </section>


    <section id="como-pagar" class="template-section">

        <div class="contenedor">
            <div class="grid">
                <div class="col">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/acuarios-medida/pago.png" alt="Métodos de pago">
                </div>
                <div class="col">
                    <h2>¿Cómo <i>pagar?</i></h2>
                    <ul class="azul">
                        <li><strong>Aceptamos</strong> Tarjetas de crédito o debito (Nacionales, AMEX) físicas. (llevamos el punto a su domicilio)</li>
                        <li>
                            Pasarela de pagos en línea
                        </li>
                        <li>
                            PayPal
                        </li>
                        <li>
                            Transferencia Interbancaria SPEI
                        </li>
                        <li>
                            Efectivo
                        </li>

                        <a href="#contacto" class="btn amarillo">SOLICITAR UN PRESUPUESTO</a>
                    </ul>
                </div>
            </div>
        </div>

    </section>

    <section id="galeria" class="template-section padding-50">
        <h2 class="azul">Galería de <i>acuarios marinos a la medida</i></h2>
    </section>

    <section id="faq" class="template-section padding-50">
        <h2>Preguntas <i>frecuentes</i></h2>
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

    <?php 
    get_footer();
?>

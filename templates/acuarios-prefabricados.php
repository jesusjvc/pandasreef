<?php
    /* Template Name: Acuarios Prefabricados */ 
    get_header();
?>

    <section id="acuarios-prefabricados" class="template-section">
        <div class="grid">
            <div class="col">
                <h2><i>Acuarios</i>prefabricados</h2>
                <p class="txt-azul">
                    Línea de acuarios prefabricados elaborados con variedad de medidas, diseño superior y los mejores materiales existentes.
                </p>

                <p class="txt-azul">
                    ¡Nuestros acuarios incluyen todo lo necesario para su instalación y mantenimiento sin ayuda profesional. Solicítelo y en tan sólo 3 días podrá tener el acuario que tanto ha deseado.
                </p>
            </div>
            <div class="col fondo"></div>
        </div>
    </section>

    <section id="acuarios-tienda" class="template-section padding-50">
        <div class="contenedor">
            <h2>Elige tu <i>acuario</i></h2>
        </div>
    </section>




    <section id="faq" class="template-section amarillo padding-50">
        <h2>Preguntas <i>frecuentes</i></h2>
    </section>

    <section id="comprar-pagar" class="template-section padding-50">
        <div class="contenedor">
            <div class="grid">
                <div class="col">
                    <h2>¿Cómo <i>comprar?</i></h2>

                    <ul class="azul">
                        <li>Contáctenos y realice su pedido (Por favor especifique modelo y dirección de envío). </li>
                        <li>Realice y confirme su pago.</li>
                        <li>En 3 días recibirá su acuario, listo para instalar y disfrutar. </li>                       
                    </ul>

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
                    </ul>
                </div>
            </div>
        </div>
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

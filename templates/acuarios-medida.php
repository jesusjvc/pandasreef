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
                    ¡Panda´s Reef es su mejor opción!
                </p>
            </div>
            <div class="col fondo"></div>
        </div>
    </section>

    <section id="beneficios-acuario" class="template-section">
        <div class="grid invertido">
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
        <?php echo do_shortcode( '[elfsight_instagram_feed id="1"]' ); ?>
    </section>

    <section id="faq" class="template-section padding-50">
        <h2>Preguntas <i>frecuentes</i></h2>
    <div class="faq card">
    <article>
    <h1 data-accordion-element-trigger>¿Cuál es el tiempo de instalación?</h1>
    <div data-accordion-element-content class="content">
      <p>Para acuarios arquitectónicos personalizados la instalación puede tomar de 2 a 8 semanas dependiendo de la complejidad del proyecto.</p>
    </div>
  </article>
  <article>
    <h1 data-accordion-element-trigger>¿Los acuarios gastan mucha electricidad?</h1>
    <div data-accordion-element-content class="content">
      <p>Los componentes incluidos que requieren de corriente son seleccionados por la calidad y la eficiencia en el consumo de energía. </p>
    </div>
  </article>
  <article>
    <h1 data-accordion-element-trigger>¿Uds proveen los peces?</h1>
    <div data-accordion-element-content class="content">
      <p>Si, ofrecemos una gran variedad de especies con sus permisos legales. Al momento de la visita podrá elegirlos del catálogo y se le presupuestarán aparte.  </p>
    </div>
  </article>
  <article>
    <h1 data-accordion-element-trigger>¿Ofrecen servicios de reparación, mantenimiento y refacciones?</h1>
    <div data-accordion-element-content class="content">
      <p>Si. Ofrecemos todos esos servicios postventa.</p>
    </div>
  </article>
    <article>
    <h1 data-accordion-element-trigger>¿Los construyen en cualquier parte de México?</h1>
    <div data-accordion-element-content class="content">
      <p>Si.</p>
    </div>
  </article>
   </div>
    </section>


  <?php include 'contacto.php'; ?> 
    <?php 
    get_footer();
?>

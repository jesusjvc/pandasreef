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
            <?php echo do_shortcode('[vc_row][vc_column][woodmart_products columns="3"][/vc_column][/vc_row]'); ?>
        </div>
    </section>




    <section id="faq" class="template-section amarillo padding-50 ">
        <h2>Preguntas <i>frecuentes</i></h2>
    <div class="faq card">
    <article>
    <h1 data-accordion-element-trigger>¿Qué incluye?</h1>
    <div data-accordion-element-content class="content">
      <p>Absolutamente todo lo necesario para la instalación y mantenimiento del tanque con componentes de la más alta calidad, para que una vez armado esté listo para iniciar el ciclado del agua y la posterior introducción de ejemplares marinos.</p>
    </div>
  </article>
  <article>
    <h1 data-accordion-element-trigger>¿Los acuarios gastan mucha electricidad?</h1>
    <div data-accordion-element-content class="content">
      <p>Los componentes incluidos que requieren de corriente son seleccionados por la calidad y la eficiencia en el consumo de energía. </p>
    </div>
  </article>
  <article>
    <h1 data-accordion-element-trigger>¿Cuál es el tiempo de instalación?</h1>
    <div data-accordion-element-content class="content">
      <p>De 1 a 3 horas dependiendo de la experiencia de cada cliente. </p>
    </div>
  </article>
  <article>
    <h1 data-accordion-element-trigger>¿Qué tan difícil es tener un acuario marino?</h1>
    <div data-accordion-element-content class="content">
      <p>Muy fácil, la simplificación de nuestros sistemas y el alto grado de tecnología implementado en los mismos, permiten que la instalación y el mantenimiento sea mucho más simple.</p>
    </div>
  </article>
    <article>
    <h1 data-accordion-element-trigger>¿Ofrecen servicio de instalación para acuarios prefabricados?</h1>
    <div data-accordion-element-content class="content">
      <p>Si, en CDMX, Estado de México y Morelos.</p>
    </div>
  </article>
    <article>
    <h1 data-accordion-element-trigger>¿Cómo funciona el mantenimiento?</h1>
    <div data-accordion-element-content class="content">
      <p>El mantenimiento de acuarios pre fabricados es simple y se puede llevar a cabo con tan solo cumplir algunas tareas semanales y quincenales, las cuales vienen expresadas en nuestro video de mantenimiento.</p>
    </div>
  </article>
      <article>
    <h1 data-accordion-element-trigger>¿Me venden los peces también?</h1>
    <div data-accordion-element-content class="content">
      <p>No. Pero podemos recomendarle donde conseguirlos en varios estados de la República Mexicana. </p>
    </div>
  </article>
   </div>
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


  <?php include 'contacto.php'; ?> 

    <?php 
    get_footer();
?>

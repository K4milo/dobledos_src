{extends file='page.tpl'}

{block name='page_content_container'}
  <section id="content" class="page-content page-cms page-cms-{$cms.id} custom-page-medida">

    <div class="block-top-content block-top-content--parallax">
      {block name='cms_content'}
        {$cms.content nofilter}
      {/block}
    </div>

    <div class="middle-blocks">
      {block name="size_content"}
        <section id="contentBlocks" class="custom-blocks">

          <article class="custom-block-item">
            <div class="block--item-size">
               <img src="http://dobledos.depura-creatividad.com/img/cms/service-super-express.jpg" alt="" width="868" height="649" />
               <h3>SERVICIO SÚPER EXPRESS</h3>
               <p>En 8 horas aproximadamente tomamos tus medidas, eligues la tela, los detalles y terminaciones y al cabo de ese tiempo, recibirás tu camisa hecha especialmente para tí. *sólo para Bogotá.</p>
            </div>
            <div class="block--item-size">
               <img src="http://dobledos.depura-creatividad.com/img/cms/Para-todos-los-estilos.png" alt="" width="868" height="649" />
               <h3>PARA TODOS LOS ESTILOS</h3>
               <p>Tenemos opciones para tus gustos y necesidades. Una prenda única a tu medida, con un diseño personalizado, y telas en hilaturas de alta calidad.</p>
            </div>
            <div class="block--item-size">
               <img src="http://dobledos.depura-creatividad.com/img/cms/a lamedida_confeccio.png" alt="" width="868" height="649" />
               <h3>CONFECCIÓN</h3>
               <p>A partir de tus medidas y el estudio antropomórfico de tu cuerpo, un software especializado desarrolla el molde de tu futura camisa, para así ser producida con los más altos estándares de calidad.</p>
            </div>
          </article>

          <article class="custom-block-item">
            <div class="block--item-size">
               <img src="http://dobledos.depura-creatividad.com/img/cms/a lamedida_express.jpg" alt="" width="868" height="649" />
               <h3>SERVICIO EXPRESS</h3>
               <p>De un día para otro te entregamos tu camisa a la medida. Tomamos tus medidas en tu casa u oficina, sí por algún motivo no puedes ir a nuestra Tienda, elige la tela, los detalles y terminaciones de tu camisa. *sólo para Bogotá.</p>
            </div>
            <div class="block--item-size">
               <img src="http://dobledos.depura-creatividad.com/img/cms/a lamedida-asesoria.jpg" alt="" width="868" height="649" />
               <h3>ASESORÍA</h3>
               <p>Te guiamos en cada momento del proceso: Selección de telas diseños y colores, toma de medidas, cuellos puños y contrastes de acuerdo a tu necesidad.</p>
            </div>
            <div class="block--item-size">
               <img src="http://dobledos.depura-creatividad.com/img/cms/a lamedida_grantia.jpg" alt="" width="868" height="649" />
               <h3>GARANTÍA</h3>
               <p>Garantizamos ajuste perfecto. Nuestra propuesta es asegurar que la camisa te quedará a la medida.</p>
            </div>
          </article>


        </section>
      {/block}
    </div>

    <div class="blocks-contact-info contact-blocks">
      {block name="size_content"}
        <div class="block--item-contact">
          <h3>ADQUIERE TU CAMISA A LA MEDIDA</h3>
          <p>Somos tu mejor aliado en todo proceso de fabricación. Desde la selección de la tela y su diseño, hasta la prenda final a tu medida.</p>
        </div>
        <div class="block--item-contact">
      	 {hook h='displayContactSizes'}
        </div>
      {/block}
    </div>

    {block name='hook_cms_dispute_information'}
      {hook h='displayCMSDisputeInformation'}
    {/block}

    {block name='hook_cms_print_button'}
      {hook h='displayCMSPrintButton'}
    {/block}

  </section>
{/block}

<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<script type="text/javascript">
    $( "#contacto" ).addClass( "dropdown active" );
</script>

<div class="center_content_pages">
    <div class="financial-application-form">
         <h2>Buzón de Información y Sugerencias</h2>

         <p id="shadow-ligth">
            A través de este formulario usted podra contactarse directamente con nuestro personal. Mediante este formulario puede solicitar información de nuestros servicios y nos comunicaremos con usted a la brevedad posible.
         </p>
         <p id="shadow-ligth">
            Además tambien puede hacernos llegar sugerencias a nuestra empresa para mejorar nuestros servicios y que tenga una mejor atención.
         </p>
<form class="form" id ="contacto_form"action="<?php echo url_for('contacto/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'contacto/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input class="submit" type="submit" value="Enviar" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <?php include_partial('flashes') ?>
      <tr>
        <th><label>Su nombre o Empresa: </label></th>
        <td>
          <?php echo $form['nombre']->renderError() ?>
          <?php echo $form['nombre'] ?>
        </td>
      </tr>
      <tr>
        <th><label>Su Email: </th>
        <td>
          <?php echo $form['email']->renderError() ?>
          <?php echo $form['email'] ?>
        </td>
      </tr>
      <tr>
        <th><label>Su Telefono: </label></th>
        <td>
          <?php echo $form['telefono']->renderError() ?>
          <?php echo $form['telefono'] ?>
        </td>
      </tr>
      <tr>
        <th><label>Asunto: </label></th>
        <td>
          <?php echo $form['asunto']->renderError() ?>
          <?php echo $form['asunto'] ?>
        </td>
      </tr>
      <tr>
        <th><label>Mensaje: </label></th>
        <td>
          <?php echo $form['mensaje']->renderError() ?>
          <?php echo $form['mensaje'] ?>
        </td>
      </tr>
      <tr>
          <td colspan="2">
          <?php echo $form['captcha']->renderError() ?>
          <?php echo $form['captcha'] ?>
        </td>
      </tr>
      
    </tbody>
  </table>
</form>
    </div>
    
             <div class="testimonials">
                    <h2>Comentarios y Experiencias </h2>
                    <p id="shadow-ligth">
                    Publicamos los comentarios y experiencias de clientes que solicitaron nuestros servicios.
                    </p>
                        <?php 
                        $q = Doctrine_Core::getTable('Satisfaccion')->selectSatisfaccion();
                        $satisfacciones = $q->execute();
                        ?>
                    <?php foreach($satisfacciones as $satisfaccion)
                    {?>
                    <div class="testbox">
                    <h4><?php echo $satisfaccion->Empresa->getRazonSocial()?>  </h4>
                    <span><?php echo $satisfaccion->getServicio()?></span>
                    <p id="shadow-ligth">
                    <?php echo $satisfaccion->getComentario()?>
                    </p>
                    </div>         
                    <?php 
                    }
                    ?>
             </div>
    
    <div class="clear"></div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        if ($.fn.cssOriginal != undefined)
            $.fn.css = $.fn.cssOriginal;

        $('.fullwidthbanner2').revolution(
                {
                    delay: 8000,
                    startwidth: 890,
                    startheight: 151,
                    onHoverStop: "on", // Stop Banner Timet at Hover on Slide on/off

                    thumbWidth: 100, // Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
                    thumbHeight: 50,
                    thumbAmount: 4,
                    hideThumbs: 200,
                    navigationType: "none", //bullet, thumb, none, both	 (No Shadow in Fullwidth Version !)
                    navigationArrows: "none", //nexttobullets, verticalcentered, none
                    navigationStyle: "round", //round,square,navbar

                    touchenabled: "on", // Enable Swipe Function : on/off

                    navOffsetHorizontal: 0,
                    navOffsetVertical: 20,
                    fullWidth: "on",
                    shadow: 0								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

                });

    });


</script>
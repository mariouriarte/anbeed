<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<script type="text/javascript">
    $( "#contact" ).addClass( "current" );
</script>

<div class="center_content_pages">
    <div class="financial-application-form">
         <h2>Buzón de Información y Sugerencias</h2>

         <p>
            A través de este formulario usted podra contactarse directamente con nuestro personal. Mediante este formulario puede solicitar información de nuestros servicios y nos comunicaremos con usted a la brevedad posible.
         </p>
         <p>
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
                    <p>
                    Publicamos los comentarios y experiencias de clientes que solicitaron nuestros servicios.
                    </p>
                        <?php $q = Doctrine_Query::create()
                                ->from('Satisfaccion s')
                                ->innerJoin('s.Empresa e');
                        $empresas = $q->fetchArray();
                        ?>
                    <?php foreach($empresas as $empresa)
                    {?>
                    <div class="testbox">
                    <h4><?php echo $empresa['empresa_id']?>  </h4>
                    <p>
                    <?php echo $empresa['comentario']?>
                    </p>
                    </div>         
                    <?php 
                    }
                    ?>
             </div>
    
    <div class="clear"></div>
</div>

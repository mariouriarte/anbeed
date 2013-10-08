<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>
<?php use_helper('Date') ?>

<form action="<?php echo url_for('coments/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tbody>
      <?php echo $form->renderGlobalErrors();
      $tarea = $sf_user->getAttribute('tarea');
      $lugar_tarea = $sf_user->getAttribute('lugar_tarea');
      $estado = $sf_user->getAttribute('estado');
      
      $comentarios =  $tarea->ComentarioTarea;
      
      ?><table class="tabla-comentarios"><?php
      foreach ($comentarios as $comentario)
      {
          ?>
            
                <tr>
                    <th id="tarea">
                        <?php echo $comentario->Tarea; ?>
                    </th>
                    <th id="creator">
                        <?php echo $comentario->getCreator(); ?>
                    </th>
                    <th id="creatorat">
                        <?php echo format_date($comentario->getCreatedAt(), 'dd/M/yyyy h:m:s'); ?>
                    </th>
                    <th id="acciones"> Acciones</th>
                </tr>
                <tr>
                    <td colspan="3">
                        <?php echo $comentario; ?>
                    </td>
                    <?php if($comentario->getCreatedBy() == $sf_user->getGuardUser()->getId()):?>
                    <td>
                        <ul class="sf_admin_td_actions">
                            <li class="sf_admin_action_edit">
                                <?php echo link_to('Editar','coments/edit?id='.$comentario->getId()) ?>
                            </li>
                            <li class="sf_admin_action_delete">
                                <?php echo link_to('Eliminar', 'coments/delete?id='.$comentario->getId(), 'confirm=¿Está seguro?') ?>
                            </li>       
                        </ul>
                    </td>
                    <?php else: ?>
                        <td></td>
                    <?php endif; ?>

                </tr>
                
             
      <?php
      }?>  
      <tr>
          <td colspan="4">
          <?php echo $form['comentario']->renderError() ?>
          <?php echo $form['comentario'] ?>
        </td>
      </tr>
      </table> 
    </tbody>
    <tr>
        
        <td colspan="2">
          <ul class="sf_admin_actions">
            <?php if (!$form->getObject()->isNew()): ?>
            <li class="sf_admin_action_delete">
                <?php echo link_to('Borrar', 'coments/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
            </li>
            <?php endif; ?>
            <li class="sf_admin_action_list">
                <a href="<?php echo url_for($lugar_tarea.'/index?estado='.$estado) ?>">Volver al listado</a>
            </li>
            <li class="sf_admin_action_save">
                <input type="submit" name="save_and_add" value="Guardar" />
            </li>
        </ul>
        </td>
      </tr>
  </table>
</form>
<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('form706/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('formulario706/index') ?>">Volver al listado</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Borrar', 'form706/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Etas seguro?')) ?>
          <?php endif; ?>
          <input type="submit" value="Guardar" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['fecha']->renderLabel() ?></th>
        <td>
          <?php echo $form['fecha']->renderError() ?>
          <?php echo $form['fecha'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['higiene_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['higiene_id']->renderError() ?>
          <?php echo $form['higiene_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['vigencia']->renderLabel() ?></th>
        <td>
          <?php echo $form['vigencia']->renderError() ?>
          <?php echo $form['vigencia'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fecha_inicio_vigencia']->renderLabel() ?></th>
        <td>
          <?php echo $form['fecha_inicio_vigencia']->renderError() ?>
          <?php echo $form['fecha_inicio_vigencia'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['numero_ruta']->renderLabel() ?></th>
        <td>
          <?php echo $form['numero_ruta']->renderError() ?>
          <?php echo $form['numero_ruta'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['tipo_tramite_formulario_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['tipo_tramite_formulario_id']->renderError() ?>
          <?php echo $form['tipo_tramite_formulario_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['datos']->renderLabel() ?></th>
        <td>
          <?php echo $form['datos']->renderError() ?>
          <?php echo $form['datos'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['datos_titular']->renderLabel() ?></th>
        <td>
          <?php echo $form['datos_titular']->renderError() ?>
          <?php echo $form['datos_titular'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['maquila_embasador']->renderLabel() ?></th>
        <td>
          <?php echo $form['maquila_embasador']->renderError() ?>
          <?php echo $form['maquila_embasador'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['maquila_empacador']->renderLabel() ?></th>
        <td>
          <?php echo $form['maquila_empacador']->renderError() ?>
          <?php echo $form['maquila_empacador'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['maquila_acondicionador']->renderLabel() ?></th>
        <td>
          <?php echo $form['maquila_acondicionador']->renderError() ?>
          <?php echo $form['maquila_acondicionador'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['maquila_fabricado_para']->renderLabel() ?></th>
        <td>
          <?php echo $form['maquila_fabricado_para']->renderError() ?>
          <?php echo $form['maquila_fabricado_para'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>

<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('form11/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('form11/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'form11/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['formulario_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['formulario_id']->renderError() ?>
          <?php echo $form['formulario_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fecha']->renderLabel() ?></th>
        <td>
          <?php echo $form['fecha']->renderError() ?>
          <?php echo $form['fecha'] ?>
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
        <th><?php echo $form['empresa_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['empresa_id']->renderError() ?>
          <?php echo $form['empresa_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['tipo_despacho_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['tipo_despacho_id']->renderError() ?>
          <?php echo $form['tipo_despacho_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['otro']->renderLabel() ?></th>
        <td>
          <?php echo $form['otro']->renderError() ?>
          <?php echo $form['otro'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['sustancias_quimicas']->renderLabel() ?></th>
        <td>
          <?php echo $form['sustancias_quimicas']->renderError() ?>
          <?php echo $form['sustancias_quimicas'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['licencia_previa']->renderLabel() ?></th>
        <td>
          <?php echo $form['licencia_previa']->renderError() ?>
          <?php echo $form['licencia_previa'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['licencia_resolucion']->renderLabel() ?></th>
        <td>
          <?php echo $form['licencia_resolucion']->renderError() ?>
          <?php echo $form['licencia_resolucion'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['licencia_fecha']->renderLabel() ?></th>
        <td>
          <?php echo $form['licencia_fecha']->renderError() ?>
          <?php echo $form['licencia_fecha'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['numero_item']->renderLabel() ?></th>
        <td>
          <?php echo $form['numero_item']->renderError() ?>
          <?php echo $form['numero_item'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['foja']->renderLabel() ?></th>
        <td>
          <?php echo $form['foja']->renderError() ?>
          <?php echo $form['foja'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['pais_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['pais_id']->renderError() ?>
          <?php echo $form['pais_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['factura']->renderLabel() ?></th>
        <td>
          <?php echo $form['factura']->renderError() ?>
          <?php echo $form['factura'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['factura_fecha']->renderLabel() ?></th>
        <td>
          <?php echo $form['factura_fecha']->renderError() ?>
          <?php echo $form['factura_fecha'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['para']->renderLabel() ?></th>
        <td>
          <?php echo $form['para']->renderError() ?>
          <?php echo $form['para'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['created_at']->renderLabel() ?></th>
        <td>
          <?php echo $form['created_at']->renderError() ?>
          <?php echo $form['created_at'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['updated_at']->renderLabel() ?></th>
        <td>
          <?php echo $form['updated_at']->renderError() ?>
          <?php echo $form['updated_at'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>

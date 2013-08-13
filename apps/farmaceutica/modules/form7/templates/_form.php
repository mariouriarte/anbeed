<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>
<?php use_stylesheet('formulario_decision.css') ?>

<div class="content-info-empresa">
    <?php $empresa = $sf_user->getAttribute('empresa'); ?>
    <?php include_partial('empresas/info_empresa', array('empresa' => $empresa)) ?>
</div>
<form action="<?php echo url_for('form7/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>

<table bordercolor="#FFFFFF">
    <tr>
        <th>Seleccione el Producto</th>
        <td></td>
    </tr>
    <tr>
        <th>Fecha </th>
        <td><?php echo $form['fecha']->renderError() ?>
          <?php echo $form['fecha'] ?>
        </td>
    </tr>
</table>

<div class="container-form-decision">
  <table class="tbl-form-decision">
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
          <th> Dr(a) </th>
          <td><? echo $empresa->RegenteFarmaceutico->Persona->getNombre();
          echo $empresa->RegenteFarmaceutico->Persona->getApPaterno();
          echo $empresa->RegenteFarmaceutico->Persona->getApMaterno();?></td>
      <tr>
          <th> Con Matricula No. </th>
          <td><? echo $empresa->RegenteFarmaceutico->getMatriculaProfesional();?></td>
      </tr>
      <tr>
          <th> Regente Farmacéutico de </th>
          <td><? echo $empresa;?></td>
      </tr>
      <tr>
          <th colspan="2" class="celda-entera"> Solicita a la Comisión Farmacológica Nacional la calificación del producto de: </th>
      </tr>
      <tr>
        <td></td>
        <td>
          <?php echo $form['tipo_calificacion_id']->renderError() ?>
          <?php echo $form['tipo_calificacion_id'] ?>
        </td>
      </tr>
      <tr>
          <th> Nombre Comercial: </th>
          <td></td>
      </tr>
      <tr>
          <th>Nombre Generico (D.C.I.): </th>
          <td></td>
      </tr>
      <tr>
          <th>Laboratorio Productor: </th>
          <td></td>
      </tr>
      <tr>
          <th>Forma Farmacéutica: </th>
          <td></td>
      </tr>
      <tr>
          <th>Concentración: </th>
          <td></td>
      </tr>
      <tr>
        <th>Vía de Administración: </th>
        <td>
          <?php echo $form['via_administracion_id']->renderError() ?>
          <?php echo $form['via_administracion_id'] ?>
        </td>
      </tr>
      <tr>
        <th>Acción terapéutica: </th>
        <td>
          <?php echo $form['accion_terapeutica']->renderError() ?>
          <?php echo $form['accion_terapeutica'] ?>
        </td>
      </tr>
      <tr>
        <th>Dosis: </th>
        <td>
          <?php echo $form['dosis']->renderError() ?>
          <?php echo $form['dosis'] ?>
        </td>
      </tr>
      <tr>
        <th>Indicaciones: </th>
        <td>
          <?php echo $form['indicaciones']->renderError() ?>
          <?php echo $form['indicaciones'] ?>
        </td>
      </tr>
      <tr>
        <th>Contraindicaciones: </th>
        <td>
          <?php echo $form['contraindicaciones']->renderError() ?>
          <?php echo $form['contraindicaciones'] ?>
        </td>
      </tr>
      <tr>
        <th>Precauciones: </th>
        <td>
          <?php echo $form['precauciones']->renderError() ?>
          <?php echo $form['precauciones'] ?>
        </td>
      </tr>
      <tr>
        <th>Efectos secundarios/Interacciones: </th>
        <td>
          <?php echo $form['efectos_secundarios']->renderError() ?>
          <?php echo $form['efectos_secundarios'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</div>
<table bordercolor="#FFFFFF" align="center">
    <tr>
        <td><font size="4"><b>DATOS ADICIONALES DEL FORMULARIO</b></font></td>
    </tr>
</table>

<div class="container-form-decision">
  <table class="tbl-form-decision">
    <tbody>
      <tr>
        <th>Tiempo de Vigencia</th>
        <td>
          <?php echo $form['vigencia']->renderError() ?>
          <?php echo $form['vigencia'] ?>
        </td>
      </tr>
      <tr>
        <th>Fecha de inicio de vigencia</th>
        <td>
          <?php echo $form['fecha_inicio_vigencia']->renderError() ?>
          <?php echo $form['fecha_inicio_vigencia'] ?>
        </td>
      </tr>
      <tr>
        <th>Reverencia aval</th>
        <td>
          <?php echo $form['referencia_aval']->renderError() ?>
          <?php echo $form['referencia_aval'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</div>
<div class="container-form-decision">
  <table class="tbl-form-decision">
    <tbody>
      <tr>
        <th>Observaciones</th>
        <td>
          <?php echo $form['observaciones']->renderError() ?>
          <?php echo $form['observaciones'] ?>
        </td>
      </tr>
      <tr>
        <th>La Comisión Farmacológica Nacional </th>
        <td>
          <?php echo $form['comision']->renderError() ?>
          <?php echo $form['comision'] ?> solicita mayor información
        </td>
      </tr>
      <tr>
        <th>Por consiguiente el citado producto es </th>
        <td>
          <?php echo $form['calificacion']->renderError() ?>
          <?php echo $form['calificacion'] ?> pudiendo proseguir con el correspondiente trámite de inscripción y/o reinscripción
        </td>
      </tr>
    </tbody>
  </table>
</div>

<?php echo $form->renderHiddenFields(false) ?>          
<ul class="sf_admin_actions">
    <?php if (!$form->getObject()->isNew()): ?>
    <li class="sf_admin_action_delete">
        <?php echo link_to('Borrar', 'form7/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Etas seguro?')) ?>
    </li>
    <?php endif; ?>
    <li class="sf_admin_action_list">
        <a href="<?php echo url_for('formulario7/index') ?>">Volver al listado</a>
    </li>
    <li class="sf_admin_action_save">
        <input type="submit" value="Guardar" />
    </li>
</ul>
</form>

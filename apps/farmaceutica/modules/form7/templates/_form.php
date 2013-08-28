<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>
<?php use_stylesheet('formulario_decision.css') ?>
<?php use_javascript('jquery-migrate.js') ?>


<script type='text/javascript'>

$(document).ready(function()
{
    //Formula Farmaceutica
    $('#autocomplete_formulario7_forma_farmaceutica_id')
        .after("&nbsp;&nbsp;<a href='/farmaceutica_dev.php/ffarmaceuticas/new' onclick=\"var w=window.open(this.href,'popupWindow','width=500,height=290,left=20,top=100,scrollbars=yes,menubar=no,resizable=no');w.focus();return false;\"><img src=\"/images/icons/add.svg\" title=\"Nueva Forma Farmaceutica\"/></a>");
    $('#autocomplete_formulario7_via_administracion_id')
        .after("&nbsp;&nbsp;<a href='/farmaceutica_dev.php/administraciones/new' onclick=\"var w=window.open(this.href,'popupWindow','width=500,height=290,left=20,top=100,scrollbars=yes,menubar=no,resizable=no');w.focus();return false;\"><img src=\"/images/icons/add.svg\" title=\"Nueva Via de Administración\"/></a>");
});
</script>

<?php 
$tabla = $sf_user->getAttribute('tabla');
if($tabla == 'medicamento')
    $producto = $sf_user->getAttribute('medicamento');
if($tabla == 'reactivo')
    $producto = $sf_user->getAttribute('reactivo');
if($tabla == 'dispositivo_medico')
    $producto = $sf_user->getAttribute('dispositivo_medico');
if($tabla == 'cosmetico')
    $producto = $sf_user->getAttribute('cosmetico');
if($tabla == 'higiene')
    $producto = $sf_user->getAttribute('higiene');
?>
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
          <td><?php echo $empresa->RegenteFarmaceutico;?></td>
      <tr>
          <th> Con Matricula No. </th>
          <td><?php echo $empresa->RegenteFarmaceutico->getMatriculaProfesional();?></td>
      </tr>
      <tr>
          <th> Regente Farmacéutico de </th>
          <td><?php echo $empresa;?></td>
      </tr>
      <tr>
          <th colspan="2" class="celda-entera"> Solicita a la Comisión Farmacológica Nacional la calificación del producto de: </th>
      </tr>
      <tr>
        <th></th>
        <td>
          <?php echo $form['tipo_calificacion_id']->renderError() ?>
          <?php echo $form['tipo_calificacion_id'] ?>
        </td>
      </tr>
      <tr>
          <th> Nombre Comercial: </th>
          <td><?php 
                if($tabla == 'medicamento')
                    echo $producto-> getNombreComercial();
                if($tabla == 'reactivo')
                    echo $producto-> getNombreComercial();
                if($tabla == 'dispositivo_medico')
                    echo $producto-> getNombreComercial();
                if($tabla == 'cosmetico')
                    echo $producto-> getMarca();
                if($tabla == 'higiene')
                    echo $producto-> getMarca();
          ?></td>
      </tr>
      <tr>
          <th>Nombre Generico (D.C.I.): </th>
          <td><?php if($tabla == 'medicamento')
                    echo $producto -> getNombreGenerico();
                if($tabla == 'dispositivo_medico')
                    echo $producto-> getNombreGenerico();
                if($tabla == 'cosmetico')
                    echo $producto-> getNombre();
                if($tabla == 'higiene')
                    echo $producto-> getNombre();
          ?></td>
      </tr>
      <tr>
          <th>Laboratorio Productor: </th>
          <td> <?php echo $producto-> LaboratorioFabricante?></td>
      </tr>
      <tr>
          <th>Forma Farmacéutica: </th>
          <td><?php
                if($tabla == 'medicamento')
                    echo $producto -> getFormaFarmaceutica();
                else {
                    echo $form['forma_farmaceutica_id']->renderError();
                    echo $form['forma_farmaceutica_id'];
                }
           ?></td>
      </tr>
      <tr>
          <th>Concentración: </th>
          <td>
            <?php echo $form['concentracion']->renderError() ?>
            <?php echo $form['concentracion'] ?>
          </td>
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
          <?php echo $form['comision'] ?>
            <span class="help-descripcion-tabla">solicita mayor información</span>
        </td>
      </tr>
      <tr>
        <th>Por consiguiente el citado producto es </th>
        <td>
          <?php echo $form['calificacion']->renderError() ?>
          <?php echo $form['calificacion'] ?> 
          <span class="help-descripcion-tabla">pudiendo proseguir con el correspondiente trámite de inscripción y/o reinscripción </spam>
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
        <a href="<?php echo url_for('formulario7/index') ?>">Listar</a>
    </li>
    <li class="sf_admin_action_save">
        <input type="submit" value="Guardar" />
    </li>
</ul>
</form>

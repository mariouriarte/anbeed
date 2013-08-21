<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>
<?php use_stylesheet('formulario_decision.css') ?>

<div class="content-info-empresa">
    <?php $empresa = $sf_user->getAttribute('empresa'); ?>
    <?php include_partial('empresas/info_empresa', array('empresa' => $empresa)) ?>
</div>
<form action="<?php echo url_for('form11/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
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
          <th> A solicitud expresa presentada por Sr. (a) </th>
          <td><? echo $empresa->RepresentanteLegal;?></td>
      </tr>
      <tr>
          <th> con C.I. </th>
          <td> <? echo $empresa->RepresentanteLegal-> Persona->getCi();?> </td>
      </tr>
      <tr>
          <th> y Dr. (a) </th>
          <td><? echo $empresa->RegenteFarmaceutico;?></td>
      </tr>
      <tr>
          <th> con Matricula Profesional N° </th>
          <td><? echo $empresa->RegenteFarmaceutico-> getMatriculaProfesional();?></td>
      </tr>
      <tr>
          <th> representante legal y regente farmacéutico (a) respectivamente de </th>
          <td><? echo $empresa; ?></td>
      </tr>
      <tr>
          <th> Empresa legalmente establecida mediante Resolucion Ministerial N° </th>
          <td><? echo $empresa-> getNumResolucion();?></td>
      </tr>
      <tr>
          <th> de fecha </th>
          <td><? echo FechaEspanol($empresa-> getFechaResolucion());?></td>
      </tr>
      <tr>
        <th colspan="2" class="celda-entera"> Requiriendo autorización para DESPACHO ADUANERO de : </th>
      </tr>
      <tr>
        <th></th>
        <td>
          <?php echo $form['tipo_despacho_id']->renderError() ?>
          <?php echo $form['tipo_despacho_id'] ?>  
          OTRO: 
          <?php echo $form['otro']->renderError() ?>
          <?php echo $form['otro'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</div>

<table bordercolor="#FFFFFF" align="center">
    <tr>
        <td>LA UNIDAD DE MEDICAMENTOS Y TECNOLOGÍA EN SALUD DEL MINISTERIO DE SALUD Y DEPORTES</td>
    </tr>
</table>

<table bordercolor="#FFFFFF">
    <tr>
        <td><font size="4"><b>CERTIFICA: </b></font></td>
    </tr>
</table>

<div class="container-form-decision">
  <table class="tbl-form-decision">
    <tbody>
      <tr>
          <th> Que la firma </th>
          <td><? echo $empresa; ?></td>
      </tr>
      <tr>
          <th colspan="2" class="celda-entera"> de esta plaza ha dado 
              cumplimiento a normas legales de importación contenidas en la ley 
              del medicamento N° 1737 de fecha 17 de diciembre de 1996 y su 
              decreto supremo reglamentario N° 25235 de fecha 30 de  noviembre
              de 1998.
          </th>
      </tr>
      <tr>
        <th> Que los productos pertenecen al grupo de sustancias
              quimicas controladas, psicotrópicos y estupefacientes. </th>
        <td>
          <?php echo $form['sustancias_quimicas']->renderError() ?>
          <?php echo $form['sustancias_quimicas'] ?>
        </td>
      </tr>
      <tr>
        <th> por lo tanto requieren licencia previa de importación </th>
        <td>
          <?php echo $form['licencia_previa']->renderError() ?>
          <?php echo $form['licencia_previa'] ?> 
        </td>
      </tr>
      <tr>
        <th> Otorgada mediante resolución ministerial N° </th>
        <td>
          <?php echo $form['licencia_resolucion']->renderError() ?>
          <?php echo $form['licencia_resolucion'] ?>
        </td>
      </tr>
      <tr>
        <th> de fecha </th>
        <td>
          <?php echo $form['licencia_fecha']->renderError() ?>
          <?php echo $form['licencia_fecha'] ?>
        </td>
      </tr>
      <tr>
        <th> Que los items</th>
        <td>
          <?php echo $form['numero_item']->renderError() ?>
          <?php echo $form['numero_item'] ?> 
        </td>
      </tr>
      <tr>
        <th> Detallados en fojas </th>
        <td>
          <?php echo $form['foja']->renderError() ?>
          <?php echo $form['foja'] ?>
        </td>
      </tr>
      <tr>
        <th> Procedentes de </th>
        <td>
          <?php echo $form['pais_id']->renderError() ?>
          <?php echo $form['pais_id'] ?>
        </td>
      </tr>
      <tr>
        <th> Importados con factura N° </th>
        <td>
          <?php echo $form['factura']->renderError() ?>
          <?php echo $form['factura'] ?>
        </td>
      </tr>
      <tr>
        <th> De fecha </th>
        <td>
          <?php echo $form['factura_fecha']->renderError() ?>
          <?php echo $form['factura_fecha'] ?>
        </td>
      </tr>
      <tr>
          <th colspan="2" class="celda-entera"> Han dado cumplimiento a requisitos 
              establecidos por el D.S.R. 25235, artículos 42, 43 y 46. 
          </th>
      </tr>
    </tbody>
  </table>
</div>

<table bordercolor="#FFFFFF">
    <tr>
        <td>POR TANTO:</td>
    </tr>
</table>

<div class="container-form-decision">
  <table class="tbl-form-decision">
    <tbody>
      <tr>
        <th> La unidad de medicamentos y tecnologia en salud del ministerio de
             salud y deportes otorga el presente certificado que autoriza el
             despacho aduanero solicitado de los productos detallados a
             continuación, por tratarse de
        </th>
        <td>

        </td>
      </tr>
      <tr>
        <th> Para su </th>
        <td>
          <?php echo $form['para']->renderError() ?>
          <?php echo $form['para'] ?>
        </td>
      </tr>
      <tr>
          <th colspan="2" class="celda-entera"> en todo el territorio nacional.</th>
      </tr>
      <tr>
          <th colspan="2" class="celda-entera"> El presente certificado tiene 
              validez por una sola vez y tendrá vigencia de noventa (90) días a
              partir de la fecha de su emisión.
          </th>
      </tr>
    </tbody>
  </table>
</div>

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
    </tbody>
  </table>
</div>

<?php echo $form->renderHiddenFields(false) ?>          
<ul class="sf_admin_actions">
    <?php if (!$form->getObject()->isNew()): ?>
    <li class="sf_admin_action_delete">
        <?php echo link_to('Borrar', 'form11/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Etas seguro?')) ?>
    </li>
    <?php endif; ?>
    <li class="sf_admin_action_list">
        <a href="<?php echo url_for('formulario11/index') ?>">Volver a la lista</a>
    </li>
    <li class="sf_admin_action_save">
        <input type="submit" value="Guardar" />
    </li>
</ul>
</form>

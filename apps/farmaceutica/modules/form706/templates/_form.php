<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>
<?php use_stylesheet('formulario_decision.css') ?>
<?php // use_javascript('/sfDependentSelectPlugin/js/SelectDependiente.min.js') ?>
<?php  use_javascript('/js/jquery-migrate.js') ?>

<?php $higiene = $sf_user->getAttribute('higiene'); ?>
<div class="content-info-empresa">
    <?php $empresa = $sf_user->getAttribute('empresa'); ?>
    <?php include_partial('formulario706/list_header', array('empresa' => $empresa)) ?>
</div>

<form action="<?php echo url_for('form706/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
<div class="container-form-decision">
  <table class="tbl-form-decision">
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <td colspan="2" class="celda-entera celda-abajo">
          <?php echo $form['tipo_tramite_formulario_id']->renderError() ?>
          <?php echo $form['tipo_tramite_formulario_id'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</div>
      
<div class="container-form-decision">
  <table class="tbl-form-decision">
    <thead>
      <tr>
        <th>I. DATOS DEL</th>
        <td class="lista-linea">
          <?php echo $form['datos']->renderError() ?>
          <?php echo $form['datos'] ?>
          <span class="help-descripcion-tabla">
            Artículo 7, numeral 1, literales a) y c); y Artículo 12 de la Decisión 706
          </span>
        </td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>Nombre o razón social</th>
        <td><?php echo $higiene->Empresa ?></td>
      </tr>
      <tr>
        <th>Domicilio o dirección</th>
        <td><?php echo $higiene->Empresa->getDireccion() ?></td>
      </tr>
      <tr>
          <th>Ciudad / Distrito / Provincia / Departamento</th>
<<<<<<< HEAD
          <td><?php echo $higiene->Empresa->Ciudad->getNombre() ?></td>
      </tr>
      <tr>
        <th>País</th>
        <td><?php  echo $higiene->Empresa->Ciudad->Pais->getNombre() ?></td>
=======
          <td><?php echo $higiene->Empresa->Ciudad->getNombre();
          ?></td>
      </tr>
      <tr>
        <th>País</th>
        <td><?php echo $higiene->Empresa->Ciudad->Pais->getNombre(); ?></td>
>>>>>>> pdf706b
      </tr>
      <tr>
        <th>Teléfono</th>
        <td><?php  echo $higiene->Empresa->getTelefono1() ." - ". $higiene->Empresa->getTelefono2() ?></td>
      </tr>
      <tr>
        <th>Fax</th>
        <td><?php  echo $higiene->Empresa->getFax() ?></td>
      </tr>
      <tr>
        <th>Email</th>
        <td><?php  echo $higiene->Empresa->getEmail() ?></td>
      </tr>
      <tr>
          <th>Nombre del</th>
          <td class="lista-linea">
            <?php echo $form['datos_titular']->renderError() ?>
            <?php echo $form['datos_titular'] ?>
          </td>
      </tr>
      <tr>
          <td colspan="2" class="celda-entera">
              <?php 
              if($higiene->Empresa->RepresentanteLegal->getId() == null)
              {
                  echo 'Establesca al representante legal de la empresa.';
              }else{
                  echo $higiene->Empresa->RepresentanteLegal;
              }
              ?>
          </td>
      </tr>
      <tr>
          <th>Teléfono</th>
          <td><?php  echo $higiene->Empresa->RepresentanteLegal->Persona->getTelefono() ?></td>
      </tr>
      <tr>
          <th>Email</th>
          <td><?php  echo $higiene->Empresa->RepresentanteLegal->Persona->getEmail() ?></td>
      </tr>
      <tr>
          <th>Responsable de la Comercialización</th>
          <td>
            <?php echo $form['rescom_nombre']->renderError() ?>
            <?php echo $form['rescom_nombre'] ?>
          </td>
      </tr>
      <tr>
          <th>Domicilio o dirección</th>
          <td>
            <?php echo $form['rescom_direccion']->renderError() ?>
            <?php echo $form['rescom_direccion'] ?>
          </td>
      </tr>
      <tr>
          <th>País</th>
          <td>
            <?php echo $form['pais_id']->renderError() ?>
            <?php echo $form['pais_id'] ?>
          </td>
      </tr>
      <tr>
          <th>Ciudad / Distrito / Provincia / Departamento</th>
          <td>
            <?php echo $form['rescom_ciudad_id']->renderError() ?>
            <?php echo $form['rescom_ciudad_id'] ?>
          </td>
      </tr>
      <tr>
          <th>Teléfono</th>
          <td>
            <?php echo $form['rescom_telefono']->renderError() ?>
            <?php echo $form['rescom_telefono'] ?>
          </td>
      </tr>
      <tr>
          <th>Email</th>
          <td>
            <?php echo $form['rescom_email']->renderError() ?>
            <?php echo $form['rescom_email'] ?>
          </td>
      </tr>
      <tr>
        <th class="celda-abajo"><?php echo $form['fecha']->renderLabel() ?></th>
        <td class="celda-abajo">
          <?php echo $form['fecha']->renderError() ?>
          <?php echo $form['fecha'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</div>

<div class="container-form-decision">
  <table class="tbl-form-decision">
    <thead>
      <tr>
          <th colspan="2">
            II. DATOS DEL FABRICANTE O FABRICANTES<br />
            <span class="help-descripcion-tabla">
              Artículo 7, numeral 1, literal c), y Artículo 12, segundo párrafo de la Decisión 706<br />
              (Envasador/empacador/acondicionador)
            </span>
          </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>Nombre o razón social</th>
        <td><?php echo $higiene->LaboratorioFabricante ?></td>
      </tr>
      <tr>
        <th>Domicilio o dirección</th>
        <td><?php echo $higiene->LaboratorioFabricante->getDireccion() ?></td>
      </tr>
      <tr>
          <th>Ciudad / Distrito / Provincia / Departamento</th>
          <td><?php echo $higiene->LaboratorioFabricante->Ciudad->getNombre() ?></td>
      </tr>
      <tr>
        <th>País</th>
        <td><?php echo $higiene->LaboratorioFabricante->Ciudad->Pais->getNombre() ?></td>
      </tr>
      <tr>
        <th>Teléfono</th>
        <td><?php echo $higiene->LaboratorioFabricante->getTelefono()?></td>
      </tr>
      <tr>
        <th>Fax</th>
        <td><?php echo $higiene->LaboratorioFabricante->getFax() ?></td>
      </tr>
      <tr>
        <th>Email</th>
        <td><?php echo $higiene->LaboratorioFabricante->getEmail() ?></td>
      </tr>
      <tr>
          <th colspan="2">Nombre del responsable médico</th>
      </tr>
      <tr>
          <td colspan="2" class="celda-entera">
              <?php 
              if($higiene->Empresa->RegenteFarmaceutico->getId() == null)
              {
                  echo 'Establesca al regente farmacéutico del laboratorio.';
              }else{
                  echo $higiene->Empresa->RegenteFarmaceutico;
              }
              ?>
          </td>
      </tr>
      <tr>
          <th>Teléfono</th>
          <td><?php echo $higiene->Empresa->RegenteFarmaceutico->Persona->getTelefono() ?></td>
      </tr>
      <tr>
          <th>E-mail</th>
          <td><?php echo $higiene->Empresa->RegenteFarmaceutico->Persona->getEmail() ?></td>
      </tr>
      <tr>
          <th>Número de Registro o Colegiatura Profesional</th>
          <td><?php echo $higiene->Empresa->RegenteFarmaceutico->getCarnetColegiado() ?></td>
      </tr>
      <tr>
          <th colspan="2">En caso de maquila:</th>
      </tr>
      <tr>
        <th><?php echo $form['maquila_tipo']->renderLabel() ?></th>
        <td class="lista-linea">
          <?php echo $form['maquila_tipo']->renderError() ?>
          <?php echo $form['maquila_tipo'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['maquila']->renderLabel() ?></th>
        <td>
          <?php echo $form['maquila']->renderError() ?>
          <?php echo $form['maquila'] ?>
        </td>
      </tr>
      <tr>
        <th class="celda-abajo"><?php echo "Fabricado para:" ?></th>
        <td class="celda-abajo">
          <?php echo $form['maquila_fabricado']->renderError() ?>
          <?php echo $form['maquila_fabricado'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</div>

<div class="container-form-decision">
  <table class="tbl-form-decision">
    </tbody>
      <tr>
          <th colspan="2">III. DATOS GENERALES DEL PRODUCTO</th>
      </tr>
      <tr>
          <th>Nombre del producto</th>
          <td><?php echo $higiene ?></td>
      </tr>
      <tr>
          <th>Tipo</th>
          <td><?php echo $higiene->getNombreDetalle() ?></td>
      </tr>
      <tr>
          <th>Grupo</th>
<<<<<<< HEAD
          <td><?php echo $higiene->getGrupoHigieneId() ?></td>
=======
          <td><?php //echo $higiene->getGrupoHigiene() ?></td>
>>>>>>> pdf706
      </tr>
      <tr>
          <th>variedades</th>
          <td><?php echo $higiene->getVariedades() ?></td>
      </tr>
      <tr>
          <th>Marca</th>
          <td><?php echo $higiene->getMarca() ?></td>
      </tr>
      <tr>
          <th>Código de identificación de la NSO:</th>
          <td><?php echo $higiene->getCodigoNso()?></td>
      </tr>
      <tr>
          <th>Número de Expediente:</th>
          <td><?php echo $higiene->getExpediente()?></td>
      </tr>
      <tr>
          <th>Vigencia del Código de identificación de la NSO:</th>
          <td><?php echo $higiene->getVigenciaNso()?></td>
      </tr>
      <tr>
          <th class="celda-abajo">País que emitió el Código de identificación de la NSO:</th>
          <td class="celda-abajo">
              <?php 
              if ($higiene->getPaisId() != NULL)
                  echo $higiene->Pais 
              ?>
          </td>
      </tr>
    </tbody>
  </table>
</div>
    
<div class="container-form-decision">
  <table class="tbl-form-decision">
    <tbody>
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
        <th class="celda-abajo"><?php echo $form['numero_ruta']->renderLabel() ?></th>
        <td class="celda-abajo">
          <?php echo $form['numero_ruta']->renderError() ?>
          <?php echo $form['numero_ruta'] ?>
        </td>
      </tr>
      </tr>
    </tbody>
  </table>
</div>


<?php echo $form->renderHiddenFields(false) ?>          
<ul class="sf_admin_actions">
    <?php if (!$form->getObject()->isNew()): ?>
    <li class="sf_admin_action_delete">
        <?php echo link_to('Borrar', 'form706/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Etas seguro?')) ?>
    </li>
    <?php endif; ?>
    <li class="sf_admin_action_list">
        <a href="<?php echo url_for('formulario706/index') ?>">Volver al listado</a>
    </li>
    <li class="sf_admin_action_save">
        <input type="submit" value="Guardar" />
    </li>
</ul>
</form>


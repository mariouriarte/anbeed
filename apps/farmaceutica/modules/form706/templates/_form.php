<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<?php $higiene = $sf_user->getAttribute('higiene'); ?>
<div class="content-info-empresa">
    <?php $empresa = $sf_user->getAttribute('empresa'); ?>
    <?php include_partial('empresas/info_empresa', array('empresa' => $empresa)) ?>
</div>

<form action="<?php echo url_for('form706/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table class="tablas_form">
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
          <td colspan="2">
          <?php echo $form['tipo_tramite_formulario_id']->renderError() ?>
          <?php echo $form['tipo_tramite_formulario_id'] ?>
        </td>
      </tr>
      <tr>
        <th>I. DATOS DEL</th>
        <td>
          <?php echo $form['datos']->renderError() ?>
          <?php echo $form['datos'] ?>
        </td>
      </tr>
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
          <td><?php echo $higiene->Empresa->Ciudad ?></td>
      </tr>
      <tr>
        <th>País</th>
        <td><?php  echo $higiene->Empresa->Ciudad->Pais ?></td>
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
          <td>
          <?php echo $form['datos_titular']->renderError() ?>
          <?php echo $form['datos_titular'] ?>
            </td>
      </tr>
      <tr>
          <td colspan="2"><?php  echo $higiene->Empresa->RepresentanteLegal ?></td>
      </tr>
      <tr>
          <th>Teléfono</th>
          <td colspan="2"><?php  echo $higiene->Empresa->RepresentanteLegal->Persona->getTelefono() ?></td>
      </tr>
      <tr>
          <th>Email</th>
          <td colspan="2"><?php  echo $higiene->Empresa->RepresentanteLegal->Persona->getEmail() ?></td>
      </tr>
      <tr>
          <td colspan="2">Responsable de la Comercialización</td>
      </tr>
      <tr>
          <td colspan="2"><?php  echo $higiene->Empresa->RegenteFarmaceutico ?></td>
      </tr>
      <tr>
          <th>Domicilio o dirección</th>
          <td colspan="2"><?php  echo $higiene->Empresa->RegenteFarmaceutico->Persona->getDireccion() ?></td>
      </tr>
      <tr>
          <th>Ciudad / Distrito / Provincia / Departamento</th>
          <td></td>
      </tr>
      <tr>
          <th>País</th>
          <td></td>
      </tr>
      <tr>
          <th>Teléfono</th>
          <td colspan="2"><?php  echo $higiene->Empresa->RegenteFarmaceutico->Persona->getTelefono() ?></td>
      </tr>
      <tr>
          <th>Email</th>
          <td colspan="2"><?php  echo $higiene->Empresa->RegenteFarmaceutico->Persona->getEmail() ?></td>
      </tr>
      <tr>
        <th><?php echo $form['fecha']->renderLabel() ?></th>
        <td>
          <?php echo $form['fecha']->renderError() ?>
          <?php echo $form['fecha'] ?>
        </td>
      </tr>
      
      <!-- ------------------------------------------ -->
      
      <tr>
          <th colspan="2">II. DATOS DEL FABRICANTE O FABRICANTES</th>
      </tr>
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
          <td><?php echo $higiene->LaboratorioFabricante->Ciudad ?></td>
      </tr>
      <tr>
        <th>País</th>
        <td><?php echo $higiene->LaboratorioFabricante->Ciudad->Pais ?></td>
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
          <td colspan="2">Nombre del responsable médico</td>
      </tr>
      <tr>
          <td colspan="2"><?php echo $higiene->Empresa->RegenteFarmaceutico ?></td>
      </tr>
      <tr>
          <th>Teléfono</th>
          <td colspan="2"><?php echo $higiene->Empresa->RegenteFarmaceutico->Persona->getTelefono() ?></td>
      </tr>
      <tr>
          <th>E-mail</th>
          <td colspan="2"><?php echo $higiene->Empresa->RegenteFarmaceutico->Persona->getEmail() ?></td>
      </tr>
      <tr>
          <th>Número de Registro o Colegiatura Profesional</th>
          <td colspan="2"><?php echo $higiene->Empresa->RegenteFarmaceutico->getCarnetColegiado() ?></td>
      </tr>
      
      <!-- ------------------------------------------ -->
      
      <tr>
          <th>En caso de maquila:</th>
      </tr>
      <tr>
        <th><?php echo $form['maquila_embasador']->renderLabel() ?></th>
        <td>
          <?php echo $form['maquila_embasador']->renderError(); ?>
            <?php //ACA VERIFICAMOS SI TIENE EMBASADOR
//                $check1 = "";
//                if(($form['maquila_embasador']->getValue()) != NULL )
//                    $check1= "checked";?>
<!--            <input type="checkbox" //<?php //echo $check1?> onclick="habilita(1)">-->
                
              <?php 
                echo $form['maquila_embasador'];
              ?>
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
        <th><?php echo "Fabricado para:" ?></th>
        <td>
          <?php echo $form['maquila_fabricado_para']->renderError() ?>
          <?php echo $form['maquila_fabricado_para'] ?>
        </td>
      </tr>
      <tr>
          <th colspan="2">III. DATOS GENERALES DEL PRODUCTO</th>
      </tr>
      <tr>
          <th>Nombre del producto</th>
          <td><?php echo $higiene ?></td>
      </tr>
      <tr>
          <th>PHD</th>
          <td><?php echo $higiene->getPhd() ? 'X' : '' ?></td>
      </tr>
      <tr>
          <th>PAHP</th>
          <td><?php echo $higiene->getPahp() ? 'X' : '' ?></td>
      </tr>
      <tr>
          <th>Grupo</th>
          <td><?php echo $higiene->getGrupoHigiene() ?></td>
      </tr>
      <tr>
          <th>variedad</th>
          <td><?php echo $higiene->getVariedad() ?></td>
      </tr>
      <tr>
          <th>Marca</th>
          <td><?php echo $higiene->Marca ?></td>
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
          <th>País que emitió el Código de identificación de la NSO:</th>
          <td><?php if ($higiene->getPaisId()!=NULL)
                    echo $higiene->Pais ?></td>
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
      </tr>
    </tbody>
  </table>



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


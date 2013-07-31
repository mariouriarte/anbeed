<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>
<!--<script type="text/javascript">
function habilita(campo)
{
    if(campo == 1)
    {    
        if(document.form516.formulario516_maquila_embasador.disabled == true)
        {
            document.form516.formulario516_maquila_embasador.disabled = false;
        } 
        else
        {
            document.form516.formulario516_maquila_embasador.disabled = true; 
        }
    }   
    if(campo == 2)
    {    
        if(document.form516.formulario516_maquila_empacador.disabled == true)
        {
            document.form516.formulario516_maquila_empacador.disabled = false;
        } 
        else
        {
            document.form516.formulario516_maquila_empacador.disabled = true; 
        }
    }   
    if(campo == 3)
    {    
        if(document.form516.formulario516_maquila_acondicionador.disabled == true)
        {
            document.form516.formulario516_maquila_acondicionador.disabled = false;
        } 
        else
        {
            document.form516.formulario516_maquila_acondicionador.disabled = true; 
        }
    }   
} 
</script>-->
<?php $cosmeticos = $sf_user->getAttribute('cosmetico'); ?>
<div class="content-info-empresa">
    <?php include_partial('formulario516/list_header') ?>
</div>
<form name="form516" action="<?php echo url_for('form516/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
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
        <td><?php echo $cosmeticos->Empresa ?></td>
      </tr>
      <tr>
        <th>Domicilio o dirección</th>
        <td><?php echo $cosmeticos->Empresa->getDireccion() ?></td>
      </tr>
      <tr>
          <th>Ciudad / Distrito / Provincia / Departamento</th>
          <td><?php echo $cosmeticos->Empresa->Ciudad ?></td>
      </tr>
      <tr>
        <th>País</th>
        <td><?php  echo $cosmeticos->Empresa->Ciudad->Pais ?></td>
      </tr>
      <tr>
        <th>Teléfono</th>
        <td><?php  echo $cosmeticos->Empresa->getTelefono1() ." - ". $cosmeticos->Empresa->getTelefono2() ?></td>
      </tr>
      <tr>
        <th>Fax</th>
        <td><?php  echo $cosmeticos->Empresa->getFax() ?></td>
      </tr>
      <tr>
        <th>Email</th>
        <td><?php  echo $cosmeticos->Empresa->getEmail() ?></td>
      </tr>
      <tr>
          <th>Nombre del</th>  
          <td>
          <?php echo $form['datos_titular']->renderError() ?>
          <?php echo $form['datos_titular'] ?>
            </td>
      </tr>
      <tr>
          <td colspan="2"><?php  echo $cosmeticos->Empresa->RepresentanteLegal ?></td>
      </tr>
      <tr>
          <th>Teléfono</th>
          <td colspan="2"><?php  echo $cosmeticos->Empresa->RepresentanteLegal->Persona->getTelefono() ?></td>
      </tr>
      <tr>
          <th>Email</th>
          <td colspan="2"><?php  echo $cosmeticos->Empresa->RepresentanteLegal->Persona->getEmail() ?></td>
      </tr>
      <tr>
          <th>Nombre del</th>  
          <td>Responsable Técnico (Químico Farmacéutico)</td>
      </tr>
      <tr>
          <td colspan="2"><?php  echo $cosmeticos->Empresa->RegenteFarmaceutico ?></td>
      </tr>
      <tr>
          <th>Teléfono</th>
          <td colspan="2"><?php  echo $cosmeticos->Empresa->RegenteFarmaceutico->Persona->getTelefono() ?></td>
      </tr>
      <tr>
          <th>Email</th>
          <td colspan="2"><?php  echo $cosmeticos->Empresa->RegenteFarmaceutico->Persona->getEmail() ?></td>
      </tr>
      <tr>
        <th><?php echo $form['fecha']->renderLabel() ?></th>
        <td>
          <?php echo $form['fecha']->renderError() ?>
          <?php echo $form['fecha'] ?>
        </td>
      </tr>
      <tr>
          <th colspan="2">II. DATOS DEL FABRICANTE O FABRICANTES</th>
      </tr>
      <tr>
        <th>Nombre o razón social</th>
        <td><?php echo $cosmeticos->LaboratorioFabricante ?></td>
      </tr>
      <tr>
        <th>Domicilio o dirección</th>
        <td><?php echo $cosmeticos->LaboratorioFabricante->getDireccion() ?></td>
      </tr>
      <tr>
          <th>Ciudad / Distrito / Provincia / Departamento</th>
          <td><?php echo $cosmeticos->LaboratorioFabricante->Ciudad ?></td>
      </tr>
      <tr>
        <th>País</th>
        <td><?php  echo $cosmeticos->LaboratorioFabricante->Ciudad->Pais ?></td>
      </tr>
      <tr>
        <th>Teléfono</th>
        <td><?php  echo $cosmeticos->LaboratorioFabricante->getTelefono()?></td>
      </tr>
      <tr>
        <th>Fax</th>
        <td><?php  echo $cosmeticos->LaboratorioFabricante->getFax() ?></td>
      </tr>
      <tr>
        <th>Email</th>
        <td><?php  echo $cosmeticos->LaboratorioFabricante->getEmail() ?></td>
      </tr>
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
          <td><?php echo $cosmeticos ?></td>
      </tr>
      <tr>
          <th>Forma Cosmética</th>
          <td><?php echo $cosmeticos->FormaCosmetica ?></td>
      </tr>
      <tr>
          <th>Grupo Cosmético</th>
          <td><?php echo $cosmeticos->GrupoCosmetico ?></td>
      </tr>
      <tr>
          <th>Marca</th>
          <td><?php echo $cosmeticos->Marca ?></td>
      </tr>
      <tr>
          <th>Código de identificación de la NSO:</th>
          <td><?php echo $cosmeticos->getCodigoNso()?></td>
      </tr>
      <tr>
          <th>Número de Expediente:</th>
          <td><?php echo $cosmeticos->getExpediente()?></td>
      </tr>
      <tr>
          <th>Vigencia del Código de identificación de la NSO:</th>
          <td><?php echo $cosmeticos->getVigenciaNso()?></td>
      </tr>
      <tr>
          <th>País que emitió el Código de identificación de la NSO:</th>
          <td><?php if ($cosmeticos->getPaisId()!=NULL)
                    echo $cosmeticos->Pais ?></td>
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
        <?php echo link_to('Borrar', 'form516/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
    </li>
    <?php endif; ?>
    <li class="sf_admin_action_list">
        <a href="<?php echo url_for('formulario516/index') ?>">Volver al listado</a>
    </li>
    <li class="sf_admin_action_save">
        <input type="submit" value="Guardar" />
    </li>
</ul>
</form>

<?php use_stylesheet('sfDoctrinePlugin/css/default.css') ?>


<?php
$etapas = $form->Formulario->Etapa;
$form516 = $form->Cosmetico->Formulario516;
$cosmetico = $form->Cosmetico;
?>

<h2>Tramite <?php echo $form->Formulario ?></h2>

<div class="info-etapa etapa_<?php echo $etapas[0]->TipoEtapa->getId()?>">
    Etapa en <strong><?php echo $etapas[0]->TipoEtapa->getNombre(); ?></strong>
    <p><?php echo $etapas[0]->getDescripcion() ?></p>
</div>

<h2>Decisión 516 </h2>
<div>
    <table class="tabla-cliente">
        <tbody>
            <tr>
                <th>Fecha</th>
                <td><?php echo $form516[0]->getFecha(); ?></td>
            </tr>
            <tr>
                <th>Vigencia</th>
                <td><?php echo $form516[0]->getVigencia(); ?></td>
            </tr>
            <tr>
                <th>Fecha inicio vigencia</th>
                <td><?php echo $form516[0]->getFechaInicioVigencia(); ?></td>
            </tr>
            <tr>
                <th>Numero ruta</th>
                <td><?php echo $form516[0]->getNumeroRuta(); ?></td>
            </tr>
            <tr>
                <th>Tipo tramite formulario</th>
                <td><?php echo $form516[0]->TipoTramiteFormulario; ?></td>
            </tr>
            <tr>
                <th>Datos</th>
                <td><?php echo $form516[0]->getDatos(); ?></td>
            </tr>
            <tr>
                <th>datos_titular</th>
                <td><?php echo $form516[0]->getDatosTitular(); ?></td>
            </tr>
            <tr>
                <th>Maquila tipo</th>
                <td><?php echo $form516[0]->getMaquilaTipo(); ?></td>
            </tr>
            <tr>
                <th>Maquila</th>
                <td><?php echo $form516[0]->getMaquila(); ?></td>
            </tr>
            <tr>
                <th>Maquila fabricado</th>
                <td><?php echo $form516[0]->getMaquilaFabricado(); ?></td>
            </tr>
            <tr>
                <th>Información cambios</th>
                <td><?php echo $form516[0]->getInformacionCambios(); ?></td>
            </tr>
        </tbody>
    </table>
</div>
    
<h2>Cosmético</h2>
<div>
    <table class="tabla-cliente">
        <tbody>
            <tr>
                <th>Empresa</th>
                <td><?php echo $cosmetico->Empresa; ?></td>
            </tr>
            <tr>
                <th>Laboratorio fabricante</th>
                <td><?php echo $cosmetico->LaboratorioFabricante; ?></td>
            </tr>
            <tr>
                <th>Forma cosmética</th>
                <td><?php echo $cosmetico->FormaCosmetica; ?></td>
            </tr>
            <tr>
                <th>Grupo cosmético</th>
                <td><?php echo $cosmetico->GrupoCosmetico; ?></td>
            </tr>
            <tr>
                <th>Marca</th>
                <td><?php echo $cosmetico->getMarca(); ?></td>
            </tr>
            <tr>
                <th>País</th>
                <td><?php echo $cosmetico->Pais->getNombre(); ?></td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td><?php echo $cosmetico->getNombre(); ?></td>
            </tr>
            <tr>
                <th>Variedades</th>
                <td><?php echo $cosmetico->getVariedades(); ?></td>
            </tr>
            <tr>
                <th>Presentación</th>
                <td><?php echo $cosmetico->getPresentacion(); ?></td>
            </tr>
            <tr>
                <th>Código NSO</th>
                <td><?php echo $cosmetico->getCodigoNso(); ?></td>
            </tr>
            <tr>
                <th>Vigencia NSO</th>
                <td><?php echo $cosmetico->getVigenciaNso(); ?></td>
            </tr>
            <tr>
                <th>Expediente</th>
                <td><?php echo $cosmetico->getExpediente(); ?></td>
            </tr>
            <tr>
                <th>Registro sanitario</th>
                <td><?php echo $cosmetico->getRegistroSanitario(); ?></td>
            </tr>
            <tr>
                <th>Descripción</th>
                <td><?php echo $cosmetico->getDescripcion(); ?></td>
            </tr>
        </tbody>
    </table>
</div>

<ul class="sf_admin_actions">
    <li class="sf_admin_action_list">
        <a href="<?php echo url_for('form5/index') ?>">Volver al listado</a>
    </li>
    <?php if($etapas[0]->TipoEtapa->getId() == 1): ?>
        <li class="sf_admin_action_list">
            <?php echo link_to('Verificar formulario','form516/index') ?>
        </li>
    <?php endif; ?>
</ul>
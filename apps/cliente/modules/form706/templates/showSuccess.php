<?php use_stylesheet('sfDoctrinePlugin/css/default.css') ?>


<?php
$etapas = $form->Formulario->Etapa;
$form706 = $form->Higiene->Formulario706;
$higiene = $form->Higiene;
?>

<h2>Tramite <?php echo $form->Formulario ?></h2>

<div class="info-etapa etapa_<?php echo $etapas[0]->TipoEtapa->getId()?>">
    Etapa en <strong><?php echo $etapas[0]->TipoEtapa->getNombre(); ?></strong>
    <p><?php echo $etapas[0]->getDescripcion() ?></p>
</div>

<h2>Decisión 706</h2>
<div>
    <table class="tabla-cliente">
        <tbody>
            <tr>
                <th>Fecha</th>
                <td><?php echo $form706[0]->getFecha(); ?></td>
            </tr>
            <tr>
                <th>Higiene</th>
                <td><?php echo $form706[0]->Higiene; ?></td>
            </tr>
            <tr>
                <th>Vigencia</th>
                <td><?php echo $form706[0]->getVigencia(); ?></td>
            </tr>
            <tr>
                <th>Fecha inicio vigencia</th>
                <td><?php echo $form706[0]->getFechaInicioVigencia(); ?></td>
            </tr>
            <tr>
                <th>Numero ruta</th>
                <td><?php echo $form706[0]->getNumeroRuta(); ?></td>
            </tr>
            <tr>
                <th>Tipo tramite formulario</th>
                <td><?php echo $form706[0]->TipoTramiteFormulario; ?></td>
            </tr>
            <tr>
                <th>Datos</th>
                <td><?php echo $form706[0]->getDatos(); ?></td>
            </tr>
            <tr>
                <th>Datos titular</th>
                <td><?php echo $form706[0]->getDatosTitular(); ?></td>
            </tr>
            <tr>
                <th>Responsable comercial</th>
                <td><?php echo $form706[0]->getRescomNombre(); ?></td>
            </tr>
            <tr>
                <th>Responsable comercial dirección</th>
                <td><?php echo $form706[0]->getRescomDireccion(); ?></td>
            </tr>
            <tr>
                <th>Responsable comercial ciudad</th>
                <td><?php echo $form706[0]->Ciudad->getNombre(); ?></td>
            </tr>
            <tr>
                <th>Responsable comercial teléfono</th>
                <td><?php echo $form706[0]->getRescomTelefono(); ?></td>
            </tr>
            <tr>
                <th>Responsable comercial fax</th>
                <td><?php echo $form706[0]->getRescomFax(); ?></td>
            </tr>
            <tr>
                <th>Responsable comercial E-mail</th>
                <td><?php echo $form706[0]->getRescomEmail(); ?></td>
            </tr>
            <tr>
                <th>Maquila tipo</th>
                <td><?php echo $form706[0]->getMaquilaTipo(); ?></td>
            </tr>
            <tr>
                <th>Maquila</th>
                <td><?php echo $form706[0]->getMaquila(); ?></td>
            </tr>
            <tr>
                <th>Maquila fabricado</th>
                <td><?php echo $form706[0]->getMaquilaFabricado(); ?></td>
            </tr>
            <tr>
                <th>Información cambios</th>
                <td><?php echo $form706[0]->getInformacionCambios(); ?></td>
            </tr>
        </tbody>
    </table>
</div>

<h2>Higiene</h2>
<div>
    <table class="tabla-cliente">
        <tbody>
            <tr>
                <th>Empresa</th>
                <td><?php echo $higiene->Empresa; ?></td>
            </tr>
            <tr>
                <th>Laboratorio fabricante</th>
                <td><?php echo $higiene->LaboratorioFabricante; ?></td>
            </tr>
            <tr>
                <th>Grupo higiene</th>
                <td><?php echo $higiene->getGrupoHigiene(); ?></td>
            </tr>
            <tr>
                <th>Marca</th>
                <td><?php echo $higiene->getMarca(); ?></td>
            </tr>
            <tr>
                <th>País</th>
                <td><?php echo $higiene->Pais->getNombre(); ?></td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td><?php echo $higiene->getNombre(); ?></td>
            </tr>
            <tr>
                <th>Nombre detalle</th>
                <td><?php echo $higiene->getNombreDetalle(); ?></td>
            </tr>
            <tr>
                <th>variedades</th>
                <td><?php echo $higiene->getVariedades(); ?></td>
            </tr>
            <tr>
                <th>Presentación</th>
                <td><?php echo $higiene->getPresentacion(); ?></td>
            </tr>
            <tr>
                <th>Código NSO</th>
                <td><?php echo $higiene->getCodigoNso(); ?></td>
            </tr>
            <tr>
                <th>Vigencia NSO</th>
                <td><?php echo $higiene->getVigenciaNso(); ?></td>
            </tr>
            <tr>
                <th>Expediente</th>
                <td><?php echo $higiene->getExpediente(); ?></td>
            </tr>
            <tr>
                <th>Registro sanitario</th>
                <td><?php echo $higiene->getRegistroSanitario(); ?></td>
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
            <?php echo link_to('Verificar formulario','form706/index') ?>
        </li>
    <?php endif; ?>
</ul>
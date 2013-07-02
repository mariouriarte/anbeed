<?php use_stylesheet('portal.css') ?>

<?php slot('header-navegador') ?>
    <?php echo $empresa->getRazonSocial() ?>
<?php end_slot(); ?>

<?php slot('header-tools') ?>
    <table>
        <tbody>
            <tr>
                <th>Esta en el espacio</th>
                <td><?php echo $empresa->getRazonSocial() ?></td>
                <th>Representante Legal</th>
                <td><?php echo $empresa->RepresentanteLegal ?></td>
            <tr>
            <tr>
                <th>NIT</th>
                <td><?php echo $empresa->getNit() ?></td>
                <th>Regente Farmaceutico</th>
                <td><?php echo $empresa->RegenteFarmaceutico ?></td>
            <tr>
        </tbody>
    </table>
<?php end_slot(); ?>


<div class="portal">
    
    <ul class="acciones_lista">
        <li class="acciones_lista_list">
            <?php echo link_to('Volver al listado', 'empresas/index') ?>
        </li>
    </ul>
    <div class="linea">
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <h2 class="titulo"><img src="/images/icons/applications-debugging.png" />Administración</h2>
                    <div class="contenido">
                        <ul>
                            <li><?php echo link_to('Editar Empresa', 'empresas/edit?id=' . $empresa->getId()) ?></li>
                            
                            <li>
                                <?php if($empresa->RepresentanteLegal->Persona->getId()): ?>
                                    <?php echo link_to('Editar Representante Legal', 'personalegal/edit?id=' . $empresa->RepresentanteLegal->Persona->getId()) ?>
                                <?php else: ?>
                                    <?php echo link_to('Crear Representante Legal', 'personalegal/index') ?>
                                <?php endif; ?>
                            </li>
                            
                            <li><?php echo link_to('Editar Regente Farmaceútico', 'personaregente/edit?id=' . $empresa->RegenteFarmaceutico->Persona->getId()) ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <h2 class="titulo"><img src="/images/icons/applications-development.png" />Laboratorios</h2>
                    <div class="contenido">
                        <ul>
                            <li><a href="/farmaceutica_dev.php/laboratorios"><span>Laboratorios Fabricantes</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <h2 class="titulo"><img src="/images/icons/application-vnd.ms-powerpoint.png" />Medicamentos</h2>
                    <div class="contenido">
                        <ul>
                            <li><a href="/farmaceutica_dev.php/prodmed"><span>Productos Medicamentos</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
    <div class="linea">
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <h2 class="titulo"><img src="/images/icons/application-vnd.ms-powerpoint.png" />Dispositivos Médicos</h2>
                    <div class="contenido">
                        <ul>
                            <li><a href="/adm_dev.php/usuarios"><span>Productos Dispositivos Médicos</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <h2 class="titulo"><h2 class="titulo"><img src="/images/icons/application-vnd.ms-powerpoint.png" />Cosméticos</h2></h2>
                    <div class="contenido">
                        <ul>
                            <li><a href="/adm_dev.php/personas"><span>Productos Cosméticos</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
    <ul class="acciones_lista">
        <li class="acciones_lista_list">
            <?php echo link_to('Volver al listado', 'empresas/index') ?>
        </li>
    </ul>
</div>


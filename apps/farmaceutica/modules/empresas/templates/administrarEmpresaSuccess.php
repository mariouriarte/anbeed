<?php use_stylesheet('portal.css') ?>

<?php slot('header-navegador') ?>
    <?php echo $empresa->getRazonSocial() ?>
<?php end_slot(); ?>

<?php slot('header-tools') ?>
    
<?php end_slot(); ?>

<h1>Administrador de Empresa</h1>
<?php include_partial('empresas/info_empresa', array('empresa' => $empresa)) ?>
<div class="portal">
    <div class="linea">
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <h2 class="titulo"><img src="/images/icons/applications-debugging.svg" />Administración</h2>
                    <div class="contenido">
                        <ul>
                            <li><?php echo link_to('Editar empresa', 'empresas/edit?id=' . $empresa->getId()) ?></li>
                            
                            <li>
                                <?php if($empresa->RepresentanteLegal->Persona->getId()): ?>
                                    <?php echo link_to('Editar representante legal','personalegal/edit?id=' . $empresa->RepresentanteLegal->Persona->getId()) ?>
                                <?php else: ?>
                                    <?php echo link_to('Asignar representante legal','personalegal/index') ?>
                                <?php endif; ?>
                            </li>
                            
                            <li>
                                <?php if($empresa->RegenteFarmaceutico->Persona->getId()): ?>
                                    <?php echo link_to('Editar regente farmaceútico', 'personaregente/edit?id=' . $empresa->RegenteFarmaceutico->Persona->getId()) ?>
                                <?php else: ?>
                                    <?php echo link_to('Asignar regente farmaceútico', 'personaregente/index') ?>
                                <?php endif; ?>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <h2 class="titulo"><img src="/images/icons/package-x-generic.svg" />Productos</h2>
                    <div class="contenido">
                        <ul>
                            <li><a href="/farmaceutica_dev.php/medicamentos"><span>Medicamentos</span></a></li>
                            <li><a href="/farmaceutica_dev.php/reactivos"><span>Reactivos para Diagnóstico</span></a></li>
                            <li><a href="/farmaceutica_dev.php/dispositivos"><span>Dispositivos medicos</span></a></li>
                            <li><a href="/farmaceutica_dev.php/cosmetico"><span>Cosméticos</span></a></li>
                            <li><a href="/farmaceutica_dev.php/higiene"><span>Higiene y limpieza</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <h2 class="titulo"><img src="/images/icons/text.svg" /> Formularios</h2>
                    <div class="contenido">
                        <ul>
                            <li><a href="/farmaceutica_dev.php/formulario5porempresa"><span>Formulario 005</span></a></li>
                            <li><a href="/farmaceutica_dev.php/formulario12porempresa"><span>Formulario 012</span></a></li>
                            <li><a href="/farmaceutica_dev.php/formulario27porempresa"><span>Formulario 027</span></a></li>
                            <li><a href="/farmaceutica_dev.php/form516porempresa"><span>Desición 516</span></a></li>
                            <li><a href="/farmaceutica_dev.php/form706porempresa"><span>Desición 706</span></a></li>
                            <li><a href="/farmaceutica_dev.php/formulario11"><span>Despacho Aduanero</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--    <div class="linea">
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <h2 class="titulo"><img src="/images/icons/package-x-generic.svg" />Medicamentos</h2>
                    <div class="contenido">
                        <ul>
                            <li><a href="/farmaceutica_dev.php/prodmed"><span>Productos Medicamentos</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
<!--        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <h2 class="titulo"><img src="/images/icons/package-x-generic.svg" />Dispositivos Médicos</h2>
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
                    <h2 class="titulo"><img src="/images/icons/package-x-generic.svg" />Cosméticos</h2></h2>
                    <div class="contenido">
                        <ul>
                            <li><a href="/adm_dev.php/personas"><span>Productos Cosméticos</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>-->
        
    </div>
    <ul class="acciones_lista">
        <li class="acciones_lista_list">
            <?php echo link_to('Volver al listado', 'empresas/index') ?>
        </li>
    </ul>
</div>


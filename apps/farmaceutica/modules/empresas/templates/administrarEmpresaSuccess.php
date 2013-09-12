<?php use_stylesheet('portal.css') ?>

<?php slot('header-navegador') ?>
    <?php echo $empresa->getRazonSocial() ?>
<?php end_slot(); ?>

<?php slot('header-tools') ?>
    
<?php end_slot(); ?>

<h1>Administrador de Empresa</h1>
<?php if ($sf_user->hasFlash('notice')): ?>
  <div class="notice"><?php echo $sf_user->getFlash('notice') ?></div>
<?php endif; ?>
<?php include_partial('empresas/info_empresa', array('empresa' => $empresa)) ?>
<div class="portal">
    <div class="linea">
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <h2 class="titulo"><img src="/images/icons/applications-debugging.svg" />Administración</h2>
                    <div class="contenido">
                        <ul> 

                            <li><?php echo link_to(image_tag('/images/icons/print.svg').'&nbsp;Imprimir Form. 003', 'empresas/print?id=' . $empresa->getId()) ?></li>
                            
                            <li><?php echo link_to('Editar empresa', 'empresas/edit?id=' . $empresa->getId()) ?></li>
                            
                            <li>
                                <?php if($empresa->RepresentanteLegal->Persona->getId()): ?>
                                    <?php echo link_to('Representante legal','personalegal/edit?id=' . $empresa->RepresentanteLegal->Persona->getId()) ?>
                                <?php else: ?>
                                    <?php echo link_to('Representante legal','personalegal/index') ?>
                                <?php endif; ?>
                            </li>
                            
                            <li>
                                <?php if($empresa->RegenteFarmaceutico->Persona->getId()): ?>
                                    <?php echo link_to('Regente farmaceútico', 'personaregente/edit?id=' . $empresa->RegenteFarmaceutico->Persona->getId()) ?>
                                <?php else: ?>
                                    <?php echo link_to('Regente farmaceútico', 'personaregente/index') ?>
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
                    <h2 class="titulo"><img src="/images/icons/productos.svg" /> &nbsp; Productos</h2>
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
                            <li><?php echo link_to('Formulario 003', 'empresas/edit?id=' . $empresa->getId()) ?></li>
                            <li><?php echo link_to('Formulario 005', 'formulario5porempresa/index') ?></li>
                            <li><?php echo link_to('Formulario 007', 'formulario7porempresa/index') ?></li>
                            <li><?php echo link_to('Formulario 011', 'formulario11/index') ?></li>
                            <li><?php echo link_to('Formulario 012', 'formulario12porempresa/index') ?></li>
                            <li><?php echo link_to('Formulario 027', 'formulario27porempresa/index') ?></li>
                            <li><?php echo link_to('Desicion 516', 'form516porempresa/index') ?></li>
                            <li><?php echo link_to('Desicion 706', 'form706porempresa/index') ?></li>
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


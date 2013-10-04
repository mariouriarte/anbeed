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
                    <div class="titulo_img"><img src="/images/icons/applications-debugging.svg" /></div>
                    <h2 class="titulo">Administración</h2>
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
                    <div class="titulo_img"><img src="/images/icons/productos.svg" /></div>
                    <h2 class="titulo">Productos</h2>
                    <div class="contenido">
                        <ul>
                            <li><?php echo link_to('Medicamentos', 'medicamentos/index')?></li>
                            <li><?php echo link_to('Reactivos', 'reactivos/index')?></li>
                            <li><?php echo link_to('Dispositivos médicos', 'dispositivos/index')?></li>
                            <li><?php echo link_to('Cosméticos', 'cosmetico/index')?></li>
                            <li><?php echo link_to('Higiene y limpieza', 'higiene/index')?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <div class="titulo_img"><img src="/images/icons/despacho.svg" /></div>
                    <h2 class="titulo">Despacho Aduanero</h2>
                    <div class="contenido">
                        <ul>
                            <li><?php echo link_to('Listado de Despachos Aduaneros - Formulario 011', 'formulario11/index') ?></li>
                            <li><?php echo link_to('Nuevo Despacho Aduanero - Formulario 011', 'form11/new') ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <div class="titulo_img"><img src="/images/icons/text.svg" /></div>
                    <h2 class="titulo">Formularios</h2>
                    <div class="contenido">
                        <ul>
                            <li><?php echo link_to('Formulario 003', 'empresas/edit?id=' . $empresa->getId()) ?></li>
                            <li><?php echo link_to('Formulario 005', 'formulario5porempresa/index') ?></li>
                            <li><?php echo link_to('Formulario 007', 'formulario7porempresa/index') ?></li>
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

        
</div>
    <ul class="acciones_lista">
        <li class="acciones_lista_list">
            <?php echo link_to('Volver al listado', 'empresas/index') ?>
        </li>
    </ul>


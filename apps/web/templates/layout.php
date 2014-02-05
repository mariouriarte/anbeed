<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>
            <?php if (!include_slot('title')): ?>
                ANBEED
            <?php endif ?>
        </title>
        <link rel="shortcut icon" href="/images/favicon.ico" />
        <link rel="shortcut icon" href="<?php echo sfContext::getInstance()->getRequest()->getRelativeUrlRoot() ?>/favicon.ico" />
        <?php $sf_user->setCulture('es') ?>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
    </head>
    <body>
        <div id="wrap">

            <div id="main_container">

               
                    <div id="header">
                        <div class="fullwidthbanner-container">					
                  <div class="fullwidthbanner">
                        <ul>	
                            <li data-transition="curtain-2" data-slotamount="7" data-thumb="/images/slides/headerb.png">
                                <img id="headerimg" src="/images/slides/headerb.png" width="960" height="151"/>									
                                <div class="caption lfl" data-x="-20" data-y="80" data-speed="900" data-start="1000" data-easing="easeOutBack"><img src="/images/slides/anbeed.png" width="222" height="63"/></div>
                                <div class="caption lfl" data-x="-30" data-y="130" data-speed="900" data-start="1500" data-easing="easeOutBack"><img src="/images/slides/anbeed2.png" width="683" height="27"/></div>
                                <div class="caption lfl" data-x="40" data-y="0" data-speed="2000" data-start="2000" data-easing="easeOutBack"><img src="/images/slides/logo.png" width="80" height="80"/></div>
                            </li>                                
                            
                            <li data-transition="curtain-1" data-slotamount="7" data-thumb="/images/slides/headerb.png">
                                    
                                <img id="headerimg" src="/images/slides/headerb.png" width="960" height="151"/>									
                                <div class="caption lfr" data-x="-20" data-y="80" data-speed="900" data-start="1000" data-easing="easeOutBack"><img src="/images/slides/anbeed.png" width="222" height="63"/></div>
                                <div class="caption lfr" data-x="-30" data-y="130" data-speed="900" data-start="1500" data-easing="easeOutBack"><img src="/images/slides/anbeed2.png" width="683" height="27"/></div>
                                <div class="caption lfl" data-x="40" data-y="0" data-speed="2000" data-start="2000" data-easing="easeOutBack"><img src="/images/slides/logo.png" width="80" height="80"/></div>
                            </li>
                        </ul>
                    </div>
                </div>
                        
<!--                        <ul>	
                            <li data-transition="fade" data-slotamount="7" data-thumb="/images/slides/headerb.png">

                                <img src="/images/slides/headerb.png" />									

                            </li>
                        </ul>-->
                        
                        <?php // echo link_to(image_tag('/images/web/header.png', 'alt=ANBEED size=960x151'), '@homepage') ?> <br />
                        <!--                    <div id="logo"><?php //echo link_to(image_tag('logo.jpg', 'alt=ANBEED size=90x90'), '@homepage')   ?>
                        
                                            </div>-->

                        <div class="contenedor-menu">
                            <div class="container">
                                <div class="navbar navbar-static-top">
                                    <div class="navigation">
                                        <nav>
                                            <ul class="nav topnav bold">
                                                <li class="dropdown" id="inicio">
                                                    <?php echo link_to('Inicio', 'home/index', 'id=inicio') ?>
                                                </li>
                                                <li class="dropdown" id="nosotros"><a href="#">Nosotros <i class="icon-angle-down"></i></a>

                                                    <ul style="display: none;" class="dropdown-menu bold">
                                                        <li><?php echo link_to('Quienes Somos', 'home/quienesSomos') ?></li>
                                                        <li><?php echo link_to('Misión y Visión', 'home/misionVision') ?></li>
                                                        <li><?php echo link_to('Organigrama', 'home/organigrama') ?></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown" id="servicios"><a href="#">Servicios <i class="icon-angle-down"></i></a>
                                                    <ul class="dropdown-menu bold">
                                                        <li class="dropdown"><a href="#">Apertura de Empresas <i class="icon-angle-right"></i></a>
                                                            <ul style="display: none;" class="dropdown-menu sub-menu-level1 bold">
                                                                <li><?php echo link_to('Importadoras de Medicamentos', 'home/importadoraMedicamentos') ?></li>
                                                                <li><?php echo link_to('Importadoras de Cosméticos', 'home/importadoraCosmeticos') ?></li>
                                                                <li><?php echo link_to('Importadoras de Insumos', 'home/importadoraInsumos') ?></li>
                                                            </ul>                                                
                                                        </li>
                                                        <li class="dropdown"><a href="#">Registros Sanitarios <i class="icon-angle-right"></i></a>
                                                            <ul style="display: none;" class="dropdown-menu sub-menu-level1 bold">
                                                                <li><?php echo link_to('Medicamentos', 'home/medicamentos') ?></li>
                                                                <li><?php echo link_to('Dispositivos Médicos', 'home/dispositivosMedicos') ?></li>
                                                                <li><?php echo link_to('Cosméticos', 'home/cosmeticos') ?></li>
                                                                <li><?php echo link_to('Higiene y Limpieza', 'home/higieneLimpieza') ?></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown" id="catalogo">
                                                    <?php echo link_to('Productos', 'catalogo/index', 'id=productos') ?> 
                                                </li>
                                                <li class="dropdown" id="contacto">
                                                    <?php echo link_to('Contacto', 'contacto/new', 'id=contact') ?>
                                                </li>
                                                <li>
                                                    <a href="/cliente.php">Ingresar </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- end navigation -->
                                </div>
                            </div>
                        </div>
                        <!--            <div id="menu">
                                        <ul>                                                                                            
                                           <li><?php echo link_to('Inicio', 'home/index', 'id=inicio') ?></li>
                                            <li><?php echo link_to('Quienes Somos', 'home/quienesSomos', 'id=quienes') ?></li>
                                            <li><?php echo link_to('Servicios', 'home/servicios', 'id=servicios') ?></li>
                                            <li><?php echo link_to('Productos', 'catalogo/index', 'id=productos') ?></li>
                                            <li><?php echo link_to('Contáctenos', 'contacto/new', 'id=contact') ?></li>
                                            <li><a href="/cliente.php/">Iniciar Sesión</a></li>
                                        </ul>
                                    </div>-->
                    </div>

                    <!---------------------------------end of middle banner-------------------------------->
                    <?php echo $sf_content ?>

                    <div class="footer">
                        <div class="copyright"><a href="http://www.anbeed.com/" target="_blank">ANBEED S.R.L.</a> | <a href="http://www.capsulesystem.com/" target="_blank">by CapsuleSystems</a></div>

                        <div class="footer_links">
                            <?php echo link_to('Inicio', 'home/index') ?>
                            <?php echo link_to('Quienes Somos', 'home/quienesSomos') ?>
                            <?php echo link_to('Servicios', 'home/servicios') ?>
                            <?php echo link_to('Productos', 'catalogo/index') ?>
                            <?php echo link_to('Contáctenos', 'contacto/new') ?>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>

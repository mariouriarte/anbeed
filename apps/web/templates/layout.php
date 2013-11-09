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
    <div class="top_corner"></div>
    <div id="main_container">
        <div id="header">
            <div id="logo"><?php //echo link_to(image_tag('logo.jpg', 'alt=ANBEED size=90x90' ), '@homepage')?>
                <center><?php echo link_to(image_tag('/images/web/anbeed.png', 'alt=ANBEED size=350x50' ), '@homepage')?> <br />
                           <?php echo link_to(image_tag('/images/web/anbeed2.png', 'alt=ANBEED size=300x43' ), '@homepage')?></center>
            </div>
            
            
            <div class="container">
                <div class="navbar navbar-static-top">
                        <div class="navigation">
                                <nav>
                                <ul class="nav topnav bold">
                                        <li class="dropdown active">
                                        <?php echo link_to('Inicio', 'home/index', 'id=inicio')?>
<!--                                        <ul class="dropdown-menu bold">
                                                <li><a href="#">Homepage 2</a></li>
                                                <li><a href="#">Homepage 3</a></li>
                                                <li><a href="#">Homepage 4</a></li>
                                        </ul>-->
                                        </li>
                                        <li class="dropdown">
                                        <?php echo link_to('Nosotros<i class="icon-angle-down"></i>', 'home/quienesSomos', 'id=quienes') ?>
                                        <ul style="display: none;" class="dropdown-menu bold">
                                                <li><a href="#">Typography</a></li>
                                                <li><a href="#">Components</a></li>
                                                <li><a href="#">Icons</a></li>
                                                <li><a href="#">Icon variations</a></li>
                                                <li class="dropdown"><a href="#">4 Sliders <i class="icon-angle-right"></i></a>
                                                <ul style="display: none;" class="dropdown-menu sub-menu-level1 bold">
                                                        <li><a href="#">Lush slider</a></li>
                                                        <li><a href="#">Layer slider</a></li>
                                                        <li><a href="#"> Flexslider</a></li>
                                                        <li><a href="#">Flexslider</a></li>
                                                </ul>
                                                </li>
                                        </ul>
                                        </li>
                                        <li class="dropdown">
                                       <?php echo link_to('Servicios<i class="icon-angle-down"></i>', 'home/servicios', 'id=servicios') ?> 
                                        <ul class="dropdown-menu bold">
                                                <li><a href="#">About us</a></li>
                                                <li><a href="#">Pricing boxes</a></li>
                                                <li><a href="#">404</a></li>
                                        </ul>
                                        </li>
                                        <li class="dropdown">
                                        <?php echo link_to('Productos', 'catalogo/index', 'id=productos') ?> 
                                        <ul style="display: none;" class="dropdown-menu bold">
                                                <li><a href="#">Portfolio 2 columns</a></li>
                                                <li><a href="#">Portfolio 3 columns</a></li>
                                                <li><a href="#">Portfolio 4 columns</a></li>
                                                <li><a href="#">Portfolio detail</a></li>
                                        </ul>
                                        </li>
                                        <li class="dropdown">
                                        <?php echo link_to('Contacto', 'contacto/new', 'id=contact') ?>
                                        <ul class="dropdown-menu bold">
                                                <li><a href="#">Blog left sidebar</a></li>
                                                <li><a href="#">Blog right sidebar</a></li>
                                                <li><a href="#">Post left sidebar</a></li>
                                                <li><a href="#">Post right sidebar</a></li>
                                        </ul>
                                        </li>
                                        <li>
                                        <a href="/cliente.php/portal/index">Iniciar </a>
                                        </li>
                                </ul>
                                </nav>
                        </div>
                        <!-- end navigation -->
                </div>
            </div>
            
<!--            <div id="menu">
                <ul>                                                                                            
                   <li><?php echo link_to('Inicio', 'home/index', 'id=inicio') ?></li>
                    <li><?php echo link_to('Quienes Somos', 'home/quienesSomos', 'id=quienes') ?></li>
                    <li><?php echo link_to('Servicios', 'home/servicios', 'id=servicios') ?></li>
                    <li><?php echo link_to('Productos', 'catalogo/index', 'id=productos') ?></li>
                    <li><?php echo link_to('Contáctenos', 'contacto/new', 'id=contact') ?></li>
                    <li><a href="/cliente.php/portal/index">Iniciar Sesión</a></li>
                </ul>
            </div>-->
        </div>
        
        <div class="middle_banner">               
           
<div class="featured_slider">
      	<!-- begin: sliding featured banner -->
         <div id="featured_border" class="jcarousel-container">
            <div id="featured_wrapper" class="jcarousel-clip">
               <ul id="featured_images" class="jcarousel-list">
                  <li><img src="/images/web/slider_photo.jpg" width="965" height="280" alt="" /></li>
                  <li><img src="/images/web/slider_photo2.jpg" width="965" height="280" alt="" /></li>
                  <li><img src="/images/web/slider_photo3.jpg" width="965" height="280" alt="" /></li>
                  <li><img src="/images/web/slider_photo2.jpg" width="965" height="280" alt="" /></li>
               </ul>
            </div>
            <div id="featured_positioner_desc" class="jcarousel-container">
               <div id="featured_wrapper_desc" class="jcarousel-clip">
                  <ul id="featured_desc" class="jcarousel-list">                 
                     <li>
                        <div>
                           <p>Texto o comentario 1.
                           </p>
                        </div>
                     </li> 
                     <li>
                        <div>
                           <p>Texto o comentario 2.
                           </p>
                        </div>
                     </li> 
                     <li>
                        <div>
                           <p>Texto o comentario 3.
                           </p>
                        </div>
                     </li>  
                     <li>
                        <div>
                           <p>Texto o comentario 4.
                           </p>
                        </div>
                     </li> 
                  </ul>
               </div>

            </div>
            <ul id="featured_buttons" class="clear_fix">
               <li>1</li>
               <li>2</li>
               <li>3</li>
               <li>4</li>
            </ul>
         </div>
         <!-- end: sliding featured banner -->
</div>
          
        
        
        </div>
<!---------------------------------end of middle banner-------------------------------->
            <?php echo $sf_content ?>
        
        <div class="footer">
        	<div class="copyright"><a href="http://www.anbeed.com/" target="_blank">ANBEED S.R.L.</a> | <a href="http://www.capsulesystem.com/" target="_blank">by CapsuleSystems</a></div>
        
        	<div class="footer_links">
                    <?php echo link_to('Inicio', 'home/index') ?>
                    <?php echo link_to('Quienes Somos', 'home/quienesSomos') ?>
                    <?php echo link_to('Servicios', 'home/servicios') ?>
                    <?php echo link_to('Productos', 'home/productos') ?>
                    <?php echo link_to('Contáctenos', 'contacto/new') ?>
            </div>
        </div>
    </div>
</div>
    </body>
</html>

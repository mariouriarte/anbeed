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
<!--    <div class="top_corner"></div>-->
    <div id="main_container">
        <div id="header">
            <?php echo link_to(image_tag('/images/web/header.png', 'alt=ANBEED size=960x151' ), '@homepage')?> <br />
<!--            <div id="logo"><?php //echo link_to(image_tag('logo.jpg', 'alt=ANBEED size=90x90' ), '@homepage')?>
                <center><?php //echo link_to(image_tag('/images/web/header.png', 'alt=ANBEED size=965x140' ), '@homepage')?> <br />
                           <?php //echo link_to(image_tag('/images/web/anbeed2.png', 'alt=ANBEED size=300x43' ), '@homepage')?></center>
            </div>
            
            <div id="menu">
                <ul>                                                                                            
                   <li><?php //echo link_to('Inicio', 'home/index', 'id=inicio') ?></li>
                    <li><?php //echo link_to('Quienes Somos', 'home/quienesSomos', 'id=quienes') ?></li>
                    <li><?php //echo link_to('Servicios', 'home/servicios', 'id=servicios') ?></li>
                    <li><?php //echo link_to('Productos', 'catalogo/index', 'id=productos') ?></li>
                    <li><?php// echo link_to('Contáctenos', 'contacto/new', 'id=contact') ?></li>
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
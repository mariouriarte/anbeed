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
            <div id="logo"><?php echo link_to(image_tag('logo.jpg', 'alt=ANBEED size=90x90' ), '@homepage')?></div>
            
            <div id="menu">
                <ul>                                                                                            
                    <li><?php echo link_to('Inicio', 'home/index') ?></li>
                    <li><?php echo link_to('Quienes Somos', 'home/quienesSomos') ?></li>
                    <li><?php echo link_to('Servicios', 'home/servicios') ?></li>
                    <li><?php echo link_to('Productos', 'home/productos') ?></li>
                    <li><?php echo link_to('Información', 'home/informacion') ?></li>
                    <li><?php echo link_to('Contactenos', 'home/contactenos') ?></li>
                </ul>
            </div>
        </div>
        
        <?php echo $sf_content?>
        
        <div class="footer">
        	<div class="copyright"><a href="http://www.anbeed.com/" target="_blank">ANBEED S.R.L.</a> | <a href="http://www.capsulesystem.com/" target="_blank">by CapsuleSystems</a></div>
        
        	<div class="footer_links">
                    <?php echo link_to('Inicio', 'home/index') ?>
                    <?php echo link_to('Quienes Somos', 'home/quienesSomos') ?>
                    <?php echo link_to('Servicios', 'home/servicios') ?>
                    <?php echo link_to('Productos', 'home/productos') ?>
                    <?php echo link_to('Información', 'home/informacion') ?>
                    <?php echo link_to('Contactenos', 'home/contactenos') ?>
            </div>
        </div>
    </div>
</div>
    </body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>
            <?php if (!include_slot('title')): ?>
                ANBEED
            <?php endif ?>
        </title>
        <link rel="shortcut icon" href="/favicon.ico" />
        <?php $sf_user->setCulture('es') ?>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
    </head>
    <body>
        <div id="global_domain_bar">
            <div id="menu">
                <?php if ($sf_user->isAuthenticated()): ?>
                    
                <?php endif; ?>
            </div>
        </div>
        <div id="container">
            
            <div id="conten-header">

                <div id="header">
                    <div id="header-content">
                        <div id="header-top">
                            <div id="header-logo">
                                <div id="logo">
                                    
                                </div>
                                <?php if ($sf_user->isAuthenticated()): ?>
                                <div id="info-user">
                                    <h4>Usuario: <?php echo $sf_user->getUsername(); ?></h4>
                                    <h3><?php echo link_to('Cerrar session', '@sf_guard_signout',
                                                  array('id' => 'boton-salir')) 
                                        ?>
                                    </h3>
                                </div>
                                <?php endif; ?>
                            </div>
                            <div id="header-tools">
                                <?php if (!include_slot('header-tools')): ?>
                                <?php endif ?>
                                <?php if (!$sf_user->isAuthenticated()): ?>
                                    <h2>ANBEED SRL</h2>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div id="header-bottom">
                           <?php if (!include_slot('header-navegador')): ?>
                                
                           <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>

            <div id="nav_page">
                <?php include_slot('navegador') ?>
            </div>
            <div id="content">
                <?php echo $sf_content ?>
                
            </div>
        </div>
    </body>
</html>
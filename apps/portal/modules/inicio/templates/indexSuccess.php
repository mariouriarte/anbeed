<h1>Portal del Sistema, Bienvenido</h1>
<div class="portal">
    <div class="linea">
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <h2 class="titulo"><img src="/images/icons/folder-documents.png" />Empresas</h2>
                    <div class="contenido">
                        
                        <ul>
                            <li><a href="/farmaceutica<?php echo $env ?>.php/empresas"><span>Empresas</span></a></li>
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
                    <h2 class="titulo"><img src="/images/icons/preferences-desktop.png" />Adm del Sistema</h2>
                    <div class="contenido">
                        <ul>
                            <li><a href="/adm<?php echo $env ?>.php/laboratorios"><span>Laboratorios Fabricantes</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/"><span>Ingredientes</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/"><span>Paises</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/"><span>Personas</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/"><span>Tipo Venta</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/"><span>Vía Administración</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <h2 class="titulo"><img src="/images/icons/locked.png" />Cuenta</h2>
                    <div class="contenido">
                        <ul>
                            <li><a href="/adm<?php echo $env ?>.php/usuarios"><span>Usuarios</span></a></li>
                            <?php if ($sf_user->isAuthenticated()): ?>
                                <li><a href="<?php echo url_for('@sf_guard_signout') ?>"><span>Salir</span></a></li>
                            <?php else: ?>
                                <li><a href="<?php echo url_for('@sf_guard_signin') ?>"><span>Ingresar</span></a></li>
                            <?php endif ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

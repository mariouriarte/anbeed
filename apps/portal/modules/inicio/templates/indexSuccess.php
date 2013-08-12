<h1>Portal del Sistema, Bienvenido</h1>
<div class="portal">
    <div class="linea">
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <h2 class="titulo"><img src="/images/icons/portafolio1.png" width="48" height="40"/> Empresas</h2>
                    <div class="contenido">
                        <ul>
                            <li><a href="/farmaceutica<?php echo $env ?>.php/empresas"><span>Empresas</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <h2 class="titulo"><img src="/images/icons/applications-development.svg" /> Laboratorios</h2>
                    <div class="contenido">
                        <ul>
                            <li><a href="/adm_dev.php/laboratorios"><span>Laboratorios Fabricantes</span></a></li>
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
                            <li><a href="/adm<?php echo $env ?>.php/formulario5"><span>Reportes Formulario 005</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/formulario12"><span>Reportes Formulario 012</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/formulario27"><span>Reportes Formulario 027</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/formulario516"><span>Reportes Desición 516</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/formulario706"><span>Reportes Desición 706</span></a></li>
                            <li><a href="/farmaceutica_dev.php/formulario7"><span>Solicitudes de Calificación</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <h2 class="titulo"><img src="/images/icons/preferences-desktop.png" />Administración del Sistema</h2>
                    <div class="contenido">
                        <ul>
                            <li><a href="/adm<?php echo $env ?>.php/ingredientes"><span>Ingredientes</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/paises"><span>Paises</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/personas"><span>Personas</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/tventas"><span>Tipo Venta</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/administraciones"><span>Vía de Administración</span></a></li>
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

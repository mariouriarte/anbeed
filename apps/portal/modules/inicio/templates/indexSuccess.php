<h1>Portal del Sistema, Bienvenido</h1>
<div class="portal">
    <div class="linea">
        <?php if ($sf_user->hasCredential('ADMINISTRADOR')||
                $sf_user->hasCredential('REGISTRO SANITARIO')||
                $sf_user->hasCredential('DESPACHO ADUANERO')): ?>
        <div class="columna">
            <div class="cubo">
                <div class="adentro">

                    <div class="titulo_img"><img src="/images/icons/portafolio1.png" width="48" height="45"/></div>
                    <h2 class="titulo"> Empresas</h2>
                    <div class="contenido">
                        <ul>

                            <li><a href="/farmaceutica<?php echo $env ?>.php/empresas"><span>Empresas</span></a></li>
                            <li><a href="/farmaceutica<?php echo $env ?>.php/empresas/new"><span>Nueva Empresa</span></a></li>
                            <?php if ($sf_user->hasCredential('ADMINISTRADOR')):?>
                            <li><a href="/adm<?php echo $env ?>.php/cliente_usuario"><span>Usuarios Clientes</span></a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <div class="titulo_img"><img src="/images/icons/applications-development.svg" /></div>
                    <h2 class="titulo"> Laboratorios</h2>
                    <div class="contenido">
                        <ul>
                            <li><a href="/adm<?php echo $env ?>.php/laboratorios"><span>Laboratorios Fabricantes</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/laboratorios/new"><span>Nuevo Laboratorios Fabricantes</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
<!--        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <div class="titulo_img"><img src="/images/icons/text.svg" /></div>
                    <h2 class="titulo"> Formularios</h2>
                    <div class="contenido">
                        <ul>
                            <li><a href="/adm<?php // echo $env ?>.php/formulario5"><span>Reportes Formulario 005</span></a></li>
                            <li><a href="/adm<?php // echo $env ?>.php/formulario12"><span>Reportes Formulario 012</span></a></li>
                            <li><a href="/adm<?php // echo $env ?>.php/formulario27"><span>Reportes Formulario 027</span></a></li>
                            <li><a href="/adm<?php // echo $env ?>.php/formulario516"><span>Reportes Desición 516</span></a></li>
                            <li><a href="/adm<?php // echo $env ?>.php/formulario706"><span>Reportes Desición 706</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>-->
        <?php endif; ?>
        <?php if ($sf_user->hasCredential('ADMINISTRADOR')||
                $sf_user->hasCredential('CORRESPONDENCIA')): ?>
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <div class="titulo_img"><img src="/images/icons/correspondencia.svg" /></div>
                    <h2 class="titulo">Correspondecia</h2>
                    <div class="contenido">
                        <ul>
                            <li><a href="/adm<?php echo $env ?>.php/emisionc"><span>Emisión de Correspondecia</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/tipodoc"><span>Tipo Documento</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/emisor"><span>Emisor Correspondecia</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php if ($sf_user->hasCredential('ADMINISTRADOR')||
                $sf_user->hasCredential('REGISTRO SANITARIO')||
                $sf_user->hasCredential('DESPACHO ADUANERO')): ?>        
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <div class="titulo_img"><img src="/images/icons/notificacion.svg" /></div>
                    <h2 class="titulo">Caducidad</h2>
                    <div class="contenido">
                        <ul>
                            <li><a href="/adm<?php echo $env ?>.php/caducidad/index?time=1"><span>Alerta de Caducidad <br />1 Mes</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/caducidad/index?time=3"><span>Alerta de Caducidad<br />3 meses</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/caducidad/index?time=6"><span>Alerta de Caducidad<br />6 meses</span></a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <?php if ($sf_user->hasCredential('ADMINISTRADOR')): ?>
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <div class="titulo_img"><img src="/images/icons/tareas.svg" /></div>
                    <h2 class="titulo">Administración de Tareas</h2>
                    <div class="contenido">
                        <ul>
                            <li><a href="/adm<?php echo $env ?>.php/tareas/new"><span>Asignar nueva tarea</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/tareas/index?estado=1"><span>Listado de tareas Asignadas</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/tareas/index?estado=2"><span>Listado de tareas en Proceso</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/tareas/index?estado=3"><span>Listado de tareas Observadas</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/tareas/index?estado=4"><span>Listado de tareas Concluidas</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        
        <?php if (!$sf_user->hasCredential('ADMINISTRADOR')): ?>
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <div class="titulo_img"><img src="/images/icons/tareas.svg" /></div>
                    <h2 class="titulo">Tareas Asignadas</h2>
                    <div class="contenido">
                        <ul>
                            <li><a href="/adm<?php echo $env ?>.php/tareas_usuario/index?estado=1"><span>Tareas Asignadas</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/tareas_usuario/index?estado=2"><span>Tareas en Proceso</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/tareas_usuario/index?estado=3"><span>Tareas Observadas</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/tareas_usuario/index?estado=4"><span>Tareas Concluidas</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <div class="titulo_img"><img src="/images/icons/applications-debugging.svg" /></div>
                    <h2 class="titulo">Administración</h2>
                    <div class="contenido">
                        <ul>
                            <?php if ($sf_user->hasCredential('ADMINISTRADOR')): ?>
                            <li><a href="/adm<?php echo $env ?>.php/codprod"><span>Código Producto</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/ingredientes"><span>Ingredientes</span></a></li>
                            <?php endif; ?>
                            <li><a href="/adm<?php echo $env ?>.php/tventas"><span>Tipo Venta</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/administraciones"><span>Vía de Administración</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/gcosmetico"><span>Grupo Cosmético</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/paises"><span>Paises</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/ciudades"><span>Ciudades</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php if ($sf_user->hasCredential('ADMINISTRADOR')): ?>
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <div class="titulo_img"><img src="/images/icons/cuenta.svg" /></div>
                    <h2 class="titulo">Cuenta</h2>
                    <div class="contenido">
                        <ul>
                            
                            <li><a href="/adm<?php echo $env ?>.php/usuarios"><span>Lista de Usuarios</span></a></li>
                            <?php if ($sf_user->isAuthenticated()): ?>
                            <!--<li><a href="/adm<?php // echo $env ?>.php/usuarios/<?php // echo $sf_user->getGuardUser()->getId()?>/edit"><span>Editar Datos Personales</span></a></li>-->
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>

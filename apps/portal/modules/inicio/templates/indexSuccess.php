<h1>Portal del Sistema, Bienvenido</h1>
<div class="portal">
    <div class="linea">
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <div class="titulo_img"><img src="/images/icons/portafolio1.png" width="48" height="45"/></div>
                    <h2 class="titulo"> Empresas</h2>
                    <div class="contenido">
                        <ul>
                            <li><a href="/farmaceutica<?php echo $env ?>.php/empresas"><span>Empresas</span></a></li>
                            <li><a href="/farmaceutica<?php echo $env ?>.php/empresas/new"><span>Nueva Empresa</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/cliente_usuario"><span>Usuarios Clientes</span></a></li>
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
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <div class="titulo_img"><img src="/images/icons/text.svg" /></div>
                    <h2 class="titulo"> Formularios</h2>
                    <div class="contenido">
                        <ul>
                            <li><a href="/adm<?php echo $env ?>.php/formulario5"><span>Reportes Formulario 005</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/formulario12"><span>Reportes Formulario 012</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/formulario27"><span>Reportes Formulario 027</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/formulario516"><span>Reportes Desición 516</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/formulario706"><span>Reportes Desición 706</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <div class="titulo_img"><img src="/images/icons/correspondencia.svg" /></div>
                    <h2 class="titulo">Correspondecia</h2>
                    <div class="contenido">
                        <ul>
                            <li><a href="/adm<?php echo $env ?>.php/emisionc"><span>Emsión de Correspondecia</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/tipodoc"><span>Tipo Documento</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/emisor"><span>Emisor Correspondecia</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/codprod"><span>Código Producto</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
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
        
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <div class="titulo_img"><img src="/images/icons/applications-debugging.svg" /></div>
                    <h2 class="titulo">Administración</h2>
                    <div class="contenido">
                        <ul>
                            <li><a href="/adm<?php echo $env ?>.php/ingredientes"><span>Ingredientes</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/paises"><span>Paises</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/ciudades"><span>Ciudades</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/personas"><span>Personas</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/tventas"><span>Tipo Venta</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/administraciones"><span>Vía de Administración</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/gcosmetico"><span>Grupo Cosmético</span></a></li>
                            <li><a href="/adm<?php echo $env ?>.php/ghigiene"><span>Grupo de Higiene</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <div class="titulo_img"><img src="/images/icons/cuenta.svg" /></div>
                    <h2 class="titulo">Cuenta</h2>
                    <div class="contenido">
                        <ul>
                            <li><a href="/adm<?php echo $env ?>.php/persona_usuario"><span>Usuarios</span></a></li>
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

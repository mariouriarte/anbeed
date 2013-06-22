<h1>Portal del Sistema, Bienvenido</h1>
<div class="portal">
    <div class="linea">
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <h2 class="titulo">Empresas</h2>
                    <div class="contenido">
                        <img src="/images/04_maps_32.png" />
                        <ul>
                            <li><a href="/farmaceutica_dev.php/empresas"><span>Empresas</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <h2 class="titulo">Laboratorios</h2>
                    <div class="contenido">
                        <img src="/images/applications_engineering.png" />
                        <ul>
                            <li><a href="/farmaceutica_dev.php/laboratorios"><span>Laboratorios Fabricantes</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php if ($sf_user->hasCredential('admin')): ?>
            <div class="columna">
                <div class="cubo">
                    <div class="adentro">
                        <h2 class="titulo">Paises</h2>
                        <div class="contenido">
                            <img src="/images/portal/configure.png">
                            <ul>
                                <li><a href="/farmaceutica_dev.php/paises"><span>Paises</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif ?>
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <h2 class="titulo">Cuenta</h2>
                    <div class="contenido">
                        <img src="/images/password.png" />
                        <ul>
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
    
    <div class="linea">
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <h2 class="titulo">Usuarios</h2>
                    <div class="contenido">
                        <img src="/images/applications_engineering.png" />
                        <ul>
                            <li><a href="/adm_dev.php/usuarios"><span>Usuarios</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <h2 class="titulo">Personas</h2>
                    <div class="contenido">
                        <img src="/images/applications_engineering.png" />
                        <ul>
                            <li><a href="/adm_dev.php/personas"><span>Personas</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <h2 class="titulo">otros</h2>
                    <div class="contenido">
                        <img src="/images/book2.png" />
                        <ul>
                            <li><a href="#">otros</a></li>              
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <h2 class="titulo">otros</h2>
                    <div class="contenido">
                        <img src="/images/book2.png" />
                        <ul>
                            <li><a href="#">otros</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
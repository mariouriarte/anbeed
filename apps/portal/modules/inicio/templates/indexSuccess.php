<h1>Portal del Sistema, Bienvenido</h1>
<div class="portal">
    <div class="linea">
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <h2 class="titulo"><img src="/images/icons/folder-documents.png" />Empresas</h2>
                    <div class="contenido">
                        
                        <ul>
                            <li><a href="/farmaceutica_dev.php/empresas"><span>Empresas</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <?php if ($sf_user->hasCredential('admin')): ?>
            <div class="columna">
                <div class="cubo">
                    <div class="adentro">
                        <h2 class="titulo"><img src="/images/icons/config-language.png">Paises</h2>
                        <div class="contenido">
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
                    <h2 class="titulo"><img src="/images/icons/locked.png" />Cuenta</h2>
                    <div class="contenido">
                        <ul>
                            <li><a href="/adm_dev.php/usuarios"><span>Usuarios</span></a></li>
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
                    <h2 class="titulo"><img src="/images/icons/office-contact.png" />Personas</h2>
                    <div class="contenido">
                        <ul>
                            <li><a href="/adm_dev.php/personas"><span>Personas</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</div>

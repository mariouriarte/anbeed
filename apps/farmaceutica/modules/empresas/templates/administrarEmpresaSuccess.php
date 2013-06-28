<?php use_stylesheet('portal.css') ?>

<?php slot('header-navegador') ?>
    <?php echo $empresa->getRazonSocial() ?>
<?php end_slot(); ?>

<h2>Esta en el espacio: <?php echo $empresa->getRazonSocial() ?></h2>
<h2>NIT: <?php echo $empresa->getNit() ?></h2>
<h2>Representante Legal: <?php echo $empresa->RepresentanteLegal ?></h2>
<h2>Regente Farmaceutico: <?php echo $empresa->RegenteFarmaceutico ?></h2>

<div class="portal">
    <div class="linea">
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <h2 class="titulo">Producto</h2>
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
                    <h2 class="titulo">Producto</h2>
                    <div class="contenido">
                        <img src="/images/applications_engineering.png" />
                        <ul>
                            <li><a href="/farmaceutica_dev.php/laboratorios"><span>Laboratorios Fabricantes</span></a></li>
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
                    <h2 class="titulo">Producto</h2>
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
                    <h2 class="titulo">Producto</h2>
                    <div class="contenido">
                        <img src="/images/applications_engineering.png" />
                        <ul>
                            <li><a href="/adm_dev.php/personas"><span>Personas</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</div>
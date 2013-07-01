<?php use_stylesheet('portal.css') ?>

<?php slot('header-navegador') ?>
    <?php echo $empresa->getRazonSocial() ?>
<?php end_slot(); ?>


<!--<h2>Representante Legal: <?php echo $empresa->RepresentanteLegal ?></h2>
<h2>Regente Farmaceutico: <?php echo $empresa->RegenteFarmaceutico ?></h2>-->

<div class="portal">
    <h2>Esta en el espacio: <?php echo $empresa->getRazonSocial() ?></h2>
    <h2>NIT: <?php echo $empresa->getNit() ?></h2>
    <div class="linea">
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <h2 class="titulo"><img src="/images/icons/applications-development.png" />Laboratorios</h2>
                    <div class="contenido">
                        <ul>
                            <li><a href="/farmaceutica_dev.php/laboratorios"><span>Laboratorios Fabricantes</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <h2 class="titulo"><img src="/images/icons/application-vnd.ms-powerpoint.png" />Medicamentos</h2>
                    <div class="contenido">
                        <ul>
                            <li><a href="/farmaceutica_dev.php/prodmed"><span>Productos Medicamentos</span></a></li>
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
                    <h2 class="titulo"><img src="/images/icons/application-vnd.ms-powerpoint.png" />Dispositivos Médicos</h2>
                    <div class="contenido">
                        <ul>
                            <li><a href="/adm_dev.php/usuarios"><span>Productos Dispositivos Médicos</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <h2 class="titulo"><h2 class="titulo"><img src="/images/icons/application-vnd.ms-powerpoint.png" />Cosméticos</h2></h2>
                    <div class="contenido">
                        <ul>
                            <li><a href="/adm_dev.php/personas"><span>Productos Cosméticos</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
    <ul class="acciones_lista">
        <li class="acciones_lista_list">
            <?php echo link_to('Volver al listado', 'empresas/index') ?>
        </li>
    </ul>
</div>


<?php use_helper('Date') ?>

<h2>Bienvenido a ANBEED.</h2>

<div class="portal">
    <div class="linea">
        <div class="columna">
            <div class="cubo">
                <div class="adentro">
                    <!--<div class="titulo_img"><img src="/images/icons/tareas.svg" height="32" width="32"/></div>-->
                    <div class="title-cubo">
                        Etapa de tramites
                    </div>
                    <div class="contenido">
                        <ul>
                            <li><?php echo link_to('Formulario 5', 'form5/index')?></li>
                            <li><?php echo link_to('Formulario 12', 'form12/index')?></li>
                            <li><?php echo link_to('Formulario 27', 'form27/index')?></li>
                            <li><?php echo link_to('Formulario 516', 'form516/index')?></li>
                            <li><?php echo link_to('Formulario 706', 'form706/index')?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-noticias">
            <div class="cubo">
                <div class="adentro">
                    <div class="title-cubo">
                        Noticias
                    </div>
                    <div class="contenido">
                        <?php foreach($notificaciones as $noti): ?>
                            <div class="noticia">
                                <div class="title-bar">
                                    <span class="n-asunto"><?php echo link_to($noti->getAsunto(), 'noticias/show?id='.$noti->getId()) ?></span>
                                    
                                    <span class="n-fecha"><?php echo format_date($noti->getCreatedAt(), "dd/MM/yy") ?></span>
                                </div>
                                <div class="n-content">
                                    <p><?php echo $noti->getDescripcionCorta() ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <div class="n-foot">
                            <?php echo link_to('Ver más', 'noticias/index') ?>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    
</div>




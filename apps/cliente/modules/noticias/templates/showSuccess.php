<div class="show-item">

    <h3><?php echo $noticia->getAsunto() ?></h3>
    <div class="descripcion">
        <p>
            <?php echo $noticia->getDescripcion() ?>
        </p>
    </div>
    <h2>Observaciones</h2>
    <div class="descripcion">
        <p>
            <?php echo $noticia->getObservacion() ?>
        </p>
    </div>
<p> 
<?php echo $noticia->getFecha() ?>
</p>
</div>
<ul class="sf_admin_actions">
    <li class="sf_admin_action_list">
        <a href="<?php echo url_for('noticias/index') ?>">Volver al listado</a>
    </li>
</ul>
<?php $tarea = $sf_user->getAttribute('tarea'); ?>
<h1>Comentarios de la Tarea "<?php echo $tarea ?>"</h1>
<?php include_partial('flashes') ?>
<?php include_partial('form', array('form' => $form)) ?>

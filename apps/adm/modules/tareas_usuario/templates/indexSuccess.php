<?php use_helper('I18N', 'Date') ?>
<?php include_partial('tareas_usuario/assets');

$estado="";
if($sf_user->getAttribute('tarea_usuarios'))
{
    $estado = $sf_user->getAttribute('tarea_usuarios');
}
?>

<div id="sf_admin_container">
  <h1><?php echo __('Listado de Tareas '.$estado, array(), 'messages') ?></h1>

  <?php include_partial('tareas_usuario/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('tareas_usuario/list_header', array('pager' => $pager)) ?>
  </div>

  <div id="sf_admin_bar">
    <?php include_partial('tareas_usuario/filters', array('form' => $filters, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <form action="<?php echo url_for('tarea_tareas_usuario_collection', array('action' => 'batch')) ?>" method="post">
    <?php include_partial('tareas_usuario/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>
    <ul class="sf_admin_actions">
      <?php include_partial('tareas_usuario/list_batch_actions', array('helper' => $helper)) ?>
      <?php include_partial('tareas_usuario/list_actions', array('helper' => $helper)) ?>
    </ul>
    </form>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('tareas_usuario/list_footer', array('pager' => $pager)) ?>
  </div>
</div>

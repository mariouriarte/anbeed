<?php use_helper('I18N', 'Date') ?>
<?php include_partial('caducidad/assets');
/*ubicaremos en que mes de vencimiento utilzaremos*/
if($sf_user->getAttribute('time'))
{
    $meses = $sf_user->getAttribute('time');
}


?>

<div id="sf_admin_container">
  <h1><?php echo __('Listado de productos con vencimiento del Registro Sanitario en '.$meses, array(), 'messages') ?></h1>

  <?php include_partial('caducidad/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('caducidad/list_header', array('pager' => $pager)) ?>
  </div>

  <div id="sf_admin_bar">
    <?php include_partial('caducidad/filters', array('form' => $filters, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <form action="<?php echo url_for('producto_caducidad_collection', array('action' => 'batch')) ?>" method="post">
    <?php include_partial('caducidad/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>
    <ul class="sf_admin_actions">
      <?php include_partial('caducidad/list_batch_actions', array('helper' => $helper)) ?>
      <?php include_partial('caducidad/list_actions', array('helper' => $helper)) ?>
    </ul>
    </form>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('caducidad/list_footer', array('pager' => $pager)) ?>
  </div>
</div>

<?php use_helper('I18N', 'Date') ?>
<?php include_partial('catalogo/assets') ?>

<div class="center_content">
  <h1><?php echo __('Catálogo de Productos', array(), 'messages') ?></h1>
  <div class="filter">
      <?php include_partial('catalogo/filters', array('form' => $filters, 'configuration' => $configuration)) ?>
  </div>
  
  <div id="productos">
    <form action="<?php echo url_for('producto_web_collection', array('action' => 'batch')) ?>" method="post">
    <?php include_partial('catalogo/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>
    <ul class="sf_admin_actions">
      <?php include_partial('catalogo/list_batch_actions', array('helper' => $helper)) ?>
      <?php include_partial('catalogo/list_actions', array('helper' => $helper)) ?>
    </ul>
    </form>
  </div>

  <div id="pager">
    <?php include_partial('catalogo/list_footer', array('pager' => $pager)) ?>
  </div>
</div>

<?php use_helper('I18N', 'Date') ?>
<?php //include_partial('catalogo/assets') ?>
<script type="text/javascript">
    $( "#productos" ).addClass( "current" );
</script>
<div class="center_content">
  <div id="filtros_web">
    <?php include_partial('catalogo/filters', array('form' => $filters, 'configuration' => $configuration)) ?>
  </div>
  <div id="productos_web">
      <h1>Catálogo de Productos</h1>
    <form action="<?php echo url_for('producto_web_collection', array('action' => 'batch')) ?>" method="post">
    <?php include_partial('catalogo/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>
    </form>
  </div>
</div>

    
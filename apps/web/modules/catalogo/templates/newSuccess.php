<?php use_helper('I18N', 'Date') ?>
<?php include_partial('catalogo/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Catalogo', array(), 'messages') ?></h1>

  <?php include_partial('catalogo/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('catalogo/form_header', array('producto_web' => $producto_web, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('catalogo/form', array('producto_web' => $producto_web, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('catalogo/form_footer', array('producto_web' => $producto_web, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>

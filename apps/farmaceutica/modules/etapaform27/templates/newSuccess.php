<?php use_helper('I18N', 'Date') ?>
<?php include_partial('etapaform27/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Nueva etapa de producto', array(), 'messages') ?></h1>

  <?php include_partial('etapaform27/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('etapaform27/form_header', array('etapa' => $etapa, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('etapaform27/form', array('etapa' => $etapa, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('etapaform27/form_footer', array('etapa' => $etapa, 'form' => $form, 'configuration' => $configuration, 'pager' => $pager)) ?>
  </div>
</div>

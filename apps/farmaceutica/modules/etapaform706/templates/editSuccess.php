<?php use_helper('I18N', 'Date') ?>
<?php include_partial('etapaform706/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Editar etapa de producto', array(), 'messages') ?></h1>

  <?php include_partial('etapaform706/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('etapaform706/form_header', array('etapa' => $etapa, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('etapaform706/form', array('etapa' => $etapa, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('etapaform706/form_footer', array('etapa' => $etapa, 'form' => $form, 'configuration' => $configuration, 'pager' => $pager)) ?>
  </div>
</div>

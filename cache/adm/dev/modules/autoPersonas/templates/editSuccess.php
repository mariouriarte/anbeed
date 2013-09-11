<?php use_helper('I18N', 'Date') ?>
<?php include_partial('personas/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Editar %%nombre%%', array('%%nombre%%' => $persona->getNombre()), 'messages') ?></h1>

  <?php include_partial('personas/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('personas/form_header', array('persona' => $persona, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('personas/form', array('persona' => $persona, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('personas/form_footer', array('persona' => $persona, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>

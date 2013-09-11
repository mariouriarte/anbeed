<?php use_helper('I18N', 'Date') ?>
<?php include_partial('personaregente/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Editar Regente Farmaceutico %%nombre%%', array('%%nombre%%' => $persona->getNombre()), 'messages') ?></h1>

  <?php include_partial('personaregente/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('personaregente/form_header', array('persona' => $persona, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('personaregente/form', array('persona' => $persona, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('personaregente/form_footer', array('persona' => $persona, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>

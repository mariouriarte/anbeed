<?php use_helper('I18N', 'Date') ?>
<?php include_partial('empresas/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Editar Empresa %%razon_social%%', array('%%razon_social%%' => $empresa->getRazonSocial()), 'messages') ?></h1>

  <?php include_partial('empresas/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('empresas/form_header', array('empresa' => $empresa, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('empresas/form', array('empresa' => $empresa, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('empresas/form_footer', array('empresa' => $empresa, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>

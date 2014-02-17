<?php use_helper('I18N', 'Date') ?>
<?php include_partial('formulas/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Editar Fórmula Cualicuantitativa', array(), 'messages') ?></h1>

  <?php include_partial('formulas/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('formulas/form_header', array('formula_cc' => $formula_cc, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('formulas/form', array('formula_cc' => $formula_cc, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('formulas/form_footer', array('formula_cc' => $formula_cc, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>

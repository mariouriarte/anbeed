<h1>Editar Desición 516</h1>
<?php if ($sf_user->hasFlash('notice')): ?>
  <div class="notice"><?php echo __($sf_user->getFlash('notice'), array(), 'sf_admin') ?></div>
<?php endif; ?>
<?php include_partial('form', array('form' => $form)) ?>

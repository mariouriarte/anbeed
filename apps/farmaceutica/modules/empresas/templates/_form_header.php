<?php use_javascript('jquery-migrate.js') ?>

<?php if(!$form->isNew()): ?>
<div class="content-info-empresa">
    <?php $empresa = $sf_user->getAttribute('empresa'); ?>
    <?php include_partial('empresas/info_empresa', array('empresa' => $empresa)) ?>
</div>
<?php endif; ?>

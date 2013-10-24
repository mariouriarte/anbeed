<?php use_stylesheet('jobs.css') ?>
 
<h2>Seguimiento del producto</h2>
<?php include_partial('etapaform27/list_etapas', array('etapas' => $pager->getResults(), 'page' => $pager->getPage())) ?>

<?php if ($pager->haveToPaginate()): ?>
  <div class="pagination">
      
    <a href="<?php echo url_for('etapaform27/new?page=1&idform='.$sf_user->getAttribute('id_form_etapa')) ?>">
      <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/first.png', array('alt' => __('First page', array(), 'sf_admin'), 'title' => __('First page', array(), 'sf_admin'))) ?>
    </a>
 
    <a href="<?php echo url_for('etapaform27/new', $etapa) ?>?page=<?php echo $pager->getPreviousPage().'&idform='.$sf_user->getAttribute('id_form_etapa') ?>">
      <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/previous.png', array('alt' => __('Previous page', array(), 'sf_admin'), 'title' => __('Previous page', array(), 'sf_admin'))) ?>
    </a>
 
    <?php foreach ($pager->getLinks() as $page): ?>
      <?php if ($page == $pager->getPage()): ?>
        <?php echo $page ?>
      <?php else: ?>
        <a href="<?php echo url_for('etapaform27/new', $etapa) ?>?page=<?php echo $page.'&idform='.$sf_user->getAttribute('id_form_etapa') ?>"><?php echo $page ?></a>
      <?php endif; ?>
    <?php endforeach; ?>
 <?php echo $sf_user->getAttribute('idform') ?>
    <a href="<?php echo url_for('etapaform27/new', $etapa) ?>?page=<?php echo $pager->getNextPage().'&idform='.$sf_user->getAttribute('id_form_etapa') ?>">
      <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/next.png', array('alt' => __('Next page', array(), 'sf_admin'), 'title' => __('Next page', array(), 'sf_admin'))) ?>
    </a>
 
    <a href="<?php echo url_for('etapaform27/new', $etapa) ?>?page=<?php echo $pager->getLastPage().'&idform='.$sf_user->getAttribute('id_form_etapa') ?>">
      <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/last.png', array('alt' => __('Last page', array(), 'sf_admin'), 'title' => __('Last page', array(), 'sf_admin'))) ?>
    </a>
  </div>
<?php endif; ?>
 
<div class="pagination_desc">
  <strong><?php echo $pager->getNbResults() ?></strong> Etapas en el producto
 
  <?php if ($pager->haveToPaginate()): ?>
    - page <strong><?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?></strong>
  <?php endif; ?>
</div>
 

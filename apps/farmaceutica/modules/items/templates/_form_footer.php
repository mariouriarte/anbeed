<?php use_helper('Date') ?>
<?php 
$q = Doctrine_Core::getTable('Item')->selectItemDeForm11();

$items = $q->execute();
?>
<div class="sf_admin_list">
<legend>PRODUCTOS REGISTRADOS</legend>
    <table>
        <thead>
            <tr>
                <th>No. ITEM</th>
                <th>CANTIDAD</th>
                <th>PRODUCTO</th>
                <th>No. REGISTRO SANITARIO</th>
                <th>FECHA VENCIMIENTO</th>
                <th>No. LOTE</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
                <?php
                $num_items=1;
                foreach ($items as $item) 
                {
                    if($item->getTipoItem() == 'LIBRE')
                        $reg_sanitario = $item->getNumRegistroLibre();
                    else
                        $reg_sanitario = ItemTable::getNumRegSanitario($item);
                ?>
            <tr>
                <td><?php echo $num_items ?></td>
                <td><?php echo $item->getCantidad()?></td>
                <td><?php echo $item->getNombre()?></td>
                <?php if($reg_sanitario != ''): ?>
                    <td><?php echo $reg_sanitario?></td>
                <?php else: ?>
                    <td><?php echo 'NO APLICA'?></td>
                <?php endif; ?>
                <?php if($item->getFechaVencimiento() != NULL): ?>
                    <td><?php echo funciones::FormatearFecha($item->getFechaVencimiento())?></td>
                <?php else: ?>
                    <td><?php echo 'NO APLICA'?></td>
                <?php endif; ?>
                <td><?php echo $item->getNumLote()?></td>
                <td>
                    <ul class="sf_admin_td_actions">
                      <?php $helper = new itemsGeneratorHelper();
                        echo $helper->linkToEdit($item, array(  'params' =>   array(  ),  'class_suffix' => 'edit',  'label' => 'Edit',)) ?>
                      <?php echo $helper->linkToDelete($item, array(  'params' =>   array(  ),  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',  'label' => 'Delete',)) ?>
                    </ul>
                </td>
            </tr>
        <?php $num_items++; } ?>    
        </tbody>
</table>
</div>
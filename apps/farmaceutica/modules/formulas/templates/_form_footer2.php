<?php
//require_once(dirname(__FILE__).'/lib/BaseDetallesccGeneratorConfiguration.class.php');
//require_once(dirname(__FILE__).'/lib/BaseDetallesccGeneratorHelper.class.php');
 ?>
<?php 

$q = Doctrine_Core::getTable('DetalleFormulaCc')->getIngredientes($formula_cc->getId());

$ingredientes = $q->execute();
?>
<div class="sf_admin_list">
    <fieldset
        <h2>Excipientes de la Fórmula Cualicuantitativa Registrado(s)</h2></fieldset>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>INGREDIENTE</th>
                <th>CANTIDAD</th>
                <th>UNIDAD</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $num_items=1;
        foreach ($ingredientes as $ingrediente) 
        {?>
            <tr>
                <td><?php echo $num_items ?></td>
                <td><?php echo $ingrediente->Ingrediente[0] ?></td>
                <td><?php echo $ingrediente->getCantidad()?></td>
                <td><?php echo $ingrediente->getUnidad()?></td>
                <td>
                    <ul class="sf_admin_td_actions">
                      <?php 
//                        $helper = new detallesccGeneratorHelper();
//                        echo $helper->linkToEdit($ingrediente, array(  'params' =>   array(  ),  'class_suffix' => 'edit',  'label' => 'Edit',)); 
//                        echo $helper->linkToDelete($ingrediente, array(  'params' =>   array(  ),  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',  'label' => 'Delete',)) ?>
                    </ul>
                </td>
            </tr>
        <?php $num_items++; 
        } ?>    
        </tbody>
</table>
</div>
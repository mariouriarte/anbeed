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
//                    echo format_date($item->Producto->Medicamento->Formulario5[0]->getFechaInicioVigencia(),'yy');
                    
                  
                    $reg_sanitario = "";
                    //se necesitam controLAR EN QUE TABLA SE BUSCARA LOS DETALLES DEL PRODUCTO, LO HAREMOS PREGUNTANDO
                    //EL CODIGO DE PRODUCTO
                    $producto;
                    $codigo =0;
                    if($item->Producto->CodigoProducto->getId()==1)
                    {
                        $producto = $item->Producto->Medicamento->getId();
                        $codigo =1;
                        $fecha_inicio_vigencia = ProductoTable::getFechaInicioVigencia($producto, $codigo);
                        //echo format_date($fecha_vencimiento,'yyyy');
                        //die;
                        if($item->Producto->Medicamento->getRegistroSanitario()!= "" AND $fecha_inicio_vigencia != '')
                        {
                            $reg_sanitario = $item->Producto->CodigoProducto.'-'.
                                             $item->Producto->Medicamento->getRegistroSanitario().'/'.format_date(
                                             $fecha_inicio_vigencia,'yy');
                        }
                        
                    }
                    if($item->Producto->CodigoProducto->getId()==2)
                    {
                        $producto = $item->Producto->DispositivoMedico->getId();
                        $codigo =2; 
                        $fecha_inicio_vigencia = ProductoTable::getFechaInicioVigencia($producto, $codigo);
                        
                        if($item->Producto->DispositivoMedico->getRegistroSanitario()!= "" AND $fecha_inicio_vigencia != '')
                        {
                            $reg_sanitario = $item->Producto->CodigoProducto.'-'.
                                             $item->Producto->DispositivoMedico->getRegistroSanitario().'/'.format_date(
                                             $fecha_inicio_vigencia,'yy');
                        }
                        
                    }
                    if($item->Producto->CodigoProducto->getId()==3)
                    {
                        $producto = $item->Producto->Cosmetico->getId();
                        $codigo =3;
                        $fecha_inicio_vigencia = ProductoTable::getFechaInicioVigencia($producto, $codigo);

                        if($item->Producto->Cosmetico->getRegistroSanitario()!= "" AND $fecha_inicio_vigencia != '')
                        {
                            $reg_sanitario = $item->Producto->CodigoProducto.'-'.
                                             $item->Producto->Cosmetico->getRegistroSanitario().'/'.format_date(
                                             $fecha_inicio_vigencia,'yy');
                        }
                        
                    }
                    if($item->Producto->CodigoProducto->getId()==4)
                    {
                        $producto = $item->Producto->Higiene->getId();
                        $codigo =4;
                        $fecha_inicio_vigencia = ProductoTable::getFechaInicioVigencia($producto, $codigo);

                        if($item->Producto->Higiene->getRegistroSanitario()!= "" AND $fecha_inicio_vigencia != '')
                        {
                            $reg_sanitario = $item->Producto->CodigoProducto.'-'.
                                             $item->Producto->Higiene->getRegistroSanitario().'/'.format_date(
                                             $fecha_inicio_vigencia,'yy');
                        }
                        
                    }
                    if($item->Producto->CodigoProducto->getId()==5)
                    {
                        $producto = $item->Producto->Reactivo->getId();
                        $codigo =5;
                        $fecha_inicio_vigencia = ProductoTable::getFechaInicioVigencia($producto, $codigo);

                        if($item->Producto->Reactivo->getRegistroSanitario()!= "" AND $fecha_inicio_vigencia != '')
                        {
                            $reg_sanitario = $item->Producto->CodigoProducto.'-'.
                                             $item->Producto->Reactivo->getRegistroSanitario().'/'.format_date(
                                             $fecha_inicio_vigencia,'yy');
                        }
                        
                    }
                
                
                ?>
            <tr>
                <td><?php echo $num_items ?></td>
                <td><?php echo $item->getCantidad()?></td>
                <td><?php echo $item->getNombre()?></td>
                <td><?php echo $reg_sanitario?></td>
                <td><?php echo funciones::FormatearFecha($item->getFechaVencimiento())?></td>
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
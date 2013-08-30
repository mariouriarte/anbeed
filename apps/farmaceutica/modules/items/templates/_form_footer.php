<?php use_helper('Date') ?>
<?php 
$q = Doctrine_Core::getTable('Item')->selectItemDeForm11();

$items = $q->execute();
?>

<legend>PRODUCTOS REGISTRADOS</legend>
    <table class="tabla-info-empresa">
        <thead>
            <tr>
                <th>No. ITEM</th>
                <th>CANTIDAD</th>
                <th>PRODUCTO</th>
                <th>No. REGISTRO SANITARIO</th>
                <th>FECHA VENCIMIENTO</th>
                <th>No. LOTE</th>
            </tr>
            
                <?php
                $num_items=1;
                foreach ($items as $item) 
                {
//                    echo format_date($item->Producto->Medicamento->Formulario5[0]->getFechaInicioVigencia(),'YY');
                    
                  
                    $reg_sanitario = "";
                    //se necesitam controLAR EN QUE TABLA SE BUSCARA LOS DETALLES DEL PRODUCTO, LO HAREMOS PREGUNTANDO
                    //EL CODIGO DE PRODUCTO
                    if($item->Producto->CodigoProducto->getId()==1)
                    {
                        $cant_form5 = count($item->Producto->Medicamento->Formulario5);
                        if($item->Producto->Medicamento->getRegistroSanitario()!= "")
                        {
                            $reg_sanitario = $item->Producto->CodigoProducto.'-'.
                                             $item->Producto->Medicamento->getRegistroSanitario().'/'.format_date(
                                            $item->Producto->Medicamento->Formulario5[$cant_form5]->getFechaInicioVigencia(),'YY');
                        }
                    }
                    if($item->Producto->CodigoProducto->getId()==2)
                    {
                        $cant_form27 = count($item->Producto->DispositivoMedico->Formulario27);
                        if($item->Producto->DispositivoMedico->getRegistroSanitario()!= "")
                        {
                            $reg_sanitario = $item->Producto->CodigoProducto.'-'.
                                             $item->Producto->DispositivoMedico->getRegistroSanitario().'/'.format_date(
                                             $item->Producto->DispositivoMedico->Formulario27[$cant_form27]->getFechaInicioVigencia(),'YY');
                        }
                    }
                    if($item->Producto->CodigoProducto->getId()==3)
                    {
                        $cant_form516 = count($item->Producto->Cosmetico->Formulario516);
                        if($item->Producto->Cosmetico->getRegistroSanitario()!= "")
                        {
                            $reg_sanitario = $item->Producto->CodigoProducto.'-'.
                                             $item->Producto->Cosmetico->getRegistroSanitario().'/'.format_date(
                                             $item->Producto->Cosmetico->Formulario516[$cant_form516]->getFechaInicioVigencia(),'YY');
                        }
                    }
                    if($item->Producto->CodigoProducto->getId()==4)
                    {
                        $cant_form706 = count($item->Producto->Higiene->Formulario706);
                        if($item->Producto->Higiene->getRegistroSanitario()!= "")
                        {
                            $reg_sanitario = $item->Producto->CodigoProducto.'-'.
                                             $item->Producto->Higiene->getRegistroSanitario().'/'.format_date(
                                             $item->Producto->Higiene->Formulario706[$cant_form706]->getFechaInicioVigencia(),'YY');
                        }
                    }
                    if($item->Producto->CodigoProducto->getId()==5)
                    {
                        $cant_form12 = count($item->Producto->Reactivo->Formulario12);
                        if($item->Producto->Reactivo->getRegistroSanitario()!= "")
                        {
                            $reg_sanitario = $item->Producto->CodigoProducto.'-'.
                                             $item->Producto->Reactivo->getRegistroSanitario().'/'.format_date(
                                             $item->Producto->Reactivo->Formulario12[$cant_form12]->getFechaInicioVigencia(),'YY');
                        }
                    }
                
                ?>
            <tr>
                <td><?php echo $num_items ?></td>
                <td><?php echo $item->getCantidad()?></td>
                <td><?php echo $item->Producto?></td>
                <td><?php echo $reg_sanitario?></td>
                <td><?php ?></td>
                <td><?php echo $item->getNumLote()?></td>
            </tr>
        <?php $num_items++; } ?>    
        </thead>
        <tbody>
            <tr>

            </tr>
        </tbody>
</table>
<?php

/**
 * ProductoTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ProductoTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object ProductoTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Producto');
    }
    public function ListarProductos( $refValue)
    {
        var_dump($refValue);
        //die();
        $q = Doctrine_Query::create()
                    ->from('Producto p')
                    ->leftJoin('p.Medicamento m')
                    ->leftJoin('p.DispositivoMedico dm')
                    ->leftJoin('p.Cosmetico c')
                    ->leftJoin('p.Higiene h')
                    ->leftJoin('p.Reactivo r')
                    ->where('m.empresa_id = ?', $refValue)
                    ->orwhere('dm.empresa_id = ?', $refValue)
                    ->orwhere('c.empresa_id = ?', $refValue)
                    ->orwhere('h.empresa_id = ?', 1)
                    ->orwhere('r.empresa_id = ?', $refValue)
                    ->orderBy('p.id ASC');
            
        return $q;
    }
    public function ProductosEmpresa()
    {
        $user = sfContext::getInstance()->getUser();
        $empresa = $user->getAttribute('empresa');
        $q = Doctrine_Query::create()
                    ->from('Producto p')
                    ->leftJoin('p.Medicamento m')
                    ->leftJoin('p.DispositivoMedico dm')
                    ->leftJoin('p.Cosmetico c')
                    ->leftJoin('p.Higiene h')
                    ->leftJoin('p.Reactivo r')
                    ->where('m.empresa_id = ?', $empresa->getId())
                    ->orwhere('dm.empresa_id = ?', $empresa->getId())
                    ->orwhere('c.empresa_id = ?', $empresa->getId())
                    ->orwhere('h.empresa_id = ?', $empresa->getId())
                    ->orwhere('r.empresa_id = ?', $empresa->getId())
                    ->orderBy('p.codigo_producto_id ASC');
            
        return $q;
        
    }
    public function ProductosItemsEmpresa()
    {
        //ESTA FUNCION SIRVE PARA DISCRIMINAR QUE ITEMS HAY DISPONIBLES, ES DECIR QUE NO ESTEN REGISTRADOS EN LOS DESPACHOS ADUANEROS
        //  DE LA EMPRESA//
        $user = sfContext::getInstance()->getUser();
        $empresa = $user->getAttribute('empresa');
        $item = $user->getAttribute('item_producto');
        // SI EL ACTION ES EDITAR OBTENEMOS EL PRODUCTO DEL ITEM
        if($item != NULL)
        {
            $q = Doctrine_Query::create()
                        ->from('Producto p')
                        ->leftJoin('p.Medicamento m')
                        ->leftJoin('p.DispositivoMedico dm')
                        ->leftJoin('p.Cosmetico c')
                        ->leftJoin('p.Higiene h')
                        ->leftJoin('p.Reactivo r')
                        ->leftJoin('p.Item i')
                        ->where("(m.empresa_id = ".$empresa->getId()."
                                  OR dm.empresa_id = ".$empresa->getId()." 
                                  OR c.empresa_id = ".$empresa->getId()." 
                                  OR h.empresa_id = ".$empresa->getId()."
                                  OR r.empresa_id = ".$empresa->getId()."
                                 ) AND 
                                 ( NOT EXISTS (select i.producto_id from item 
                                    WHERE i.producto_id = p.id ) 
                                    OR ( p.id = ".$item->Producto->getId().")
                                  )")
                        ->orderBy('p.codigo_producto_id ASC');
            
        }
        else
        {
           //SOLO MOSTRAMOS TODOS LOS PRODUCTOS QUE NO ESTAN AGREGADOS AL ITEM DEL DESPACHO ADUANERO
            $q = Doctrine_Query::create()
                    ->from('Producto p')
                    ->leftJoin('p.Medicamento m')
                    ->leftJoin('p.DispositivoMedico dm')
                    ->leftJoin('p.Cosmetico c')
                    ->leftJoin('p.Higiene h')
                    ->leftJoin('p.Reactivo r')
                    ->leftJoin('p.Item i')
                    ->where("(m.empresa_id = ".$empresa->getId()."
                              OR dm.empresa_id = ".$empresa->getId()." 
                              OR c.empresa_id = ".$empresa->getId()." 
                              OR h.empresa_id = ".$empresa->getId()."
                              OR r.empresa_id = ".$empresa->getId()."
                             ) AND (NOT EXISTS (select i.producto_id from item WHERE i.producto_id = p.id))")
                    ->orderBy('p.codigo_producto_id ASC');
            

        }
        
        return $q;
        
    }
    public function selectProductosCaducidad()
    {
        $user = sfContext::getInstance()->getUser();
        $meses = $user->getAttribute('meses');
//        echo $meses;
//        die;
        $meses *= 30;
        
        $q = Doctrine_Query::create()
                        ->from('Producto p')
                        ->leftJoin('p.Medicamento m')
                        ->leftJoin('p.DispositivoMedico dm')
                        ->leftJoin('p.Cosmetico c')
                        ->leftJoin('p.Higiene h')
                        ->leftJoin('p.Reactivo r')
                        ->leftJoin('m.Formulario5 f5')
                        ->leftJoin('dm.Formulario27 f27')
                        ->leftJoin('r.Formulario12 f12')
                        ->leftJoin('c.Formulario516 f516')
                        ->leftJoin('h.Formulario706 f706')
                        ->where("    f5.fecha_inicio_vigencia+(f5.vigencia*30) <= current_date + interval '".$meses." day'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
                                  OR f27.fecha_inicio_vigencia+(f27.vigencia*30) <= current_date + interval '".$meses." day'
                                  OR f12.fecha_inicio_vigencia+(f12.vigencia*30) <= current_date + interval '".$meses." day'
                                  OR f516.fecha_inicio_vigencia+(f516.vigencia*30) <= current_date + interval '".$meses." day'
                                  OR f706.fecha_inicio_vigencia+(f706.vigencia*30) <= current_date + interval '".$meses." day'")
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ->orderBy('p.id ASC');
        return $q;
    }
    public static function getFechaVencimientoItems($producto, $codigo)
    {

       if($codigo == 1)
       {
           $q = Doctrine_Query::create()
                ->select('MAX(f5.id) as max')
                ->from('Formulario5 f5')
                ->where('f5.medicamento_id = ?', $producto);

           $f5 =  $q->fetchOne();
           if($f5['max'] != null)
           {
                $f5 = Doctrine::getTable('Formulario5')->find($f5['max']);
                $fecha_inicio = $f5->getFechaInicioVigencia();
                $vigencia = $f5->getVigencia();
                //return funciones::FechaEspanol(date("Y-m-d", strtotime("$fecha_inicio +$vigencia month")));
                if($fecha_inicio != null)
                    return funciones::FormatearFecha(date("Y-m-d", strtotime("$fecha_inicio +$vigencia month")));
                else
                    return "";
           }
           else 
               return "";
       }
       if($codigo == 2)
       {
           $q = Doctrine_Query::create()
                ->select('MAX(f27.id) as max')
                ->from('Formulario27 f27')
                ->where('f27.dispositivo_medico_id = ?', $producto);
           
           $f27 =  $q->fetchOne();
           
           if($f27['max'] != null)
           {
                $f27 = Doctrine::getTable('Formulario27')->find($f27['max']);
                $fecha_inicio = $f27->getFechaInicioVigencia();
                $vigencia = $f27->getVigencia();
                //return funciones::FechaEspanol(date("Y-m-d", strtotime("$fecha_inicio +$vigencia month")));
                if($fecha_inicio != null)
                    return funciones::FormatearFecha(date("Y-m-d", strtotime("$fecha_inicio +$vigencia month")));
                else
                    return "";
           }
           else
               return "";
       } 
       if($codigo == 3)
       {  
           $q = Doctrine_Query::create()
                ->select('MAX(f516.id) as max')
                ->from('Formulario516 f516')
                ->where('f516.cosmetico_id = ?', $producto);
           
           $f516 =  $q->fetchOne();
           
           if($f516['max'] != null)
           {
                $f516 = Doctrine::getTable('Formulario516')->find($f516['max']);
                $fecha_inicio = $f516->getFechaInicioVigencia();
                $vigencia = $f516->getVigencia();
                //return funciones::FechaEspanol(date("Y-m-d", strtotime("$fecha_inicio +$vigencia month")));
                if($fecha_inicio != null)
                    return funciones::FormatearFecha(date("Y-m-d", strtotime("$fecha_inicio +$vigencia month")));
                else
                    return "";
           }
           else
               return "";
       } 
       if($codigo == 4)
       {  
           $q = Doctrine_Query::create()
                ->select('MAX(f706.id) as max')
                ->from('Formulario706 f706')
                ->where('f706.higiene_id = ?', $producto);
           
           $f706 =  $q->fetchOne();
           
           if($f706['max'] != null)
           {
                $f706 = Doctrine::getTable('Formulario706')->find($f706['max']);
                $fecha_inicio = $f706->getFechaInicioVigencia();
                $vigencia = $f706->getVigencia();
                //return funciones::FechaEspanol(date("Y-m-d", strtotime("$fecha_inicio +$vigencia month")));
                if($fecha_inicio != null)
                    return funciones::FormatearFecha(date("Y-m-d", strtotime("$fecha_inicio +$vigencia month")));
                else
                    return "";
           }
           else
               return "";
       }
       if($codigo == 5)
       {
           $q = Doctrine_Query::create()
                ->select('MAX(f12.id) as max')
                ->from('Formulario12 f12')
                ->where('f12.reactivo_id = ?', $producto);
           
           $f12 =  $q->fetchOne();
           
           if($f12['max'] != null)
           {
                $f12 = Doctrine::getTable('Formulario12')->find($f12['max']);
                $fecha_inicio = $f12->getFechaInicioVigencia();
                $vigencia = $f12->getVigencia();
                //return funciones::FechaEspanol(date("Y-m-d", strtotime("$fecha_inicio +$vigencia month")));
                if($fecha_inicio != null)
                    return funciones::FormatearFecha(date("Y-m-d", strtotime("$fecha_inicio +$vigencia month")));
                else
                    return "";
           }
           else
               return "";
       }
    }
    public static function getFechaInicioVigencia($producto, $codigo)
    {

       if($codigo == 1)
       {
           $q = Doctrine_Query::create()
                ->select('MAX(f5.id) as max')
                ->from('Formulario5 f5')
                ->where('f5.medicamento_id = ?', $producto);

           $f5 =  $q->fetchOne();
           if($f5['max'] != null)
           {
                $f5 = Doctrine::getTable('Formulario5')->find($f5['max']);
                return $fecha_inicio = $f5->getFechaInicioVigencia();
           }
           else 
               return "";
       }
       if($codigo == 2)
       {
           $q = Doctrine_Query::create()
                ->select('MAX(f27.id) as max')
                ->from('Formulario27 f27')
                ->where('f27.dispositivo_medico_id = ?', $producto);
           
           $f27 =  $q->fetchOne();
           
           if($f27['max'] != null)
           {
                $f27 = Doctrine::getTable('Formulario27')->find($f27['max']);
                return $fecha_inicio = $f27->getFechaInicioVigencia();
           }
           else
               return "";
       } 
       if($codigo == 3)
       {  
           $q = Doctrine_Query::create()
                ->select('MAX(f516.id) as max')
                ->from('Formulario516 f516')
                ->where('f516.cosmetico_id = ?', $producto);
           
           $f516 =  $q->fetchOne();
           
           if($f516['max'] != null)
           {
                $f516 = Doctrine::getTable('Formulario516')->find($f516['max']);
                return $fecha_inicio = $f516->getFechaInicioVigencia();
           }
           else
               return "";
       } 
       if($codigo == 4)
       {  
           $q = Doctrine_Query::create()
                ->select('MAX(f706.id) as max')
                ->from('Formulario706 f706')
                ->where('f706.higiene_id = ?', $producto);
           
           $f706 =  $q->fetchOne();
           
           if($f706['max'] != null)
           {
                $f706 = Doctrine::getTable('Formulario706')->find($f706['max']);
                return $fecha_inicio = $f706->getFechaInicioVigencia();
           }
           else
               return "";
       }
       if($codigo == 5)
       {
           $q = Doctrine_Query::create()
                ->select('MAX(f12.id) as max')
                ->from('Formulario12 f12')
                ->where('f12.reactivo_id = ?', $producto);
           
           $f12 =  $q->fetchOne();
           
           if($f12['max'] != null)
           {
                $f12 = Doctrine::getTable('Formulario12')->find($f12['max']);
                return $fecha_inicio = $f12->getFechaInicioVigencia();
           }
           else
               return "";
       }
    }
}
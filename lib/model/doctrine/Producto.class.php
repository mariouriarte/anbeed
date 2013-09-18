<?php

/**
 * Producto
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    anbeed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Producto extends BaseProducto
{
    public function __toString()
    {
       if($this->getCodigoProductoId() == 1)
       {
           return $this->CodigoProducto->getNombre()." - ".$this->Medicamento->getNombreComercial();
       }
       
       if($this->getCodigoProductoId() == 2)
       {  
           return $this->CodigoProducto->getNombre()." - ".$this->DispositivoMedico->getNombreComercial();
       }
       
       if($this->getCodigoProductoId() == 3)
       {  
           return $this->CodigoProducto->getNombre()." - ".$this->Cosmetico->getNombre();
       } 
       if($this->getCodigoProductoId() == 4)
       {  
           return $this->CodigoProducto->getNombre()." - ".$this->Higiene->getNombre();
       }
       
       if($this->getCodigoProductoId() == 5)
           return $this->CodigoProducto->getNombre()." - ".$this->Reactivo->getNombreComercial();
    }
    
    public function getProducto()
    {
       
       if($this->getCodigoProductoId() == 1)
       {
           return $this->CodigoProducto->getNombre()." - ".$this->Medicamento->getNombreComercial();
       }
       
       if($this->getCodigoProductoId() == 2)
       {  
           return $this->CodigoProducto->getNombre()." - ".$this->DispositivoMedico->getNombreComercial();
       }
       
       if($this->getCodigoProductoId() == 3)
       {  
           return $this->CodigoProducto->getNombre()." - ".$this->Cosmetico->getNombre();
       } 
       if($this->getCodigoProductoId() == 4)
       {  
           return $this->CodigoProducto->getNombre()." - ".$this->Higiene->getNombre();
       }
       
       if($this->getCodigoProductoId() == 5)
           return $this->CodigoProducto->getNombre()." - ".$this->Reactivo->getNombreComercial();
    }
    
    public function getEmpresa()
    {
        
       if($this->getCodigoProductoId() == 1)
       {
           //echo $this->getCodigoProductoId(); die;
           return $this->Medicamento->Empresa->getRazonSocial();
       }
       if($this->getCodigoProductoId() == 2)
       {  
           return $this->DispositivoMedico->Empresa->getRazonSocial();
       } 
       if($this->getCodigoProductoId() == 3)
       { 
           return $this->Cosmetico->Empresa->getRazonSocial();
       } 
       if($this->getCodigoProductoId() == 4)
       {  
           return $this->Higiene->Empresa->getRazonSocial();
       }
       if($this->getCodigoProductoId() == 5)
       {
           return $this->Reactivo->Empresa->getRazonSocial();
       }
    }
    
    public function getLaboratorio()
    {
       //echo $this->Medicamento->LaboratorioFabricante->getNombre();
       if($this->getCodigoProductoId() == 1)
       {
           return $this->Medicamento->LaboratorioFabricante->getNombre();
       }
       if($this->getCodigoProductoId() == 2)
       {  
           return $this->DispositivoMedico->LaboratorioFabricante->getNombre();
       } 
       if($this->getCodigoProductoId() == 3)
       {  
           return $this->Cosmetico->LaboratorioFabricante->getNombre();
       } 
       if($this->getCodigoProductoId() == 4)
       {  
           return $this->Higiene->LaboratorioFabricante->getNombre();
       }
       if($this->getCodigoProductoId() == 5)
       {
           return $this->Reactivo->LaboratorioFabricante->getNombre();
       }
    }
    
    public function getFechaVencimiento()
    {
       if($this->getCodigoProductoId() == 1)
       {
           $q = Doctrine_Query::create()
                ->select('MAX(f5.id) as max')
                ->from('Formulario5 f5')
                ->where('f5.medicamento_id = ?', $this->Medicamento->getId());

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
       if($this->getCodigoProductoId() == 2)
       {
           $q = Doctrine_Query::create()
                ->select('MAX(f27.id) as max')
                ->from('Formulario27 f27')
                ->where('f27.dispositivo_medico_id = ?', $this->DispositivoMedico->getId());
           
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
       if($this->getCodigoProductoId() == 3)
       {  
           $q = Doctrine_Query::create()
                ->select('MAX(f516.id) as max')
                ->from('Formulario516 f516')
                ->where('f516.cosmetico_id = ?', $this->Cosmetico->getId());
           
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
       if($this->getCodigoProductoId() == 4)
       {  
           $q = Doctrine_Query::create()
                ->select('MAX(f706.id) as max')
                ->from('Formulario706 f706')
                ->where('f706.higiene_id = ?', $this->Higiene->getId());
           
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
       if($this->getCodigoProductoId() == 5)
       {
           $q = Doctrine_Query::create()
                ->select('MAX(f12.id) as max')
                ->from('Formulario12 f12')
                ->where('f12.reactivo_id = ?', $this->Reactivo->getId());
           
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
    public function getVigencia()
    {
       if($this->getCodigoProductoId() == 1)
       {
           $q = Doctrine_Query::create()
                ->select('MAX(f5.id) as max')
                ->from('Formulario5 f5')
                ->where('f5.medicamento_id = ?', $this->Medicamento->getId());

           $f5 =  $q->fetchOne();
           if($f5['max'] != null)
           {
               $f5 = Doctrine::getTable('Formulario5')->find($f5['max']); 
               $vigencia = $f5->getVigencia();
                if($vigencia != null)
                    return $vigencia." mes(es)" ;
                else
                    return "";
           }
           else 
               return "";
       }
       if($this->getCodigoProductoId() == 2)
       {
           $q = Doctrine_Query::create()
                ->select('MAX(f27.id) as max')
                ->from('Formulario27 f27')
                ->where('f27.dispositivo_medico_id = ?', $this->DispositivoMedico->getId());
           
           $f27 =  $q->fetchOne();
           
           if($f27['max'] != null)
           {
                $f27 = Doctrine::getTable('Formulario27')->find($f27['max']);
                $vigencia = $f27->getVigencia();
                if($vigencia != null)
                    return $vigencia." mes(es)" ;
                else
                    return "";
           }
           else
               return "";
       } 
       if($this->getCodigoProductoId() == 3)
       {  
           $q = Doctrine_Query::create()
                ->select('MAX(f516.id) as max')
                ->from('Formulario516 f516')
                ->where('f516.cosmetico_id = ?', $this->Cosmetico->getId());
           
           $f516 =  $q->fetchOne();
           
           if($f516['max'] != null)
           {
                $f516 = Doctrine::getTable('Formulario516')->find($f516['max']);
                $vigencia = $f516->getVigencia();
                if($vigencia != null)
                    return $vigencia." mes(es)" ;
                else
                    return "";
           }
           else
               return "";
       } 
       if($this->getCodigoProductoId() == 4)
       {  
           $q = Doctrine_Query::create()
                ->select('MAX(f706.id) as max')
                ->from('Formulario706 f706')
                ->where('f706.higiene_id = ?', $this->Higiene->getId());
           
           $f706 =  $q->fetchOne();
           
           if($f706['max'] != null)
           {
                $f706 = Doctrine::getTable('Formulario706')->find($f706['max']);
                $vigencia = $f706->getVigencia();
                if($vigencia != null)
                    return $vigencia." mes(es)" ;
                else
                    return "";
           }
           else
               return "";
       }
       if($this->getCodigoProductoId() == 5)
       {
           $q = Doctrine_Query::create()
                ->select('MAX(f12.id) as max')
                ->from('Formulario12 f12')
                ->where('f12.reactivo_id = ?', $this->Reactivo->getId());
           
           $f12 =  $q->fetchOne();
           
           if($f12['max'] != null)
           {
                $f12 = Doctrine::getTable('Formulario12')->find($f12['max']);
                $vigencia = $f12->getVigencia();
                if($vigencia != null)
                    return $vigencia." mes(es)" ;
                else
                    return "";
           }
           else
               return "";
       }
    }
    
     public function getFechaInicio()
    {
       if($this->getCodigoProductoId() == 1)
       {
           $q = Doctrine_Query::create()
                ->select('MAX(f5.id) as max')
                ->from('Formulario5 f5')
                ->where('f5.medicamento_id = ?', $this->Medicamento->getId());

           $f5 =  $q->fetchOne();
           if($f5['max'] != null)
           {
                $f5 = Doctrine::getTable('Formulario5')->find($f5['max']);
                $fecha_inicio = $f5->getFechaInicioVigencia();
                if($fecha_inicio != null)
                    return funciones::FormatearFecha ($fecha_inicio);
                else
                    return "";
           }
           else 
               return "";
       }
       if($this->getCodigoProductoId() == 2)
       {
           $q = Doctrine_Query::create()
                ->select('MAX(f27.id) as max')
                ->from('Formulario27 f27')
                ->where('f27.dispositivo_medico_id = ?', $this->DispositivoMedico->getId());
           
           $f27 =  $q->fetchOne();
           
           if($f27['max'] != null)
           {
                $f27 = Doctrine::getTable('Formulario27')->find($f27['max']);
                $fecha_inicio = $f27->getFechaInicioVigencia();
                if($fecha_inicio != null)
                    return funciones::FormatearFecha ($fecha_inicio);
                else
                    return "";
           }
           else
               return "";
       } 
       if($this->getCodigoProductoId() == 3)
       {  
           $q = Doctrine_Query::create()
                ->select('MAX(f516.id) as max')
                ->from('Formulario516 f516')
                ->where('f516.cosmetico_id = ?', $this->Cosmetico->getId());
           
           $f516 =  $q->fetchOne();
           
           if($f516['max'] != null)
           {
                $f516 = Doctrine::getTable('Formulario516')->find($f516['max']);
                $fecha_inicio = $f516->getFechaInicioVigencia();
                if($fecha_inicio != null)
                    return funciones::FormatearFecha ($fecha_inicio);
                else
                    return "";
           }
           else
               return "";
       } 
       if($this->getCodigoProductoId() == 4)
       {  
           $q = Doctrine_Query::create()
                ->select('MAX(f706.id) as max')
                ->from('Formulario706 f706')
                ->where('f706.higiene_id = ?', $this->Higiene->getId());
           
           $f706 =  $q->fetchOne();
           
           if($f706['max'] != null)
           {
                $f706 = Doctrine::getTable('Formulario706')->find($f706['max']);
                $fecha_inicio = $f706->getFechaInicioVigencia();
                if($fecha_inicio != null)
                    return funciones::FormatearFecha ($fecha_inicio);
                else
                    return "";
           }
           else
               return "";
       }
       if($this->getCodigoProductoId() == 5)
       {
           $q = Doctrine_Query::create()
                ->select('MAX(f12.id) as max')
                ->from('Formulario12 f12')
                ->where('f12.reactivo_id = ?', $this->Reactivo->getId());
           
           $f12 =  $q->fetchOne();
           
           if($f12['max'] != null)
           {
                $f12 = Doctrine::getTable('Formulario12')->find($f12['max']);
                $fecha_inicio = $f12->getFechaInicioVigencia();
                if($fecha_inicio != null)
                    return funciones::FormatearFecha ($fecha_inicio);
                else
                    return "";
           }
           else
               return "";
       }
    }
}

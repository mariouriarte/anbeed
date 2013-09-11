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
    
}

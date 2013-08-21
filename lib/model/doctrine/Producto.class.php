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
       if($this->Medicamento->getId())
       {
           return $this->Medicamento->getNombreComercial();
       }
       else if($this->DispositivoMedico->getId())
       {  
           return $this->DispositivoMedico->getNombreComercial();
       } 
       else if($this->Cosmetico->getId())
       {  
           return $this->Cosmetico->getMarca();
       } 
       else if($this->Higiene->getId())
       {  
           return $this->Higiene->getMarca();
       }
       else
           return $this->Reactivo->getNombreComercial();
    }
}

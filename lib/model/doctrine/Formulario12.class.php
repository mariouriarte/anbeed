<?php

/**
 * Formulario12
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    anbeed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Formulario12 extends BaseFormulario12
{
    public function getEmpresa()
    {
        return $this-> Reactivo -> Empresa;
    }
    
    public function getLaboratorioFabricante()
    {
        return $this-> Reactivo -> LaboratorioFabricante;
    }
}

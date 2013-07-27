<?php

/**
 * Formulario706Table
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Formulario706Table extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object Formulario706Table
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Formulario706');
    }
    public function selectForms706Dehigiene()
    {
        $user = sfContext::getInstance()->getUser();
        $higiene = $user->getAttribute('higiene');
        $q = Doctrine_Query::create()
                    ->from('Formulario706 f')
                    ->leftJoin('f.TipoTramiteFormulario tf')
                    ->where('f.higiene_id = ?', $higiene->getId())
                    ->orderBy('f.id ASC');
            
        return $q;
    }
    public function selectForms706DeEmpresa()
    {
        $user = sfContext::getInstance()->getUser();
        $empresa = $user->getAttribute('empresa');
        
        $q = Doctrine_Query::create()
            ->from('Formulario706 f')
            ->leftJoin('f.Higiene d')
            #->leftJoin('d.Empresa e') 
            ->where('d.empresa_id = ?', $empresa->getId())
            ->orderBy('f.id ASC');
        
        return $q;
    }
}
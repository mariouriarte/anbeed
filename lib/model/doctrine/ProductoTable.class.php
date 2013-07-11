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
    public function selectMedicamentosDeEmpresa()
    {
        $user = sfContext::getInstance()->getUser();
        $empresa = $user->getAttribute('empresa');
        $q = Doctrine_Query::create()
                    ->from('Producto f')
                    ->where('f.empresa_id = ?', $empresa->getId())
                    ->orderBy('f.id ASC');
            
        return $q;
    }
}
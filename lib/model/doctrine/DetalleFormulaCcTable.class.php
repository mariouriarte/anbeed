<?php

/**
 * DetalleFormulaCcTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class DetalleFormulaCcTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object DetalleFormulaCcTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('DetalleFormulaCc');
    }
    public static function getIngredientes($formulaCc)
    {
        $q = Doctrine_Query::create()
                    ->from('DetalleFormulaCc dfcc')
                    ->where('dfcc.formula_cc_id = ?', $formulaCc)
                    ->orderBy('dfcc.id ASC');
        return $q;
    }
}
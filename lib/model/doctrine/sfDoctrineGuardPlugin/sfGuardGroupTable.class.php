<?php

/**
 * sfGuardGroupTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class sfGuardGroupTable extends PluginsfGuardGroupTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object sfGuardGroupTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('sfGuardGroup');
    }
    
    public static function GrupoUsuarios()
    {
        $q = Doctrine_Query::create()
                    ->from('sfGuardGroup g')
                    ->where('i.id != ? AND i.id != ?', 1,2)
                    ->orderBy('i.id ASC');
        return $q;
    }
    
}
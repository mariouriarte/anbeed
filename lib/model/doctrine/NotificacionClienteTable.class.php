<?php

/**
 * NotificacionClienteTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class NotificacionClienteTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object NotificacionClienteTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('NotificacionCliente');
    }
    
    public function selectNotificacionesOrdenadas()
    {
        $user = sfContext::getInstance()->getUser();
        $empresa = $user->getAttribute('empresa');
        
        $q = Doctrine_Query::create()
            ->from('NotificacionCliente n')
            ->where('n.empresa_id = ?', $empresa->getId())
            ->orderBy('n.created_at DESC');
            
        return $q;
    }
    
    public function selectNoticiasCliente()
    {
        $user = sfContext::getInstance()->getUser();
        $id = $user->getGuardUser()->getEmpresaId();
        
        $q = Doctrine_Query::create()
            ->from('NotificacionCliente n')
            ->where('n.empresa_id = ?', $id)
            ->orderBy('n.created_at DESC');
            
        return $q;
    }
    
}
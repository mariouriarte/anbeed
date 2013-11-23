<?php

/**
 * SolicitudServicioTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class SolicitudServicioTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object SolicitudServicioTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('SolicitudServicio');
    }
    
    public function selectSolicitudDeEmpresa()
    {
        $user = sfContext::getInstance()->getUser();
        $empresa = $user->getAttribute('empresa');
        $q = Doctrine_Query::create()
                    ->from('Solicitud s')
                    ->where('s.empresa_id = ?', $empresa->getId())
                    ->orderBy('s.id ASC');
            
        return $q;
    }
}
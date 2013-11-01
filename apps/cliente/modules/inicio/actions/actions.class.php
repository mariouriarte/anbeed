<?php

/**
 * inicio actions.
 *
 * @package    anbeed
 * @subpackage inicio
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class inicioActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
    public function executeIndex(sfWebRequest $request)
    {
        $environment = sfConfig::get('sf_environment');
        if($environment == 'dev')
        {
            $this->env = '_dev';
        } else if($environment == 'prod')
        {
            $this->env = '';
        }
        
        $empresa =  $this->getUser()->getGuardUser()->getEmpresa();
        
        $id = $this->getUser()->getGuardUser()->getEmpresaId();
        
        $this->notificaciones = Doctrine_Query::create()
            ->from('NotificacionCliente n')
            ->where('n.empresa_id = ?', $id)
            ->orderBy('n.created_at DESC')
            ->limit(6)
            ->execute();
        
        //$this->empresa = $this->getRoute()->getObject();
        
        $this->getUser()->setAttribute('empresa', $empresa);
    }
    
    public function executeSecure()
    {
        
    }

    
    
}

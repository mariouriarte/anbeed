<?php

require_once dirname(__FILE__).'/../lib/noti_clienteGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/noti_clienteGeneratorHelper.class.php';

/**
 * noti_cliente actions.
 *
 * @package    anbeed
 * @subpackage noti_cliente
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class noti_clienteActions extends autoNoti_clienteActions
{
    public function executeListAdmEmpresa(sfWebRequest $request) 
    {
        $user = $this->getUser();
        $empresa = $user->getAttribute('empresa');
        $this->redirect('empresas/administrarEmpresa?id=' . $empresa->getId());
    }
    
    public function executeNew(sfWebRequest $request)
    {
        parent::executeNew($request);
        
        $widget = $this->form->getWidgetSchema();
        
        $widget['empresa_id'] = new sfWidgetFormInputHidden();
        
        $empresa = $this->getUser()->getAttribute('empresa');
        $this->form->setDefault('empresa_id', $empresa->getId());
    }
    
    public function executeCreate(sfWebRequest $request)
    {
        parent::executeCreate($request);
        
        $widget = $this->form->getWidgetSchema();
        
        $widget['empresa_id'] = new sfWidgetFormInputHidden();
        
        $empresa = $this->getUser()->getAttribute('empresa');
        $this->form->setDefault('empresa_id', $empresa->getId());
        
    }
    
    public function executeEdit(sfWebRequest $request)
    {
        parent::executeEdit($request);
        
        $widget = $this->form->getWidgetSchema();
        
        $widget['empresa_id'] = new sfWidgetFormInputHidden();
        
        $empresa = $this->getUser()->getAttribute('empresa');
        $this->form->setDefault('empresa_id', $empresa->getId());
    }
  
    public function executeUpdate(sfWebRequest $request)
    {
        $this->notificacion_cliente = $this->getRoute()->getObject();
        $this->form = $this->configuration->getForm($this->notificacion_cliente);
  
        $widget = $this->form->getWidgetSchema();
        
        $widget['empresa_id'] = new sfWidgetFormInputHidden();
        
        $empresa = $this->getUser()->getAttribute('empresa');
        $this->form->setDefault('empresa_id', $empresa->getId());
        
        $this->processForm($request, $this->form);
  
        $this->setTemplate('edit');
    }
    
}

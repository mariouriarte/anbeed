<?php

require_once dirname(__FILE__).'/../lib/itemsGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/itemsGeneratorHelper.class.php';

/**
 * items actions.
 *
 * @package    anbeed
 * @subpackage items
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class itemsActions extends autoItemsActions
{
    public function executeListIrForm11(sfWebRequest $request)
    {
        $this->redirect('formulario11');
    }
    
    public function executeListIrEmpresa(sfWebRequest $request)
    {
        $user = sfContext::getInstance()->getUser();
        $empresa = $user->getAttribute('empresa');
        $this->redirect('empresas/administrarEmpresa?id='.$empresa->getId());
    }
    public function executeNew(sfWebRequest $request)
    {
        $this->form = $this->configuration->getForm();
        $this->item = $this->form->getObject();
        
        $form11 = $this->getUser()->getAttribute('form11');
        $this->form->setDefault('formulario11_id', $form11->getId());
        $user = $this->getUser();
        $user->getAttributeHolder()->remove('item_producto');
    }
    public function executeEdit(sfWebRequest $request)
    {
        $this->item = $this->getRoute()->getObject();
        $this->form = $this->configuration->getForm($this->item);
        
        
        $user = $this->getUser();
        $this->item = $this->getRoute()->getObject();
        
        $user->setAttribute('item_producto', $this->item);
        
    }
    
}

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
}

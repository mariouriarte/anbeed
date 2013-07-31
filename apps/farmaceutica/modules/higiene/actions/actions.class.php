<?php

require_once dirname(__FILE__).'/../lib/higieneGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/higieneGeneratorHelper.class.php';

/**
 * higiene actions.
 *
 * @package    anbeed
 * @subpackage higiene
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class higieneActions extends autoHigieneActions
{
    public function executeListAdmEmpresa(sfWebRequest $request)
    {
        $user = $this->getUser();
        $empresa = $user->getAttribute('empresa');
        $this->redirect('empresas/administrarEmpresa?id='.$empresa->getId());
    }
    
    public function executeListIrForm706(sfWebRequest $request)
    {
        $user = $this->getUser();
        
        $higiene = $this->getRoute()->getObject();
        $user->setAttribute('higiene', $higiene);
        $this->redirect('formulario706/index');
    }
}

<?php

require_once dirname(__FILE__).'/../lib/pri_etapaGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/pri_etapaGeneratorHelper.class.php';

/**
 * pri_etapa actions.
 *
 * @package    anbeed
 * @subpackage pri_etapa
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class pri_etapaActions extends autoPri_etapaActions
{
    public function executeNew(sfWebRequest $request)
    {
        $this->form = $this->configuration->getForm();
        $this->iniciacion_formulario = $this->form->getObject();
       
        $empresa = $this->getUser()->getAttribute('empresa');
        
        $this->form->setDefault('empresa_id', $empresa->getId());
    }
    
    public function executeListAdmEmpresa(sfWebRequest $request) 
    {
        $user = $this->getUser();
        $empresa = $user->getAttribute('empresa');
        $this->redirect('empresas/administrarEmpresa?id=' . $empresa->getId());
    }
}

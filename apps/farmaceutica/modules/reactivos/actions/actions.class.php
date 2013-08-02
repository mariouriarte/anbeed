<?php

require_once dirname(__FILE__).'/../lib/reactivosGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/reactivosGeneratorHelper.class.php';

/**
 * reactivos actions.
 *
 * @package    anbeed
 * @subpackage reactivos
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class reactivosActions extends autoReactivosActions
{
    public function executeListAdmEmpresa(sfWebRequest $request)
    {
        $user = $this->getUser();
        $empresa = $user->getAttribute('empresa');
        $this->redirect('empresas/administrarEmpresa?id=' . $empresa->getId());
    }
    
    public function executeIrForm27(sfWebRequest $request)
    {
        $user = $this->getUser();
        $this->reactivo = $this->getRoute()->getObject();
        $user->setAttribute('reactivo', $this->reactivo);
        $this->redirect('/farmaceutica_dev.php/formulario12');
    }
}

<?php

require_once dirname(__FILE__).'/../lib/formulario12porempresaGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/formulario12porempresaGeneratorHelper.class.php';

/**
 * formulario12porempresa actions.
 *
 * @package    anbeed
 * @subpackage formulario12porempresa
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class formulario12porempresaActions extends autoFormulario12porempresaActions
{
    public function executeListIrEmpresa(sfWebRequest $request)
    {
        $user = sfContext::getInstance()->getUser();
        $empresa = $user->getAttribute('empresa');
        $this->redirect('empresas/administrarEmpresa?id='.$empresa->getId());
    }
    public function executeEdit(sfWebRequest $request)
    { 
        $this->formulario12 = $this->getRoute()->getObject();
        $user = sfContext::getInstance()->getUser();
        $user->setAttribute('reactivo3', $this->formulario12->Reactivo);
        $this->form = $this->configuration->getForm($this->formulario12);
    }
}

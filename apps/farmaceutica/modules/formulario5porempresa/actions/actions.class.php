<?php

require_once dirname(__FILE__).'/../lib/formulario5porempresaGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/formulario5porempresaGeneratorHelper.class.php';

/**
 * formulario5porempresa actions.
 *
 * @package    anbeed
 * @subpackage formulario5porempresa
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class formulario5porempresaActions extends autoFormulario5porempresaActions
{
    public function executeListIrEmpresa(sfWebRequest $request)
    {
        $user = sfContext::getInstance()->getUser();
        $empresa = $user->getAttribute('empresa');
        $this->redirect('empresas/administrarEmpresa?id='.$empresa->getId());
    }
    public function executeEdit(sfWebRequest $request)
    { 
        $this->formulario5 = $this->getRoute()->getObject();
        $user = sfContext::getInstance()->getUser();
        $user->setAttribute('medicamento3', $this->formulario5->Medicamento);
        $this->form = $this->configuration->getForm($this->formulario5);
    }
}

<?php

require_once dirname(__FILE__).'/../lib/formulario27porempresaGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/formulario27porempresaGeneratorHelper.class.php';

/**
 * formulario27porempresa actions.
 *
 * @package    anbeed
 * @subpackage formulario27porempresa
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class formulario27porempresaActions extends autoFormulario27porempresaActions
{
    public function executeListIrEmpresa(sfWebRequest $request)
    {
        $user = sfContext::getInstance()->getUser();
        $empresa = $user->getAttribute('empresa');
        $this->redirect('empresas/administrarEmpresa?id='.$empresa->getId());
    }
    public function executeEdit(sfWebRequest $request)
    { 
        $this->formulario27 = $this->getRoute()->getObject();
        $user = sfContext::getInstance()->getUser();
        $user->setAttribute('dispositivo_medico3', $this->formulario27->DispositivoMedico);
        $this->form = $this->configuration->getForm($this->formulario27);
    }
}

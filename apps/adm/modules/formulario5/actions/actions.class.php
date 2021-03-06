<?php

require_once dirname(__FILE__).'/../lib/formulario5GeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/formulario5GeneratorHelper.class.php';

/**
 * formulario5 actions.
 *
 * @package    anbeed
 * @subpackage formulario5
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class formulario5Actions extends autoFormulario5Actions
{
    public function executeListIrPortal(sfWebRequest $request)
    {
        $env = '';
        if(sfConfig::get('sf_environment') == 'dev')
        {
            $env = '_dev';
        } 
        $this->redirect('/portal'.$env.'.php/inicio/index');
    }
    public function executeEdit(sfWebRequest $request)
    { 
        $this->formulario5 = $this->getRoute()->getObject();
        $user = sfContext::getInstance()->getUser();
        $user->setAttribute('medicamento2', $this->formulario5->Medicamento);
        $this->form = $this->configuration->getForm($this->formulario5);
    }
}

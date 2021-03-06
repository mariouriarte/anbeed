<?php

require_once dirname(__FILE__).'/../lib/formulario27GeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/formulario27GeneratorHelper.class.php';

/**
 * formulario27 actions.
 *
 * @package    anbeed
 * @subpackage formulario27
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class formulario27Actions extends autoFormulario27Actions
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
        $this->formulario27 = $this->getRoute()->getObject();
        $user = sfContext::getInstance()->getUser();
        $user->setAttribute('dispositivo_medico2', $this->formulario27->DispositivoMedico);
        $this->form = $this->configuration->getForm($this->formulario27);
    }
}

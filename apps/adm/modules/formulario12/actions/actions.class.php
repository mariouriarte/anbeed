<?php

require_once dirname(__FILE__).'/../lib/formulario12GeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/formulario12GeneratorHelper.class.php';

/**
 * formulario12 actions.
 *
 * @package    anbeed
 * @subpackage formulario12
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class formulario12Actions extends autoFormulario12Actions
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
        $this->formulario12 = $this->getRoute()->getObject();
        $user = sfContext::getInstance()->getUser();
        $user->setAttribute('reactivo2', $this->formulario12->Reactivo);
        $this->form = $this->configuration->getForm($this->formulario12);
    }
}

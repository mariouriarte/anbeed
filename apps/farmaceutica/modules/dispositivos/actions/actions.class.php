<?php

require_once dirname(__FILE__).'/../lib/dispositivosGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/dispositivosGeneratorHelper.class.php';

/**
 * dispositivos actions.
 *
 * @package    anbeed
 * @subpackage dispositivos
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class dispositivosActions extends autoDispositivosActions
{
     public function executeListAdmEmpresa(sfWebRequest $request)
    {
        $user = $this->getUser();
        $empresa = $user->getAttribute('empresa');
        $this->redirect('/farmaceutica_dev.php/empresas/'.$empresa->getId().'/administrarEmpresa');
    }
    
    public function executeIrForm27(sfWebRequest $request)
    {
        $user = $this->getUser();
        $this->dispositivo_medico = $this->getRoute()->getObject();
        $user->setAttribute('dispositivo_medico', $this->dispositivo_medico);
        $this->redirect('/farmaceutica_dev.php/formulario27');
    }
}

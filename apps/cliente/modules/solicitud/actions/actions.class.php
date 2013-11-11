<?php

require_once dirname(__FILE__).'/../lib/solicitudGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/solicitudGeneratorHelper.class.php';

/**
 * solicitud actions.
 *
 * @package    anbeed
 * @subpackage solicitud
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class solicitudActions extends autoSolicitudActions
{
    public function executeListIrPortal(sfWebRequest $request)
    {
        $env = '';
        if(sfConfig::get('sf_environment') == 'dev')
        {
            $env = '_dev';
        } 
        $this->redirect('/cliente'.$env.'.php');
    }
    public function executeNew(sfWebRequest $request)
    {
    $this->form = $this->configuration->getForm();
    $this->solicitud_servicio = $this->form->getObject();
    $this->form->setDefault('empresa_id', $this->getUser()->getGuardUser()->getEmpresaId());
    }
}

<?php

require_once dirname(__FILE__).'/../lib/cuentasGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/cuentasGeneratorHelper.class.php';

/**
 * cuentas actions.
 *
 * @package    anbeed
 * @subpackage cuentas
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class cuentasActions extends autoCuentasActions
{
    public function executeListIrPortal(sfWebRequest $request)
    {
        //$this->getUser()->setAttribute('empresa', NULL);
        $env = '';
        if(sfConfig::get('sf_environment') == 'dev')
        {
            $env = '_dev';
        } 
        $this->redirect('/portal'.$env.'.php/inicio/index');
    }
}

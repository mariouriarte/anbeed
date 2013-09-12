<?php

require_once dirname(__FILE__).'/../lib/tipotramitef5GeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/tipotramitef5GeneratorHelper.class.php';

/**
 * tipotramitef5 actions.
 *
 * @package    anbeed
 * @subpackage tipotramitef5
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class tipotramitef5Actions extends autoTipotramitef5Actions
{
    public function executeListIrPortal(sfWebRequest $request)
    {
        if(sfConfig::get('sf_environment') == 'dev')
        {
            $env = '_dev';
        } 
        $this->redirect('/portal'.$env.'.php/inicio/index');
    }
}

<?php

require_once dirname(__FILE__).'/../lib/tipodocGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/tipodocGeneratorHelper.class.php';

/**
 * tipodoc actions.
 *
 * @package    anbeed
 * @subpackage tipodoc
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class tipodocActions extends autoTipodocActions
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

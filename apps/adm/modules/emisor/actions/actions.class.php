<?php

require_once dirname(__FILE__).'/../lib/emisorGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/emisorGeneratorHelper.class.php';

/**
 * emisor actions.
 *
 * @package    anbeed
 * @subpackage emisor
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class emisorActions extends autoEmisorActions
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
}

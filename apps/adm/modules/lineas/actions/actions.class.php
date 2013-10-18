<?php

require_once dirname(__FILE__).'/../lib/lineasGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/lineasGeneratorHelper.class.php';

/**
 * lineas actions.
 *
 * @package    anbeed
 * @subpackage lineas
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class lineasActions extends autoLineasActions
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

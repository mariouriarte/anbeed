<?php

require_once dirname(__FILE__).'/../lib/ghigieneGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/ghigieneGeneratorHelper.class.php';

/**
 * ghigiene actions.
 *
 * @package    anbeed
 * @subpackage ghigiene
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ghigieneActions extends autoGhigieneActions
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

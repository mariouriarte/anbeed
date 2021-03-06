<?php

require_once dirname(__FILE__).'/../lib/ciudadesGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/ciudadesGeneratorHelper.class.php';

/**
 * ciudades actions.
 *
 * @package    anbeed
 * @subpackage ciudades
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ciudadesActions extends autoCiudadesActions
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

<?php

require_once dirname(__FILE__).'/../lib/contactosGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/contactosGeneratorHelper.class.php';

/**
 * contactos actions.
 *
 * @package    anbeed
 * @subpackage contactos
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class contactosActions extends autoContactosActions
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

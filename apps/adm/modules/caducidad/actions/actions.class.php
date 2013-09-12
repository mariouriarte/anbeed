<?php

require_once dirname(__FILE__).'/../lib/caducidadGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/caducidadGeneratorHelper.class.php';

/**
 * caducidad actions.
 *
 * @package    anbeed
 * @subpackage caducidad
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class caducidadActions extends autoCaducidadActions
{
    public function executeIndex(sfWebRequest $request)
    {
        parent::executeIndex($request);
        
        if($request->getParameter('time'))
        {
            if($request->getParameter('time')==1)
                $this->getUser()->setAttribute('time', "1 mes");
            if($request->getParameter('time')==2)
                $this->getUser()->setAttribute('time', "6 meses");
            if($request->getParameter('time')==3)
                $this->getUser()->setAttribute('time', "12 meses");
        }
        else
        {
            if(!$this->getUser()->getAttribute('time'))
                $this->redirect('@homepage');
        }
        
    }
    public function executeListIrPortal(sfWebRequest $request)
    {
        //$this->getUser()->setAttribute('empresa', NULL);
        $this->redirect('/portal_dev.php/inicio/index');
    }
    
}

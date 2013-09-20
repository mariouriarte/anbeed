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
        
        if($request->getParameter('time'))
        {
            
            if($request->getParameter('time')==1)
            {
                $this->getUser()->setAttribute('meses', 1);
                $this->getUser()->setAttribute('time', "1 mes");
                //echo "entra"; die;
            }
            if($request->getParameter('time')==3)
            {
                $this->getUser()->setAttribute('meses', 3);
                $this->getUser()->setAttribute('time', "3 meses");
            }
            if($request->getParameter('time')==6)
            {
                $this->getUser()->setAttribute('meses', 6);
                $this->getUser()->setAttribute('time', "6 meses");
            }
            parent::executeIndex($request);
        }
        else
        {
            if(!$this->getUser()->getAttribute('time'))
                $this->redirect('@homepage');
        }
        
        
    }
    public function executeListIrPortal(sfWebRequest $request)
    {
        $env = '';
        if(sfConfig::get('sf_environment') == 'dev')
        {
            $env = '_dev';
        } 
//        $this->getUser()->getAttributeHolder()->remove('meses');
//        $this->getUser()->getAttributeHolder()->remove('time');
        $this->redirect('/portal'.$env.'.php/inicio/index');
    }
    
}

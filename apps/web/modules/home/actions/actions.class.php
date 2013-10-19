<?php

/**
 * home actions.
 *
 * @package    anbeed
 * @subpackage home
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homeActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
        $environment = sfConfig::get('sf_environment');
        if($environment == 'dev')
        {
            $this->env = '_dev';
        } else if($environment == 'prod')
        {
            $this->env = '';
        }
  }
  public function executeQuienesSomos(sfWebRequest $request)
  {
  }
  
  public function executeServicios(sfWebRequest $request)
  {
  }
  
  public function executeProductos(sfWebRequest $request)
  {
  }
  
  public function executeInformacion(sfWebRequest $request)
  {
  }
  public function executeContactenos(sfWebRequest $request)
  {
  }  
}

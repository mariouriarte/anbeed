<?php

/**
 * portal actions.
 *
 * @package    anbeed
 * @subpackage portal
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class portalActions extends sfActions
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
}

<?php

require_once dirname(__FILE__).'/../lib/form5GeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/form5GeneratorHelper.class.php';

/**
 * form5 actions.
 *
 * @package    anbeed
 * @subpackage form5
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class form5Actions extends autoForm5Actions
{
    public function executeListIrPortal(sfWebRequest $request)
    {
        $this->redirect('inicio/index');
    }
    
    public function executeShow(sfWebRequest $request)
    {
        $this->form = $this->getRoute()->getObject();
        
    }
    
    public function executeEtapa(sfWebRequest $request)
    {
        $this->form = $this->getRoute()->getObject();
    }
    
}

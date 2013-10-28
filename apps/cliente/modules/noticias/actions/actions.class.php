<?php

require_once dirname(__FILE__).'/../lib/noticiasGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/noticiasGeneratorHelper.class.php';

/**
 * noticias actions.
 *
 * @package    anbeed
 * @subpackage noticias
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class noticiasActions extends autoNoticiasActions
{
    public function executeListIrPortal(sfWebRequest $request)
    {
        $this->redirect('inicio/index');
    }
    
    public function executeShow(sfWebRequest $request)
    {
        $this->noticia = $this->getRoute()->getObject();
        
    }
}

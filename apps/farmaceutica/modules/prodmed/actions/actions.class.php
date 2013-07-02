<?php

require_once dirname(__FILE__).'/../lib/prodmedGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/prodmedGeneratorHelper.class.php';

/**
 * prodmed actions.
 *
 * @package    anbeed
 * @subpackage prodmed
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class prodmedActions extends autoProdmedActions
{
    public function executeListIrPortal(sfWebRequest $request)
    {
        $this->redirect('/portal_dev.php/inicio/index');
    }
}

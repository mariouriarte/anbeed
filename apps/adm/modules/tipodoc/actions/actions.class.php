<?php

require_once dirname(__FILE__).'/../lib/tipodocGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/tipodocGeneratorHelper.class.php';

/**
 * tipodoc actions.
 *
 * @package    anbeed
 * @subpackage tipodoc
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class tipodocActions extends autoTipodocActions
{
    public function executeListIrPortal(sfWebRequest $request)
    {
        $this->redirect('/portal_dev.php/inicio/index');
    }
}

<?php

require_once dirname(__FILE__).'/../lib/tipotramitef27GeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/tipotramitef27GeneratorHelper.class.php';

/**
 * tipotramitef27 actions.
 *
 * @package    anbeed
 * @subpackage tipotramitef27
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class tipotramitef27Actions extends autoTipotramitef27Actions
{
    public function executeListIrPortal(sfWebRequest $request)
    {
        $this->redirect('/portal_dev.php/inicio/index');
    }
}

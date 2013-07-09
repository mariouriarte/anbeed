<?php

require_once dirname(__FILE__).'/../lib/origenf5GeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/origenf5GeneratorHelper.class.php';

/**
 * origenf5 actions.
 *
 * @package    anbeed
 * @subpackage origenf5
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class origenf5Actions extends autoOrigenf5Actions
{
    public function executeListIrPortal(sfWebRequest $request)
    {
        $this->redirect('/portal_dev.php/inicio/index');
    }
}

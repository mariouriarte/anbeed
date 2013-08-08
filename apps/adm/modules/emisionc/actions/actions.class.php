<?php

require_once dirname(__FILE__).'/../lib/emisioncGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/emisioncGeneratorHelper.class.php';

/**
 * emisionc actions.
 *
 * @package    anbeed
 * @subpackage emisionc
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class emisioncActions extends autoEmisioncActions
{
    public function executeListIrPortal(sfWebRequest $request)
    {
        $this->redirect('/portal_dev.php/inicio/index');
    }
}

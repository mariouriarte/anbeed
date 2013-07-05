<?php

require_once dirname(__FILE__).'/../lib/paisesGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/paisesGeneratorHelper.class.php';

/**
 * paises actions.
 *
 * @package    anbeed
 * @subpackage paises
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class paisesActions extends autoPaisesActions
{
    public function executeListIrPortal(sfWebRequest $request)
    {
        $this->redirect('/portal_dev.php/inicio/index');
    }
}

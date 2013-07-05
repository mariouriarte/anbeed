<?php

require_once dirname(__FILE__).'/../lib/laboratoriosGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/laboratoriosGeneratorHelper.class.php';

/**
 * laboratorios actions.
 *
 * @package    anbeed
 * @subpackage laboratorios
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class laboratoriosActions extends autoLaboratoriosActions
{
    public function executeListIrPortal(sfWebRequest $request)
    {
        $this->redirect('/portal_dev.php/inicio/index');
    }
}

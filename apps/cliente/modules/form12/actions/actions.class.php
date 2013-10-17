<?php

require_once dirname(__FILE__).'/../lib/form12GeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/form12GeneratorHelper.class.php';

/**
 * form12 actions.
 *
 * @package    anbeed
 * @subpackage form12
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class form12Actions extends autoForm12Actions
{
    public function executeListIrPortal(sfWebRequest $request)
    {
        $this->redirect('portal/index');
    }
}

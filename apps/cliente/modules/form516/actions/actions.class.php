<?php

require_once dirname(__FILE__).'/../lib/form516GeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/form516GeneratorHelper.class.php';

/**
 * form516 actions.
 *
 * @package    anbeed
 * @subpackage form516
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class form516Actions extends autoForm516Actions
{
    public function executeListIrPortal(sfWebRequest $request)
    {
        $this->redirect('portal/index');
    }
}

<?php

require_once dirname(__FILE__).'/../lib/form706GeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/form706GeneratorHelper.class.php';

/**
 * form706 actions.
 *
 * @package    anbeed
 * @subpackage form706
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class form706Actions extends autoForm706Actions
{
    public function executeListIrPortal(sfWebRequest $request)
    {
        $this->redirect('inicio/index');
    }
}

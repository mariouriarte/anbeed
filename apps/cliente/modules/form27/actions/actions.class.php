<?php

require_once dirname(__FILE__).'/../lib/form27GeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/form27GeneratorHelper.class.php';

/**
 * form27 actions.
 *
 * @package    anbeed
 * @subpackage form27
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class form27Actions extends autoForm27Actions
{
    public function executeListIrPortal(sfWebRequest $request)
    {
        $this->redirect('inicio/index');
    }
}

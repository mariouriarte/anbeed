<?php

require_once dirname(__FILE__).'/../lib/datosf27GeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/datosf27GeneratorHelper.class.php';

/**
 * datosf27 actions.
 *
 * @package    anbeed
 * @subpackage datosf27
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class datosf27Actions extends autoDatosf27Actions
{
    public function executeListIrPortal(sfWebRequest $request)
    {
        $this->redirect('/portal_dev.php/inicio/index');
    }
}

<?php

require_once dirname(__FILE__).'/../lib/usuariosGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/usuariosGeneratorHelper.class.php';

/**
 * usuarios actions.
 *
 * @package    anbeed
 * @subpackage usuarios
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class usuariosActions extends autoUsuariosActions
{
    public function executeListIrPortal(sfWebRequest $request)
    {
        $this->redirect('/portal_dev.php/inicio/index');
    }
}

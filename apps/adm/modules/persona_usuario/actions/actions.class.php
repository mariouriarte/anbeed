<?php

require_once dirname(__FILE__).'/../lib/persona_usuarioGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/persona_usuarioGeneratorHelper.class.php';

/**
 * persona_usuario actions.
 *
 * @package    anbeed
 * @subpackage persona_usuario
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class persona_usuarioActions extends autoPersona_usuarioActions
{
    public function executeListIrPortal(sfWebRequest $request)
    {
        $this->redirect('/portal'.$env.'.php/inicio/index');
    }
}

<?php

require_once dirname(__FILE__).'/../lib/cliente_usuarioGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/cliente_usuarioGeneratorHelper.class.php';

/**
 * cliente_usuario actions.
 *
 * @package    anbeed
 * @subpackage cliente_usuario
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class cliente_usuarioActions extends autoCliente_usuarioActions
{
    public function executeNew(sfWebRequest $request)
    {
        $this->form = $this->configuration->getForm();
        $this->sf_guard_user = $this->form->getObject();
        
    }
}

<?php

require_once dirname(__FILE__).'/../lib/formulario516GeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/formulario516GeneratorHelper.class.php';

/**
 * formulario516 actions.
 *
 * @package    anbeed
 * @subpackage formulario516
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class formulario516Actions extends autoFormulario516Actions
{
    public function executeListIrProductos(sfWebRequest $request)
    {
        $this->redirect('cosmetico');
    }
    public function executeListIrEmpresa(sfWebRequest $request)
    {
        $user = sfContext::getInstance()->getUser();
        $empresa = $user->getAttribute('empresa');
        $this->redirect('empresas/administrarEmpresa?id='.$empresa->getId());
    }     
    public function executeNuevo(sfWebRequest $request)
    {
        $this->redirect('form516/new');
    }
}

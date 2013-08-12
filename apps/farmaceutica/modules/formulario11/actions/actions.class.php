<?php

require_once dirname(__FILE__).'/../lib/formulario11GeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/formulario11GeneratorHelper.class.php';

/**
 * formulario11 actions.
 *
 * @package    anbeed
 * @subpackage formulario11
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class formulario11Actions extends autoFormulario11Actions
{
    public function executeListIrEmpresa(sfWebRequest $request)
    {
        $user = sfContext::getInstance()->getUser();
        
        $empresa = $user->getAttribute('empresa');
        $this->redirect('empresas/administrarEmpresa?id='.$empresa->getId());
    }
    
    public function executeNuevo(sfWebRequest $request)
    {
        $this->redirect('form11/new');
    }
    
    public function executeEditar(sfWebRequest $request)
    {
        $id = $request->getParameter('id');
        $this->redirect("form11/edit?id=$id");
    }
}

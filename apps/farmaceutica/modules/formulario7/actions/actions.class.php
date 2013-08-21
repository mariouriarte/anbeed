<?php

//require_once dirname(__FILE__).'/../lib/formulario7GeneratorConfiguration.class.php';
//require_once dirname(__FILE__).'/../lib/formulario7GeneratorHelper.class.php';

/**
 * formulario7 actions.
 *
 * @package    anbeed
 * @subpackage formulario7
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class formulario7Actions extends autoFormulario7Actions
{
    
    public function executeIndex(sfWebRequest $request)
   {
        parent::executeIndex($request);
        $empresa = $this->getRequestParameter('table');
        if(!$empresa){
            $this->pager->setQuery(Formulario7Table::selectForms7DeEmpresaProducto());
        }
        else {
            $this->pager->setQuery(Formulario7Table::selectForms7DeEmpresa());
        }
   }
    public function executeListIrProductos(sfWebRequest $request)
    {
        $user = sfContext::getInstance()->getUser();
        $producto = $user->getAttribute('tabla');
        $this->redirect($producto);
    }
    
    public function executePrint(sfWebRequest $request)
    {
        
    }
    public function executeListIrEmpresa(sfWebRequest $request)
    {
        $user = sfContext::getInstance()->getUser();
        $empresa = $user->getAttribute('empresa');
        $this->redirect('empresas/administrarEmpresa?id='.$empresa->getId());
    }
    public function executeNuevo(sfWebRequest $request)
    {
        $this->redirect('form7/new');
    }
    
    public function executeEditar(sfWebRequest $request)
    {
        $id = $request->getParameter('id');
        $this->redirect("form7/edit?id=$id");
    }
}

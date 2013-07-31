<?php

require_once dirname(__FILE__).'/../lib/form516porempresaGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/form516porempresaGeneratorHelper.class.php';

/**
 * form516porempresa actions.
 *
 * @package    anbeed
 * @subpackage form516porempresa
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class form516porempresaActions extends autoForm516porempresaActions
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
    public function executeEditar(sfWebRequest $request)
    {
        $id = $request->getParameter('id');
        $this->redirect("form516/edit?id=$id");
    }
}

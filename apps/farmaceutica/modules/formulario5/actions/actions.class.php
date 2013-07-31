<?php

require_once dirname(__FILE__).'/../lib/formulario5GeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/formulario5GeneratorHelper.class.php';

/**
 * formulario5 actions.
 *
 * @package    anbeed
 * @subpackage formulario5
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class formulario5Actions extends autoFormulario5Actions
{
   public function executeListIrProductos(sfWebRequest $request)
   {
        $this->redirect(sfContext::getInstance()->getRouting()->generate('medicamento'));
   }
   public function executeListIrEmpresa(sfWebRequest $request)
   {
        $user = sfContext::getInstance()->getUser();
        $empresa = $user->getAttribute('empresa');
        $this->redirect('empresas/administrarEmpresa?id='.$empresa->getId());
   }
//   
//  public function executeEdit(sfWebRequest $request)
//  {
//    $this->formulario5 = $this->getRoute()->getObject();
//    $this->form = $this->configuration->getForm($this->formulario5);
//  }
   public function executeNew(sfWebRequest $request)
  {
    $this->form = $this->configuration->getForm();
    $this->formulario5 = $this->form->getObject();
    $medicamento = $this->getUser()->getAttribute('medicamento');
    $this->form->setDefault('medicamento_id', $medicamento->getId());
  }
}

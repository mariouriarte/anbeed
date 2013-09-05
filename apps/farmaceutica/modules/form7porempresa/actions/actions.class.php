<?php

/**
 * form7porempresa actions.
 *
 * @package    anbeed
 * @subpackage form7porempresa
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class form7porempresaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->formulario7s = Doctrine_Core::getTable('Formulario7')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new Formulario7Form();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new Formulario7Form();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($formulario7 = Doctrine_Core::getTable('Formulario7')->find(array($request->getParameter('id'))), sprintf('Object formulario7 does not exist (%s).', $request->getParameter('id')));
    $this->form = new Formulario7Form($formulario7);
    if($formulario7->Producto->getCodigoProductoId()==1);
        $producto = Doctrine_Core::getTable('Medicamento')->find($formulario7->Producto->Medicamento->getId());
    if($formulario7->Producto->getCodigoProductoId()==2);
        $producto = Doctrine_Core::getTable('DispositivoMedico')->find($formulario7->Producto->DispositivoMedico->getId());
    if($formulario7->Producto->getCodigoProductoId()==3);
        $producto = Doctrine_Core::getTable('Cosmetico')->find($formulario7->Producto->Cosmetico->getId());
    if($formulario7->Producto->getCodigoProductoId()==4);
        $producto = Doctrine_Core::getTable('Higiene')->find($formulario7->Producto->Higiene->getId());
    if($formulario7->Producto->getCodigoProductoId()==5);
        $producto = Doctrine_Core::getTable('Reactivo')->find($formulario7->Producto->Reactivo->getId());
    
    $user = sfContext::getInstance()->getUser();
    $user->setAttribute('productof7', $producto);  
    
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($formulario7 = Doctrine_Core::getTable('Formulario7')->find(array($request->getParameter('id'))), sprintf('Object formulario7 does not exist (%s).', $request->getParameter('id')));
    $this->form = new Formulario7Form($formulario7);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($formulario7 = Doctrine_Core::getTable('Formulario7')->find(array($request->getParameter('id'))), sprintf('Object formulario7 does not exist (%s).', $request->getParameter('id')));
    $formulario7->delete();

    $this->redirect('form7porempresa/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
        $notice = $form->getObject()->isNew() ? 'El elemento fue creado correctamente.' : 'El elemento fue actualizado correctamente.';
        $formulario7 = $form->save();
        $formulario = new Formulario();
        $formulario -> save();
        $formulario7 -> setFormulario($formulario);
        $formulario7 -> save();

        $this->getUser()->setFlash('notice', $notice);
        $this->redirect('form7porempresa/edit?id='.$formulario7->getId());
    }
    else
    {
        $this->getUser()->setFlash('error', 'El elemento no ha sido guardado debido a que contiene algunos errores.');
    }
  }
}

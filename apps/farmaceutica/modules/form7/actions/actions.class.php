<?php

/**
 * form7 actions.
 *
 * @package    anbeed
 * @subpackage form7
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class form7Actions extends sfActions
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

    $this->redirect('form7/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $formulario7 = $form->save();
      $formulario = new Formulario();
      $formulario -> save();
      $formulario7 -> setFormulario($formulario);
      $formulario7 -> save();

      $this->redirect('form7/edit?id='.$formulario7->getId());
    }
  }
}

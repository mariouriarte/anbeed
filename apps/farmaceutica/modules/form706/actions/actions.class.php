<?php

/**
 * form706 actions.
 *
 * @package    anbeed
 * @subpackage form706
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class form706Actions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->formulario706s = Doctrine_Core::getTable('Formulario706')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new Formulario706Form();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new Formulario706Form();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($formulario706 = Doctrine_Core::getTable('Formulario706')->find(array($request->getParameter('id'))), sprintf('Object formulario706 does not exist (%s).', $request->getParameter('id')));
    $this->form = new Formulario706Form($formulario706);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($formulario706 = Doctrine_Core::getTable('Formulario706')->find(array($request->getParameter('id'))), sprintf('Object formulario706 does not exist (%s).', $request->getParameter('id')));
    $this->form = new Formulario706Form($formulario706);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($formulario706 = Doctrine_Core::getTable('Formulario706')->find(array($request->getParameter('id'))), sprintf('Object formulario706 does not exist (%s).', $request->getParameter('id')));
    $formulario706->delete();

    $this->redirect('form706/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $formulario706 = $form->save();

      $this->redirect('form706/edit?id='.$formulario706->getId());
    }
  }
}
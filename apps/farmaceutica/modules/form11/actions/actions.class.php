<?php

/**
 * form11 actions.
 *
 * @package    anbeed
 * @subpackage form11
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */

class form11Actions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->formulario11s = Doctrine_Core::getTable('Formulario11')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new Formulario11Form();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new Formulario11Form();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($formulario11 = Doctrine_Core::getTable('Formulario11')->find(array($request->getParameter('id'))), sprintf('Object formulario11 does not exist (%s).', $request->getParameter('id')));
    $this->form = new Formulario11Form($formulario11);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($formulario11 = Doctrine_Core::getTable('Formulario11')->find(array($request->getParameter('id'))), sprintf('Object formulario11 does not exist (%s).', $request->getParameter('id')));
    $this->form = new Formulario11Form($formulario11);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($formulario11 = Doctrine_Core::getTable('Formulario11')->find(array($request->getParameter('id'))), sprintf('Object formulario11 does not exist (%s).', $request->getParameter('id')));
    $formulario11->delete();

    $this->redirect('form11/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $formulario11 = $form->save();
      $formulario = new Formulario();
      $formulario-> save();
      
      $formulario11-> setFormulario($formulario);
      $formulario11-> save();

      $this->redirect('form11/edit?id='.$formulario11->getId());
    }
  }
}

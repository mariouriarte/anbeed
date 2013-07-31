<?php

/**
 * form516 actions.
 *
 * @package    anbeed
 * @subpackage form516
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class form516Actions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->formulario516s = Doctrine_Core::getTable('Formulario516')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new Formulario516Form();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new Formulario516Form();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($formulario516 = Doctrine_Core::getTable('Formulario516')->find(array($request->getParameter('id'))), sprintf('Object formulario516 does not exist (%s).', $request->getParameter('id')));
    $this->form = new Formulario516Form($formulario516);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($formulario516 = Doctrine_Core::getTable('Formulario516')->find(array($request->getParameter('id'))), sprintf('Object formulario516 does not exist (%s).', $request->getParameter('id')));
    $this->form = new Formulario516Form($formulario516);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($formulario516 = Doctrine_Core::getTable('Formulario516')->find(array($request->getParameter('id'))), sprintf('Object formulario516 does not exist (%s).', $request->getParameter('id')));
    $formulario516->delete();

    $this->redirect('form516/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
        $notice = $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.';  
        try
        {
            $formulario516 = $form->save();
        }
        catch (Doctrine_Validator_Exception $e) 
        {
                $this->getUser()->setFlash('notice', $notice);
                $this->redirect('form516/edit?id='.$formulario516->getId());
        }
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
  }
}

<?php

/**
 * coments actions.
 *
 * @package    anbeed
 * @subpackage coments
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class comentsActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->comentario_tareas = Doctrine_Core::getTable('ComentarioTarea')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ComentarioTareaForm();
    
    $user = $this->getUser();
    $tarea = $user->getAttribute('tarea');
//    echo $tarea->getId();
//    die;
    /*estado por default*/
    $this->form->setDefault('tarea_id', $tarea->getId());
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ComentarioTareaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($comentario_tarea = Doctrine_Core::getTable('ComentarioTarea')->find(array($request->getParameter('id'))), sprintf('Object comentario_tarea does not exist (%s).', $request->getParameter('id')));
    $this->form = new ComentarioTareaForm($comentario_tarea);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($comentario_tarea = Doctrine_Core::getTable('ComentarioTarea')->find(array($request->getParameter('id'))), sprintf('Object comentario_tarea does not exist (%s).', $request->getParameter('id')));
    $this->form = new ComentarioTareaForm($comentario_tarea);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($comentario_tarea = Doctrine_Core::getTable('ComentarioTarea')->find(array($request->getParameter('id'))), sprintf('Object comentario_tarea does not exist (%s).', $request->getParameter('id')));
    $comentario_tarea->delete();

    $this->redirect('coments/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
        $notice = $form->getObject()->isNew() ? 'El elemento fue creado correctamente.' : 'El elemento fue actualizado correctamente.';
        $comentario_tarea = $form->save();

        $this->redirect('coments/edit?id='.$comentario_tarea->getId());
    }
    else
    {
        $this->getUser()->setFlash('error', 'El elemento no ha sido guardado debido a que contiene algunos errores.');
    }
  }
}

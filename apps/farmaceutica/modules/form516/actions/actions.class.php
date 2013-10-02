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
        
    $cosmetico = $this->getUser()->getAttribute('cosmetico');
    $this->form->setDefault('cosmetico_id', $cosmetico->getId());
    
    /*Recuperamos el registro sanitario is tiene el producto*/
    $this->form->setDefault('registro_sanitario', $cosmetico->getRegistroSanitario());
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
    
    /*Recuperamos el registro sanitario is tiene el producto*/
    $this->form->setDefault('registro_sanitario', $formulario516->Cosmetico->getRegistroSanitario());
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
        $notice = $form->getObject()->isNew() ? 'El elemento fue creado correctamente.' : 'El elemento fue actualizado correctamente.';
        $is_new = $form->getObject()->isNew();

        $registro =  $form['registro_sanitario']->getValue();  
        $formulario516 = $form->save();
        
        /*guardamos en medicamento el registro sanitario*/
        $formulario516->Cosmetico->setRegistroSanitario($registro);
        $formulario516->Cosmetico->save();
        if($is_new)
        {
            $formulario = new Formulario();
            $formulario -> save();
            $formulario516 -> setFormulario($formulario);
            $formulario516 -> save();
        }
        $this->getUser()->setFlash('notice', $notice);
        $this->redirect('form516/edit?id='.$formulario516->getId());
        
    }
    else
    {
        $this->getUser()->setFlash('error', 'El elemento no ha sido guardado debido a que contiene algunos errores.');
    }
  }
}

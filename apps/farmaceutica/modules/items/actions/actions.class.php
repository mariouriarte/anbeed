<?php

require_once dirname(__FILE__).'/../lib/itemsGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/itemsGeneratorHelper.class.php';

/**
 * items actions.
 *
 * @package    anbeed
 * @subpackage items
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class itemsActions extends autoItemsActions
{
    public function executeListIrForm11(sfWebRequest $request)
    {
        $this->redirect('formulario11');
    }
    
    public function executeListIrEmpresa(sfWebRequest $request)
    {
        $user = sfContext::getInstance()->getUser();
        $empresa = $user->getAttribute('empresa');
        $this->redirect('empresas/administrarEmpresa?id='.$empresa->getId());
    }
    public function executeNew(sfWebRequest $request)
    {
        $this->form = $this->configuration->getForm();
        $this->item = $this->form->getObject();
        
        $form11 = $this->getUser()->getAttribute('form11');
        $this->form->setDefault('formulario11_id', $form11->getId());
        $user = $this->getUser();
        $user->getAttributeHolder()->remove('item_producto');     
    }
    public function executeEdit(sfWebRequest $request)
    {
        $this->item = $this->getRoute()->getObject();
        $this->form = $this->configuration->getForm($this->item);
        
        
        $user = $this->getUser();
        $this->item = $this->getRoute()->getObject();
        
        $user->setAttribute('item_producto', $this->item);
        
    }
    
    public function executeDelete(sfWebRequest $request)
    {
      $request->checkCSRFProtection();

      $this->dispatcher->notify(new sfEvent($this, 'admin.delete_object', array('object' => $this->getRoute()->getObject())));

      if ($this->getRoute()->getObject()->delete())
      {
        /*Actualizamos los items y las fojas al formulario11*/
        $items = ItemTable::ContarItems();
        $fojas = ItemTable::getFojas($items);
        
        $form11 = $this->getUser()->getAttribute('form11');
        $form11->setNumeroItem($items);
        $form11->setFoja($fojas);
        $form11->save();
        $this->getUser()->setFlash('notice', 'The item was deleted successfully.');
      }

      $this->redirect('@item');
    }
    

  
  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $notice = $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.';

      try {
        $item = $form->save();
        /*Actualizamos los items y las fojas al formulario11*/
        $items = ItemTable::ContarItems();
        $fojas = ItemTable::getFojas($items);
        
        $form11 = $this->getUser()->getAttribute('form11');
        $form11->setNumeroItem($items);
        $form11->setFoja($fojas);
        $form11->save();
        } catch (Doctrine_Validator_Exception $e) {

        $errorStack = $form->getObject()->getErrorStack();

        $message = get_class($form->getObject()) . ' has ' . count($errorStack) . " field" . (count($errorStack) > 1 ?  's' : null) . " with validation errors: ";
        foreach ($errorStack as $field => $errors) {
            $message .= "$field (" . implode(", ", $errors) . "), ";
        }
        $message = trim($message, ', ');

        $this->getUser()->setFlash('error', $message);
        return sfView::SUCCESS;
      }

      $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $item)));

      if ($request->hasParameter('_save_and_add'))
      {
        $this->getUser()->setFlash('notice', $notice.' You can add another one below.');

        $this->redirect('@item_new');
      }
      else
      {
        $this->getUser()->setFlash('notice', $notice);

        $this->redirect(array('sf_route' => 'item_edit', 'sf_subject' => $item));
      }
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
  }
    
}

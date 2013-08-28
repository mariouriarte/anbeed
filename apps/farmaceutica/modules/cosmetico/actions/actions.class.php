<?php

require_once dirname(__FILE__).'/../lib/cosmeticoGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/cosmeticoGeneratorHelper.class.php';

/**
 * cosmetico actions.
 *
 * @package    anbeed
 * @subpackage cosmetico
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class cosmeticoActions extends autoCosmeticoActions
{
    public function executeListAdmEmpresa(sfWebRequest $request)
    {
        $user = $this->getUser();
        $empresa = $user->getAttribute('empresa');
        $this->redirect('empresas/administrarEmpresa?id=' . $empresa->getId());
    }
    public function executeIrForm516(sfWebRequest $request)
    {
        $user = $this->getUser();
        $this->cosmetico = $this->getRoute()->getObject();
        $user->setAttribute('cosmetico', $this->cosmetico);
        $this->redirect('/farmaceutica_dev.php/formulario516');
    }
    
    public function executeIrForm7(sfWebRequest $request)
    {
        $user = $this->getUser();
        $cosmetico = $this->getRoute()->getObject();
        $user->setAttribute('cosmetico', $cosmetico);
        $user->setAttribute('tabla', 'cosmetico');
        $this->redirect('formulario7/index');
    }
    
    protected function processForm(sfWebRequest $request, sfForm $form)
    {
      $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
      if ($form->isValid())
      {
        $notice = $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.';

        try {
          $cosmetico = $form->save();
          $producto = new Producto();
          // agregamos el codigo del producto codigo:NSOC
          $producto->setCodigoProductoId(3); 
          $producto -> save();
          
          $cosmetico -> setProducto($producto);
          $cosmetico -> save();
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

        $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $cosmetico)));

        if ($request->hasParameter('_save_and_add'))
        {
          $this->getUser()->setFlash('notice', $notice.' You can add another one below.');

          $this->redirect('@cosmetico_new');
        }
        else
        {
          $this->getUser()->setFlash('notice', $notice);

          $this->redirect(array('sf_route' => 'cosmetico_edit', 'sf_subject' => $cosmetico));
        }
      }
      else
      {
        $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
      }
    }
}

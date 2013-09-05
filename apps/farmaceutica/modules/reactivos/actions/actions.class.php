<?php

require_once dirname(__FILE__).'/../lib/reactivosGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/reactivosGeneratorHelper.class.php';

/**
 * reactivos actions.
 *
 * @package    anbeed
 * @subpackage reactivos
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class reactivosActions extends autoReactivosActions
{
    public function executeListAdmEmpresa(sfWebRequest $request)
    {
        $user = $this->getUser();
        $empresa = $user->getAttribute('empresa');
        $this->redirect('empresas/administrarEmpresa?id=' . $empresa->getId());
    }
    
    public function executeIrForm12(sfWebRequest $request)
    {
        $user = $this->getUser();
        $this->reactivo = $this->getRoute()->getObject();
        $user->setAttribute('reactivo', $this->reactivo);
        $this->redirect('/farmaceutica_dev.php/formulario12');
    }
    
    public function executeIrForm7(sfWebRequest $request)
    {
        $user = $this->getUser();
        $reactivo = $this->getRoute()->getObject();
        $user->setAttribute('reactivo', $reactivo);
        $user->setAttribute('tabla', 'reactivo');
        $this->redirect('formulario7/index');
    }
    protected function processForm(sfWebRequest $request, sfForm $form)
    {
      $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
      if ($form->isValid())
      {
        $notice = $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.';

        try {
          $reactivo = $form->save();
          
          $producto = new Producto();
          // agregamos el codigo del producto codigo:RI
          $producto->setCodigoProductoId(5); 
          $producto -> save();
          $reactivo -> setProducto($producto);
          $reactivo -> save();
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

        $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $reactivo)));

        if ($request->hasParameter('_save_and_add'))
        {
          $this->getUser()->setFlash('notice', $notice.' You can add another one below.');

          $this->redirect('@reactivo_new');
        }
        else
        {
          $this->getUser()->setFlash('notice', $notice);

          $this->redirect(array('sf_route' => 'reactivo_edit', 'sf_subject' => $reactivo));
        }
      }
      else
      {
        $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
      }
    }
}

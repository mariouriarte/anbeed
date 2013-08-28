<?php

require_once dirname(__FILE__).'/../lib/medicamentosGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/medicamentosGeneratorHelper.class.php';

/**
 * medicamentos actions.
 *
 * @package    anbeed
 * @subpackage medicamentos
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class medicamentosActions extends autoMedicamentosActions
{
     public function executeListAdmEmpresa(sfWebRequest $request)
    {
        $user = $this->getUser();
        $empresa = $user->getAttribute('empresa');
        $this->redirect('/farmaceutica_dev.php/empresas/'.$empresa->getId().'/administrarEmpresa');
    }
    public function executeIrFormula(sfWebRequest $request)
    {
        $user = $this->getUser();
        
        $this->medicamento = $this->getRoute()->getObject();
        //Verificamos si ya tiene formulacc para mandarlo a NEW o a EDIT        
        $formula_cc_id = $this->medicamento->getFormulaCcId();
        //var_dump($formula_cc_id);
        //die();
        $user->setAttribute('medicamento', $this->medicamento);
        if(($formula_cc_id == NULL))
           $this->redirect('/farmaceutica_dev.php/formulas/new');
        else
           $this->redirect('/farmaceutica_dev.php/formulas/'.$formula_cc_id.'/edit');
    }
    public function executeIrForm5(sfWebRequest $request)
    {
        $user = $this->getUser();
        $this->medicamento = $this->getRoute()->getObject();
        $user->setAttribute('medicamento', $this->medicamento);
        $this->redirect('/farmaceutica_dev.php/formulario5');
    }
    
    public function executeIrForm7(sfWebRequest $request)
    {
        $user = $this->getUser();
        $medicamento = $this->getRoute()->getObject();
        $user->setAttribute('medicamento', $medicamento);
        $user->setAttribute('tabla', 'medicamento');
        $this->redirect('formulario7/index');
    }
    
    protected function processForm(sfWebRequest $request, sfForm $form)
    {
      $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
      if ($form->isValid())
      {
        $notice = $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.';

        try {
          $medicamento = $form->save();
          
          $producto = new Producto();
          // agregamos el codigo del producto codigo:II
          $producto->setCodigoProductoId(1); 
          $producto -> save();
          
          $medicamento -> setProducto($producto);
          $medicamento -> save();
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

        $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $medicamento)));

        if ($request->hasParameter('_save_and_add'))
        {
          $this->getUser()->setFlash('notice', $notice.' You can add another one below.');

          $this->redirect('@medicamento_new');
        }
        else
        {
          $this->getUser()->setFlash('notice', $notice);

          $this->redirect(array('sf_route' => 'medicamento_edit', 'sf_subject' => $medicamento));
        }
      }
      else
      {
        $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
      }
    }
}

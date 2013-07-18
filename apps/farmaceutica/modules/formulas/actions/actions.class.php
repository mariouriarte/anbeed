<?php

require_once dirname(__FILE__).'/../lib/formulasGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/formulasGeneratorHelper.class.php';

/**
 * formulas actions.
 *
 * @package    anbeed
 * @subpackage formulas
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class formulasActions extends autoFormulasActions
{
   public function executeListIrProductos(sfWebRequest $request)
   {
        $this->redirect(sfContext::getInstance()->getRouting()->generate('medicamento'));
   }
   
   protected function processForm(sfWebRequest $request, sfForm $form)
   {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $notice = $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.';

      try {
        $formula_cc = $form->save();

        // Editado para asignar a esta formulacc al medicamento
        $user = $this->getUser();
        $medicamento = $user->getAttribute('medicamento');
        $medicamento->setFormulaCc($formula_cc);
        //$medicamento->setFormulaCc($formula_cc);
        $medicamento->save();
        // ------------
        
          
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

      $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $formula_cc)));

      if ($request->hasParameter('_save_and_add'))
      {
        $this->getUser()->setFlash('notice', $notice.' You can add another one below.');

        $this->redirect('@formula_cc_new');
      }
      else
      {

        $this->getUser()->setFlash('notice', $notice);

        $this->redirect(array('sf_route' => 'formula_cc_edit', 'sf_subject' => $formula_cc));
      }
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
  }

}

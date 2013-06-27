<?php

require_once dirname(__FILE__).'/../lib/personalegalGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/personalegalGeneratorHelper.class.php';

/**
 * personalegal actions.
 *
 * @package    anbeed
 * @subpackage personalegal
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class personalegalActions extends autoPersonalegalActions
{
    public function executeNew(sfWebRequest $request)
    {
        parent::executeNew($request);
        
        $user = $this->getUser();
        
        if($request->hasParameter('idprf'))
        {
            $user->setAttribute('id_regentefar', $request->getParameter('idprf')) ;
        }
    }
    
    public function executeEdit(sfWebRequest $request)
    {
        parent::executeEdit($request);
        
        $user = $this->getUser();
        
        if($request->hasParameter('idprf'))
        {
            $user->setAttribute('id_regentefar', $request->getParameter('idprf')) ;
        }
    }

//  public function processForm(sfWebRequest $request, sfForm $form)
//   {
//    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
//    if ($form->isValid())
//    {
//      $notice = $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.';
//
//      try {
//        $persona = $form->save();
//      } catch (Doctrine_Validator_Exception $e) {
//
//        $errorStack = $form->getObject()->getErrorStack();
//
//        $message = get_class($form->getObject()) . ' has ' . count($errorStack) . " field" . (count($errorStack) > 1 ?  's' : null) . " with validation errors: ";
//        foreach ($errorStack as $field => $errors) {
//            $message .= "$field (" . implode(", ", $errors) . "), ";
//        }
//        $message = trim($message, ', ');
//
//        $this->getUser()->setFlash('error', $message);
//        return sfView::SUCCESS;
//      }
//
//      $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $persona)));
//
//      if ($request->hasParameter('_save_and_add'))
//      {
//        $this->getUser()->setFlash('notice', $notice.' You can add another one below.');
//
//        $this->redirect('@persona_personalegal_new');
//      }
//      else
//      {
//        $this->getUser()->setFlash('notice', $notice);
//
//        $this->redirect('/farmaceutica_dev.php/empresas/new?legal_id='.$persona->getId());
//      }
//    }
//    else
//    {
//      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
//    }
//  }
}

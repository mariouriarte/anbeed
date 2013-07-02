<?php

require_once dirname(__FILE__).'/../lib/personalegalGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/personalegalGeneratorHelper.class.php';

/**
 * personalegal actions.
 *
 * @package    anbeed
 * @subpackage personalegal
 * @author     Mario Uriarte
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class personalegalActions extends autoPersonalegalActions
{
    public function executeNew(sfWebRequest $request)
    {
        parent::executeNew($request);
        
//        $user = $this->getUser();
//        
//        if($request->hasParameter('idprf'))
//        {
//            $user->setAttribute('id_regentefar', $request->getParameter('idprf')) ;
//        }
    }
    
    public function executeEdit(sfWebRequest $request)
    {
        parent::executeEdit($request);
        
//        $user = $this->getUser();
//        
//        if($request->hasParameter('idprf'))
//        {
//            $user->setAttribute('id_regentefar', $request->getParameter('idprf')) ;
//        }
    }
    
    public function executeListQuitarPersonalegal(sfWebRequest $request)
    {
        $user = $this->getUser();
        $empresa = $user->getAttribute('empresa');
        
        $empresa->setRepresentanteLegal(null);
        $empresa->save();
        
        $this->redirect('empresas/administrarEmpresa?id=' . $empresa->getId());
    }
    
    public function executeAsignarPersonalegal(sfWebRequest $request)
    {
        $persona = $this->getRoute()->getObject();
        
        $user = $this->getUser();
        $empresa = $user->getAttribute('empresa');
        
        $empresa->setRepresentanteLegal($persona->RepresentanteLegal);
        $empresa->save();
        
        $this->redirect('empresas/administrarEmpresa?id=' . $empresa->getId());
    }
    
    // para rediccionar a empresa desde el list de personalegal
    public function executeListIrEmpresa(sfWebRequest $request)
    {
        $user = $this->getUser();
        $empresa = $user->getAttribute('empresa');
        $this->redirect('empresas/administrarEmpresa?id=' . $empresa->getId());
    }
    
    public function executeBuscar(sfWebRequest $request)
    {
        $this->getResponse()->setContentType('application/json');
        $buscar = $request->getParameter('q');
// Obtenemos los representante legal registrados en el sistema, coincidiendo las busqueda con el nombre apellido paterno o materno
       $query = Doctrine::getTable('RepresentanteLegal')
                              ->createQuery('a')
                              ->innerJoin('a.Persona p')
                              ->orWhere('p.nombre LIKE ?', "%$buscar%")
                              ->orWhere('p.ap_paterno LIKE ?', "%$buscar%")
                              ->orWhere('p.ap_materno LIKE ?', "%$buscar%")
                              ->execute();
        $representantes = array();
        foreach ($query as $representante) {
            $nombre_completo = strtoupper($representante->getPersona()->getNombre()." ".$representante->getPersona()->getApPaterno()." ".$representante->getPersona()->getApMaterno());
            $representantes[$representante->getId()] = (string)($nombre_completo);
        }
        return $this->renderText(json_encode($representantes));
    }
    
    protected function processForm(sfWebRequest $request, sfForm $form)
    {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $notice = $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.';

      try {
        $persona = $form->save();
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

      $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $persona)));

      if ($request->hasParameter('_save_and_add'))
      {
        $this->getUser()->setFlash('notice', $notice.' You can add another one below.');

        $this->redirect('@persona_personalegal_new');
      }
      else
      {
        // ------------
        // Editado para asignar a esta persona a la empresa
        // en el actual espacio
          
        $user = $this->getUser();
        $empresa = $user->getAttribute('empresa');
        
        $empresa->setRepresentanteLegal($persona->RepresentanteLegal);
        $empresa->save();
        // ------------
        
        $this->getUser()->setFlash('notice', $notice);

        $this->redirect(array('sf_route' => 'persona_personalegal_edit', 'sf_subject' => $persona));
      }
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
    }
    
}

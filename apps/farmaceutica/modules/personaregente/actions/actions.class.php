<?php

require_once dirname(__FILE__).'/../lib/personaregenteGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/personaregenteGeneratorHelper.class.php';

/**
 * personaregente actions.
 *
 * @package    anbeed
 * @subpackage personaregente
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class personaregenteActions extends autoPersonaregenteActions
{
    public function executeNew(sfWebRequest $request)
    {
        parent::executeNew($request);
       
        $user = $this->getUser();
        
        if($request->hasParameter('idprl'))
        {
            $user->setAttribute('id_reprelegal', $request->getParameter('idprl')) ;
        }
    }
    
    public function executeEdit(sfWebRequest $request)
    {
        parent::executeEdit($request);
       
        $user = $this->getUser();
        
        if($request->hasParameter('idprl'))
        {
            $user->setAttribute('id_reprelegal', $request->getParameter('idprl')) ;
        }
    }
    
    public function executeListQuitarPersonaregente(sfWebRequest $request)
    {
        $user = $this->getUser();
        $empresa = $user->getAttribute('empresa');
        
        $empresa->setRegenteFarmaceutico(null);
        $empresa->save();
        
        $persona = $this->getRoute()->getObject();
        $persona->RegenteFarmaceutico->setIsActive(false);
        $persona->save();
        
        $this->getUser()->setFlash('notice', 'El regente farmaceútico fue suspendido de la empresa correctamente.');
        $this->redirect('empresas/administrarEmpresa?id=' . $empresa->getId());
    }
    
    public function executeAsignarPersonaregente(sfWebRequest $request)
    {
        $persona = $this->getRoute()->getObject();
        $persona->RegenteFarmaceutico->setIsActive(true);
        $persona->save();
        
        $user = $this->getUser();
        $empresa = $user->getAttribute('empresa');
        
        $empresa->setRegenteFarmaceutico($persona->RegenteFarmaceutico);
        $empresa->save();
        
        $this->getUser()->setFlash('notice', 'El regente farmaceútico fue asignado correctamente.');
        $this->redirect('empresas/administrarEmpresa?id=' . $empresa->getId());
    }
    
    // para rediccionar a empresa desde el list de personaregente
    public function executeListIrEmpresa(sfWebRequest $request)
    {
        $user = $this->getUser();
        $empresa = $user->getAttribute('empresa');
        $this->redirect('empresas/administrarEmpresa?id=' . $empresa->getId());
    }
    
    public function executeBuscar($request)
    {
        $this->getResponse()->setContentType('application/json');
        $buscar = $request->getParameter('q');
// Obtenemos los regente farmaceutico registrados en el sistema, coincidiendo las busqueda con el nombre apellido paterno o materno
         $query = Doctrine::getTable('RegenteFarmaceutico')
                              ->createQuery('a')
                              ->innerJoin('a.Persona p')
                              ->orWhere('p.nombre LIKE ?', "%$buscar%")
                              ->orWhere('p.ap_paterno LIKE ?', "%$buscar%")
                              ->orWhere('p.ap_materno LIKE ?', "%$buscar%")
                              ->execute();
        $regentes = array();
        //var_dump($query);
        foreach ($query as $regente) {
            $nombre_completo = strtoupper($regente->getPersona()->getNombre()." ".$regente->getPersona()->getApPaterno()." ".$regente->getPersona()->getApMaterno());
            $regentes[$regente->getId()] = (string)($nombre_completo);
        }
        //var_dump($personas);
        return $this->renderText(json_encode($regentes));
        
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

        $this->redirect('@persona_personaregente_new');
      }
      else
      {
        // ------------
        // Editado para asignar a esta persona a la empresa
        // en el actual espacio
          
        $user = $this->getUser();
        $empresa = $user->getAttribute('empresa');
        
        $empresa->setRegenteFarmaceutico($persona->RegenteFarmaceutico);
        $empresa->save();
        // ------------
          
        $this->getUser()->setFlash('notice', $notice);

        $this->redirect(array('sf_route' => 'persona_personaregente_edit', 'sf_subject' => $persona));
      }
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
    }
    
}

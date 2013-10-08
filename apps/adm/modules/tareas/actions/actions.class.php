<?php

require_once dirname(__FILE__).'/../lib/tareasGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/tareasGeneratorHelper.class.php';

/**
 * tareas actions.
 *
 * @package    anbeed
 * @subpackage tareas
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class tareasActions extends autoTareasActions
{
    public function executeNew(sfWebRequest $request)
    {
        $this->form = $this->configuration->getForm();
        $this->tarea = $this->form->getObject();
        /*estado por default*/
        $this->form->setDefault('estado_id', 1);
    } 
    
    public function executeComentarios(sfWebRequest $request)
    {
        $user = $this->getUser();
        
        $this->tarea = $this->getRoute()->getObject();
        
        $user->setAttribute('tarea', $this->tarea);
        /*de donde*/
        $user->setAttribute('lugar_tarea', 'tareas');
        
        if(sfConfig::get('sf_environment') == 'dev')
        {
            $env = '_dev';
        } 
        $this->redirect('/adm'.$env.'.php/coments/new');
    }
    
    public function executeListIrPortal(sfWebRequest $request)
    {
        $env = '';
        if(sfConfig::get('sf_environment') == 'dev')
        {
            $env = '_dev';
        } 
        $this->redirect('/portal'.$env.'.php/inicio/index');
    }
    public function executeIndex(sfWebRequest $request)
    {
        if($request->getParameter('estado'))
        {
                        
            if($request->getParameter('estado')==1)
            {
                $this->getUser()->setAttribute('estado', 1);
                $this->getUser()->setAttribute('tarea', "Asignadas");
            }
            if($request->getParameter('estado')==2)
            {
                $this->getUser()->setAttribute('estado', 2);
                $this->getUser()->setAttribute('tarea', "en Proceso");
            }
            if($request->getParameter('estado')==3)
            {
                $this->getUser()->setAttribute('estado', 3);
                $this->getUser()->setAttribute('tarea', "Observadas");
            }
            if($request->getParameter('estado')==4)
            {
                $this->getUser()->setAttribute('estado', 4);
                $this->getUser()->setAttribute('tarea', "Concluidas");
            }
            
            
        }
        else
        {
            if(!$this->getUser()->getAttribute('estado_tarea'))
                $this->redirect('@homepage');
        }
        parent::executeIndex($request);
    }
    
}

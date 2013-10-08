<?php

require_once dirname(__FILE__).'/../lib/tareas_usuarioGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/tareas_usuarioGeneratorHelper.class.php';

/**
 * tareas_usuario actions.
 *
 * @package    anbeed
 * @subpackage tareas_usuario
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class tareas_usuarioActions extends autoTareas_usuarioActions
{
    public function executeComentarios(sfWebRequest $request)
    {
        $user = $this->getUser();
        
        $this->tarea = $this->getRoute()->getObject();
        
        $user->setAttribute('tarea', $this->tarea);
        /*de donde*/
        $user->setAttribute('lugar_tarea', 'tareas_usuario');
        
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
                $this->getUser()->setAttribute('tarea_usuarios', "Asignadas");
            }
            if($request->getParameter('estado')==2)
            {
                $this->getUser()->setAttribute('estado', 2);
                $this->getUser()->setAttribute('tarea_usuarios', "en Proceso");
            }
            if($request->getParameter('estado')==3)
            {
                $this->getUser()->setAttribute('estado', 3);
                $this->getUser()->setAttribute('tarea_usuarios', "Observadas");
            }
            if($request->getParameter('estado')==4)
            {
                $this->getUser()->setAttribute('estado', 4);
                $this->getUser()->setAttribute('tarea_usuarios', "Concluidas");
            }
            
            
        }
        else
        {
            if(!$this->getUser()->getAttribute('estado_tarea_usuarios'))
                $this->redirect('@homepage');
        }
        parent::executeIndex($request);
    }
}

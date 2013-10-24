<?php

require_once dirname(__FILE__).'/../lib/etapaform12GeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/etapaform12GeneratorHelper.class.php';

/**
 * etapaform12 actions.
 *
 * @package    anbeed
 * @subpackage etapaform12
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class etapaform12Actions extends autoEtapaform12Actions
{
    public function executeListFormulario(sfWebRequest $request)
    {
        //$form = $this->getRoute()->getObject();
        $this->redirect('formulario12/index');
    }
    
    public function executeListNuevo(sfWebRequest $request)
    {
        $this->redirect('etapaform12/new');
    }
    
    public function executeNew(sfWebRequest $request)
    {
        $this->form = $this->configuration->getForm();
        $this->etapa = $this->form->getObject();
        
        // ---
        $id_form = $request->getParameter('idform');
        $this->form->setDefault('formulario_id', $id_form);
        // ---
        
        $user = $this->getUser();
        $user->setAttribute('id_form_etapa', $id_form);
        
        $this->pager = new sfDoctrinePager(
            'Etapa',
             sfConfig::get('app_max_etapas_en_productos')
        );
        
        $this->pager->setQuery(Doctrine_Core::getTable('Etapa')
            ->selectEtapaSeguimiento($id_form));
        
        $this->pager->setPage($request->getParameter('page', 1));
        $this->pager->init();
        
    }
    
    public function executeCreate(sfWebRequest $request)
    {
        $user = $this->getUser();
        if(!$user->hasAttribute('id_form_etapa'))
        {
            $this->redirect('@homepage');
        }
        
        $id_form = $user->getAttribute('id_form_etapa');
        
        $this->form = $this->configuration->getForm();
        $this->etapa = $this->form->getObject();
        
        $this->pager = new sfDoctrinePager(
            'Etapa',
             sfConfig::get('app_max_etapas_en_productos')
        );
        $this->pager->setQuery(Doctrine_Core::getTable('Etapa')
            ->selectEtapaSeguimiento($id_form));
        $this->pager->setPage($request->getParameter('page', 1));
        $this->pager->init();
        
        parent::executeCreate($request);
    }
    
    public function executeEdit(sfWebRequest $request)
    {
        $user = $this->getUser();
        if(!$user->hasAttribute('id_form_etapa'))
        {
            $this->redirect('@homepage');
        }
        
        $id_form = $user->getAttribute('id_form_etapa');
        
        $this->pager = new sfDoctrinePager(
            'Etapa',
             sfConfig::get('app_max_etapas_en_productos')
        );
        $this->pager->setQuery(Doctrine_Core::getTable('Etapa')
            ->selectEtapaSeguimiento($id_form));
        $this->pager->setPage($request->getParameter('page', 1));
        $this->pager->init();
        
        parent::executeEdit($request);
    }
    
    public function executeUpdate(sfWebRequest $request)
    {
        $user = $this->getUser();
        if(!$user->hasAttribute('id_form_etapa'))
        {
            $this->redirect('@homepage');
        }
        
        $id_form = $user->getAttribute('id_form_etapa');
        
        // ---
        $this->pager = new sfDoctrinePager(
            'Etapa',
             sfConfig::get('app_max_etapas_en_productos')
        );
        $this->pager->setQuery(Doctrine_Core::getTable('Etapa')
            ->selectEtapaSeguimiento($id_form));
        $this->pager->setPage($request->getParameter('page', 1));
        $this->pager->init();
        
        parent::executeUpdate($request);
    }
    
    public function executeDelete(sfWebRequest $request)
    {
        $request->checkCSRFProtection();
    
        $this->dispatcher->notify(new sfEvent($this, 'admin.delete_object', array('object' => $this->getRoute()->getObject())));
    
        if ($this->getRoute()->getObject()->delete())
        {
            $this->getUser()->setFlash('notice', 'The item was deleted successfully.');
        }
    
        //$this->redirect('@etapa_etapaform5');
        $this->redirect('@formulario12');
    }
}

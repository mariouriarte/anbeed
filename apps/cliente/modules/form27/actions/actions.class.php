<?php

require_once dirname(__FILE__).'/../lib/form27GeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/form27GeneratorHelper.class.php';

/**
 * form27 actions.
 *
 * @package    anbeed
 * @subpackage form27
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class form27Actions extends autoForm27Actions
{
    public function executeListIrPortal(sfWebRequest $request)
    {
        $this->redirect('inicio/index');
    }
    
    public function executeShow(sfWebRequest $request)
    {
        $form = $this->getRoute()->getObject();
        
        //$this->form = selectForms5DeEmpresa()
        $q = Doctrine_Core::getTable('Formulario27')
            ->selectFormulario27DeEmpresa($form->getId());
        
        $this->form = $q->fetchOne();
        
    }
    
    public function executeEtapa(sfWebRequest $request)
    {
        $form = $this->getRoute()->getObject();
        
        //$this->form = selectForms5DeEmpresa()
        $q = Doctrine_Core::getTable('Formulario27')
            ->selectFormulario27DeEmpresa($form->getId());
        
        $this->form = $q->fetchOne();
    }
}

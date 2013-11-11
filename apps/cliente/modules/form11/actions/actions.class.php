<?php

require_once dirname(__FILE__).'/../lib/form11GeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/form11GeneratorHelper.class.php';

/**
 * form11 actions.
 *
 * @package    anbeed
 * @subpackage form11
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class form11Actions extends autoForm11Actions
{
    public function executeListIrPortal(sfWebRequest $request)
    {
        $this->redirect('inicio/index');
    }
    
    public function executeShow(sfWebRequest $request)
    {
        $form = $this->getRoute()->getObject();
        
        //$this->form = selectForms5DeEmpresa()
        $q = Doctrine_Core::getTable('Formulario12')
            ->selectFormulario12DeEmpresa($form->getId());
        
        $this->form = $q->fetchOne();
    
    }
    
    public function executeEtapa(sfWebRequest $request)
    {
        $form = $this->getRoute()->getObject();
        
        //$this->form = selectForms5DeEmpresa()
        $q = Doctrine_Core::getTable('Formulario11')
            ->selectFormulario12DeEmpresa($form->getId());
        
        $this->form = $q->fetchOne();
    }
}

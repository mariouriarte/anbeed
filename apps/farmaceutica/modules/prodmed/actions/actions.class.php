<?php

require_once dirname(__FILE__).'/../lib/prodmedGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/prodmedGeneratorHelper.class.php';

/**
 * prodmed actions.
 *
 * @package    anbeed
 * @subpackage prodmed
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class prodmedActions extends autoProdmedActions
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
        
        $this->producto = $this->getRoute()->getObject();
        //Verificamos si ya tiene formulacc para mandarlo a NEW o a EDIT        
        $formula_cc_id = $this->producto->Medicamento[0]->getFormulaCcId();
        //var_dump($formula_cc_id);
        //die();
        $user->setAttribute('producto', $this->producto);
        if(($formula_cc_id == NULL))
           $this->redirect('/farmaceutica_dev.php/formulas/new');
        else
           $this->redirect('/farmaceutica_dev.php/formulas/'.$formula_cc_id.'/edit');
    }
    public function executeIrForm5(sfWebRequest $request)
    {
        $user = $this->getUser();
        $this->producto = $this->getRoute()->getObject();
        $user->setAttribute('producto', $this->producto);
        $this->redirect('/farmaceutica_dev.php/formulario5');
    }
    

}

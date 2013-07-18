<?php

require_once dirname(__FILE__).'/../lib/medicamentosGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/medicamentosGeneratorHelper.class.php';

/**
 * medicamentos actions.
 *
 * @package    anbeed
 * @subpackage medicamentos
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class medicamentosActions extends autoMedicamentosActions
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
        
        $this->medicamento = $this->getRoute()->getObject();
        //Verificamos si ya tiene formulacc para mandarlo a NEW o a EDIT        
        $formula_cc_id = $this->medicamento->getFormulaCcId();
        //var_dump($formula_cc_id);
        //die();
        $user->setAttribute('medicamento', $this->medicamento);
        if(($formula_cc_id == NULL))
           $this->redirect('/farmaceutica_dev.php/formulas/new');
        else
           $this->redirect('/farmaceutica_dev.php/formulas/'.$formula_cc_id.'/edit');
    }
    public function executeIrForm5(sfWebRequest $request)
    {
        $user = $this->getUser();
        $this->medicamento = $this->getRoute()->getObject();
        $user->setAttribute('medicamento', $this->medicamento);
        $this->redirect('/farmaceutica_dev.php/formulario5');
    }
}

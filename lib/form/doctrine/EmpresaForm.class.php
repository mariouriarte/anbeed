<?php

/**
 * Empresa form.
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class EmpresaForm extends BaseEmpresaForm
{
    public function configure()
    {
        unset($this['created_at'], $this['updated_at']);
        
        // Fecha de Registro
        $this->widgetSchema['fecha_registro'] = new sfWidgetFormInputText(
            array(), array('value' => date('Y-m-d'), 'readonly' => 'readonly'));
        //$this->widgetSchema['fecha_registro']->setAttribute('readonly', 'readonly');
        //$this->validatorSchema['fecha_registro'] = new sfValidatorDate(array('required' => true));
        
        // Fecha de Resolución
        $this->widgetSchema['fecha_resolucion'] = new sfWidgetFormJQueryDate(
            array('culture' => 'us'));
        $this->validatorSchema['fecha_resolucion'] = new sfValidatorDate(
            array('required' => true));
        
        // Representante Legal
        $this->widgetSchema['representante_legal_id'] = new  sfWidgetFormInputText();
        
        // Regente Farmaceutico
        $this->widgetSchema['regente_farmaceutico_id'] = new  sfWidgetFormInputText();
        
    }
}

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
        unset($this['created_at'], $this['updated_at'],
              $this['representante_legal_id'], $this['regente_farmaceutico_id'], 
              $this['created_by'], $this['updated_by']);
        
            
        // Fecha de Registro
        
        $this->widgetSchema['fecha_registro'] = new sfWidgetFormInputHidden(
            array(), array('value' => date('Y-m-d'), 'readonly' => 'readonly', 'size' => '30'));
        //$this->widgetSchema['fecha_registro']->setAttribute('readonly', 'readonly');
        //$this->validatorSchema['fecha_registro'] = new sfValidatorDate(array('required' => true));
        
        // Fecha de Resolución
        $years = range(date('Y') - 80, date('Y'));   
        $this->widgetSchema['fecha_resolucion'] = new sfWidgetFormJQueryDate(
            array('culture' => 'es','date_widget' => new sfWidgetFormDate(array(
                  'years' => array_combine($years, $years))), ));
        
        
        $this->validatorSchema['fecha_resolucion'] = new sfValidatorDate(
            array('required' => true));
        
        ///// Pais
        $this->widgetSchema['pais_id'] = new sfWidgetFormDoctrineChoice(
            array('model'        => 'Pais',
                  'add_empty'    => 'Seleccione país'));
        $this->validatorSchema['pais_id'] = new sfValidatorDoctrineChoice(
            array('model' => 'Pais', 'required' => false));
        
        ////// ciudad
        $this->widgetSchema['ciudad_id'] = new sfWidgetFormDoctrineDependentSelect(
            array('model'     => 'Ciudad',
                  'depends'   => 'Pais',
                  'add_empty' => 'Seleccione ciudad'));
        $this->validatorSchema['ciudad_id'] = new sfValidatorDoctrineChoice(
            array('model' => 'Ciudad', 'required' => true));
        
        /*
        // Representante Legal
        $this->widgetSchema['representante_legal_id']= new sfWidgetFormDoctrineJQueryAutocompleter(
                array( 'model'=>'RepresentanteLegal',
                       'url'=>sfContext::getInstance()->getRouting()->generate('buscar_representantes')
         ));
        // Regente Farmaceutico
        $this->widgetSchema['regente_farmaceutico_id']= new sfWidgetFormDoctrineJQueryAutocompleter(
                array( 'model'=>'RegenteFarmaceutico',
                        'url'=>sfContext::getInstance()->getRouting()->generate('buscar_regentes')
         ));
        $this->widgetSchema['regente_farmaceutico_id']->addOption('method', '__toString');
         */
        
        /*AJUSTANDO LOS TAMAños*/
        $this->widgetSchema['razon_social']->setAttribute('size' , 50);
        $this->widgetSchema['direccion']->setAttribute('size' , 50);
        $this->widgetSchema['email']->setAttribute('size' , 50);
        $this->widgetSchema['actividad']->setAttribute('size' , 50);
        $this->widgetSchema['observacion']->setAttribute('cols' , 80);
         
    }
}

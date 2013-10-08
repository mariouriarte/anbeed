<?php

/**
 * Formulario706 form.
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class Formulario706Form extends BaseFormulario706Form
{
    protected $tipo_maquila = array('Envasador'      => 'Envasador',
                                    'Empacador'      => 'Empacador',
                                    'Acondicionador' => 'Acondicionador');
    
    protected $datos_titular = array('Representante Legal' => 'Representante Legal',
                                     'Apoderado'           => 'Apoderado');
    
    protected $datos = array('TITULAR'     => 'TITULAR',
                             'IMPORTADOR' => 'IMPORTADOR');
    
    public function configure()
    {
        unset($this['created_at'], $this['updated_at'], $this['created_by'], $this['updated_by']);
        $years = range(date('Y') - 0, date('Y'));   
        
        /*Numero de registro sanitario para actualizarlo en el producto*/
        $this->widgetSchema['registro_sanitario'] = new sfWidgetFormInputText(); 
        $this->validatorSchema['registro_sanitario'] = new sfValidatorString(array('required' => false, 'min_length' => 4, 'max_length' => 10));
        
        
        $this->widgetSchema['formulario_id'] = new sfWidgetFormInputHidden();
        
        //// higiene
        $this->widgetSchema['higiene_id'] = new sfWidgetFormInputHidden();
      
        //// datos
        $this->widgetSchema['datos'] = new sfWidgetFormChoice(
            array('expanded' => true, 
                  'choices'  => $this->datos));
        
        //// datos titular
        $this->widgetSchema['datos_titular'] = new sfWidgetFormChoice(
            array('expanded' => true, 
                  'choices'  =>  $this->datos_titular));
        
        //// tipo de tramite
        $this->widgetSchema['tipo_tramite_formulario_id'] = new sfWidgetFormDoctrineChoice(
            array('expanded' => true,
                 'model'     => 'TipoTramiteFormulario'));
        
        //// fecha
        $this->widgetSchema['fecha'] = new sfWidgetFormJQueryDate(
            array('culture'     => 'es',
                  'default'     => date('Y-m-d'),
                  'date_widget' => new sfWidgetFormDate(array(
                      'format' => '%day%%month%%year%',
                      'years'       => array_combine($years, $years)))));
        
        //// fecha
        $this->widgetSchema['fecha_inicio_vigencia'] = new sfWidgetFormJQueryDate(
            array('culture'     => 'es',
                  'date_widget' => new sfWidgetFormDate(array(
                      'format' => '%day%%month%%year%',
                      'years'       => array_combine($years, $years)))));
        
        //// Tipo de maquila
        $this->widgetSchema['maquila_tipo'] = new sfWidgetFormChoice(
            array('expanded' => true, 
                  'choices'  => $this->tipo_maquila));
        $this->validatorSchema['maquila_tipo'] = new sfValidatorString(array('required' => false));
        
        //// Responsable comercial Pais
        $this->widgetSchema['pais_id'] = new sfWidgetFormDoctrineChoice(
            array('model'     => 'Pais',
                  'add_empty' => ' - Seleccione país'));
        $this->validatorSchema['pais_id'] = new sfValidatorDoctrineChoice(
            array('model' => 'Pais', 'required' => false));
       
        //// Responsable comercial ciudad
        $this->widgetSchema['rescom_ciudad_id'] = new sfWidgetFormDoctrineDependentSelect(
            array('model'     => 'Ciudad',
                  'depends'   => 'Pais',
                  'add_empty' => ' - Seleccione ciudad'));
        $this->validatorSchema['rescom_ciudad_id'] = new sfValidatorDoctrineChoice(
            array('model' => 'Ciudad', 'required' => false));
        
        /*ajuste de tamaños*/
        $this->widgetSchema['informacion_cambios']->setAttribute('cols' , 121);
      
    }
}

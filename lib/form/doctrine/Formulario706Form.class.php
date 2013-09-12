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
    
    public function configure()
    {
        unset($this['created_at'], $this['updated_at'], $this['created_by'], $this['updated_by']);
        $years = range(date('Y') - 0, date('Y'));   
        
        $this->widgetSchema['formulario_id'] = new sfWidgetFormInputHidden();
        
        //// higiene
        $this->widgetSchema['higiene_id'] = new sfWidgetFormInputHidden();
      
        //// datos
        $this->widgetSchema['datos'] = new sfWidgetFormChoice(
            array('expanded' => true, 
                  'choices'  =>  array('TITULAR', 'IMPORTACIÓN')));
        
        //// datos titular
        $this->widgetSchema['datos_titular'] = new sfWidgetFormChoice(
            array('expanded' => true, 
                  'choices'  =>  array('REPRESENTANTE LEGAL', 'APODERADO')));
        
        //// tipo de tramite
        $this->widgetSchema['tipo_tramite_formulario_id'] = new sfWidgetFormDoctrineChoice(
            array('expanded' => true,
                 'model'     => 'TipoTramiteFormulario'));
        
        //// fecha
        $this->widgetSchema['fecha'] = new sfWidgetFormJQueryDate(
            array('culture'     => 'es',
                  'default'     => date('Y-m-d'),
                  'date_widget' => new sfWidgetFormDate(array(
                  'years'       => array_combine($years, $years)))));
        
        //// fecha
        $this->widgetSchema['fecha_inicio_vigencia'] = new sfWidgetFormJQueryDate(
            array('culture'     => 'es',
                  'date_widget' => new sfWidgetFormDate(array(
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
            array('model' => 'Pais', 'required' => true));
       
        //// Responsable comercial ciudad
        $this->widgetSchema['rescom_ciudad_id'] = new sfWidgetFormDoctrineDependentSelect(
            array('model'     => 'Ciudad',
                  'depends'   => 'Pais',
                  'add_empty' => ' - Seleccione ciudad'));
        $this->validatorSchema['rescom_ciudad_id'] = new sfValidatorDoctrineChoice(
            array('model' => 'Ciudad', 'required' => true));
      
    }
}

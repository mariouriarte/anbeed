<?php

/**
 * Formulario516 form.
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class Formulario516Form extends BaseFormulario516Form
{
    protected $datos = array('TITULAR'                            => 'TITULAR',
                             'RESPONSABLE DE LA COMERCIALIZACION' => 'RESPONSABLE DE LA COMERCIALIZACIÓN');
    
    protected $datos_titular = array('Representante Legal' => 'Representante Legal',
                                     'Apoderado'           => 'Apoderado');
    
    protected $tipo_maquila = array('Envasador'      => 'Envasador',
                                    'Empacador'      => 'Empacador',
                                    'Acondicionador' => 'Acondicionador');
    
    public function configure()
    {
        //$cosmetico = sfContext::getInstance()->getUser()->getAttribute('cosmetico');
        
        unset($this['created_at'], $this['updated_at'], 
              $this['created_by'], $this['updated_by']);
        
        /*Numero de registro sanitario para actualizarlo en el producto*/
       $this->widgetSchema['registro_sanitario'] = new sfWidgetFormInputText(); 
       $this->validatorSchema['registro_sanitario'] = new sfValidatorString(array('required' => false, 'min_length' => 1, 'max_length' => 20));
        
        $years = range(date('Y') - 0, date('Y'));   
        
        $this->widgetSchema['formulario_id'] = new sfWidgetFormInputHidden();   
        
        // Asigna el id del cosmetico para el form516 
        $this->widgetSchema['cosmetico_id'] = new sfWidgetFormInputHidden();
        
        $this->widgetSchema['fecha'] = new sfWidgetFormJQueryDate(
             array('culture'     => 'es',
                   'default'     => date('Y-m-d'),
                   'date_widget' => new sfWidgetFormDate(array(
                       'format' => '%day%%month%%year%',
                       'years'       => array_combine($years, $years)))));
        
        $this->widgetSchema['fecha_inicio_vigencia'] = new sfWidgetFormJQueryDate(
             array('culture'     => 'es',
                   'date_widget' => new sfWidgetFormDate(array(
                       'format' => '%day%%month%%year%',
                       'years'       => array_combine($years, $years)))));
        
        
        $this->widgetSchema['datos'] = new sfWidgetFormChoice(
              array('expanded' => true, 
                    'choices'  => $this->datos,));
        
        $this->widgetSchema['datos_titular'] = new sfWidgetFormChoice(
              array('expanded' => true, 
                    'choices'  => $this->datos_titular));
        
        $this->widgetSchema['tipo_tramite_formulario_id'] = new sfWidgetFormDoctrineChoice(
             array('expanded' => true,
                   'model'    => 'TipoTramiteFormulario'));
        
        $this->widgetSchema['tipo_tramite_formulario_id'] = new sfWidgetFormDoctrineChoice(
             array('expanded' => true,
                   'model'    => 'TipoTramiteFormulario'));
        
        $this->widgetSchema['maquila_tipo'] = new sfWidgetFormChoice(
            array('expanded' => true, 
                  'choices'  => $this->tipo_maquila));
        $this->validatorSchema['maquila_tipo'] = new sfValidatorString(array('required' => false));
        
        //$this->widgetSchema['tipo_tramite_formulario_id']->addOption('order_by',array('id','asc'));
                /*ajuste de tamaños*/
        $this->widgetSchema['informacion_cambios']->setAttribute('cols' , 121);
    }
}

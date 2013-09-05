<?php

/**
 * Formulario27 form.
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class Formulario27Form extends BaseFormulario27Form
{
  public function configure()
  {
       unset($this['created_at'], $this['updated_at']);
       $years = range(date('Y') - 0, date('Y'));   
       
       // Asigna el id del dispositivo para el form27
       
       if(!isset($this['dispositivo_medico_id']))
       {
          $dispositivo = sfContext::getInstance()->getUser()->getAttribute('dispositivo_medico');
           $this->widgetSchema['dispositivo_medico_id'] = new sfWidgetFormInputHidden(
                    array(), array('value' => $dispositivo->getId()));
       }
       else
       {    
           $this->widgetSchema['dispositivo_medico_id'] = new sfWidgetFormInputHidden(
                    array());
       }
       
       $this->widgetSchema['fecha'] = new sfWidgetFormJQueryDate(
            array('culture' => 'es',
                  'default' => date('Y-m-d'),
                  'date_widget' => new sfWidgetFormDate(array(
                  'years' => array_combine($years, $years)))));
       
       $this->widgetSchema['fecha_inicio_vigencia'] = new sfWidgetFormJQueryDate(
            array('culture' => 'es',
                  'date_widget' => new sfWidgetFormDate(array(
                  'years' => array_combine($years, $years)))));
       
       $this->widgetSchema['tipo_tramite_formulario27_id'] = new sfWidgetFormDoctrineChoice(
           array('expanded' => true,
                 'model'    => 'TipoTramiteFormulario27'));
       $this->validatorSchema['tipo_tramite_formulario27_id'] = new sfValidatorDoctrineChoice(
           array('required' => true,
                 'model'    => 'TipoTramiteFormulario27'));
       
       $this->widgetSchema['datos_formulario27_id'] = new sfWidgetFormDoctrineChoice(
           array('expanded' => true,
                'model'    => 'DatosFormulario27'));
       $this->validatorSchema['datos_formulario27_id'] = new sfValidatorDoctrineChoice(
           array('required' => true,
                 'model'    => 'DatosFormulario27'));
       
       $this->widgetSchema['origen_formulario_id'] = new sfWidgetFormDoctrineChoice(
           array('expanded' => true,
                 'model'    => 'OrigenFormulario'));
  }
}

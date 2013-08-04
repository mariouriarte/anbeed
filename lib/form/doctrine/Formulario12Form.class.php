<?php

/**
 * Formulario12 form.
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class Formulario12Form extends BaseFormulario12Form
{
  public function configure()
  {
       unset($this['created_at'], $this['updated_at']);
       $years = range(date('Y') - 0, date('Y'));
       
     // Asigna el id del producto para el form12

       $this->widgetSchema['reactivo_id'] = new sfWidgetFormInputHidden(
                    array());

       $this->widgetSchema['fecha'] = new sfWidgetFormJQueryDate(
            array('culture' => 'es',
                  'default' => date('Y-m-d'),
                  'date_widget' => new sfWidgetFormDate(array(
                  'years' => array_combine($years, $years)))));
       
       $this->widgetSchema['tipo_tramite_formulario12_id'] = new sfWidgetFormDoctrineChoice(
           array('expanded' => true,
                 'model' => 'TipoTramiteFormulario12'));
       $this->validatorSchema['tipo_tramite_formulario12_id'] = new sfValidatorDoctrineChoice(
           array('required' => true,
                 'model' => 'TipoTramiteFormulario12'));
       
       $this->widgetSchema['origen_formulario_id'] = new sfWidgetFormDoctrineChoice(
           array('expanded' => true,
                 'model' => 'OrigenFormulario'));
       $this->validatorSchema['origen_formulario_id'] = new sfValidatorDoctrineChoice(
           array('required' => true,
                 'model' => 'OrigenFormulario'));
       
       $this->widgetSchema['fecha_inicio_vigencia'] = new sfWidgetFormJQueryDate(
            array('culture' => 'es',
                  'date_widget' => new sfWidgetFormDate(array(
                  'years' => array_combine($years, $years)))));
  }
}

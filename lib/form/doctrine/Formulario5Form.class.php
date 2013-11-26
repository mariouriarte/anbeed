<?php

/**
 * Formulario5 form.
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class Formulario5Form extends BaseFormulario5Form
{
  public function configure()
  {
       unset($this['created_at'], $this['updated_at'], $this['created_by'], $this['updated_by']);
       $years = range(date('Y') - 0, date('Y'));
       
     // Asigna el id del producto para el form5
       $this->widgetSchema['formulario_id'] = new sfWidgetFormInputHidden();
       
       $this->widgetSchema['medicamento_id'] = new sfWidgetFormInputHidden();

       /*Numero de registro sanitario para actualizarlo en el producto*/
       $this->widgetSchema['registro_sanitario'] = new sfWidgetFormInputText(); 
       $this->validatorSchema['registro_sanitario'] = new sfValidatorString(array('required' => false, 'min_length' => 1, 'max_length' => 20));
       
       
       
       $this->widgetSchema['fecha'] = new sfWidgetFormJQueryDate(
            array('culture' => 'es',
                  'default' => date('Y-m-d'),
                  'date_widget' => new sfWidgetFormDate(array(
                      'format' => '%day%%month%%year%',
                      'years' => array_combine($years, $years)))));
       
       $this->widgetSchema['tipo_tramite_formulario5_id'] = new sfWidgetFormDoctrineChoice(
           array('expanded' => true,
                 'model' => 'TipoTramiteFormulario5'));
       $this->validatorSchema['tipo_tramite_formulario5_id'] = new sfValidatorDoctrineChoice(
           array('required' => true,
                 'model' => 'TipoTramiteFormulario5'));
       
       $this->widgetSchema['tipo_producto_formulario5_id'] = new sfWidgetFormDoctrineChoice(
           array('expanded' => true,
                'model' => 'TipoProductoFormulario5'));
       $this->validatorSchema['tipo_producto_formulario5_id'] = new sfValidatorDoctrineChoice(
           array('required' => true,
                 'model' => 'TipoProductoFormulario5'));
       
       $this->widgetSchema['origen_formulario_id'] = new sfWidgetFormDoctrineChoice(
           array('expanded' => true,
                 'model' => 'OrigenFormulario'));
       $this->widgetSchema['fecha_inicio_vigencia'] = new sfWidgetFormJQueryDate(
            array('culture' => 'es',
                  'date_widget' => new sfWidgetFormDate(array(
                      'format' => '%day%%month%%year%',
                      'years' => array_combine($years, $years)))));
  }
}

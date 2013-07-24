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
       unset($this['created_at'], $this['updated_at']);
       $years = range(date('Y') - 0, date('Y'));
       
       $medicamento = sfContext::getInstance()->getUser()->getAttribute('medicamento');
       
       // Asigna el id del medicamento para el form5
       $this->widgetSchema['medicamento_id'] = new sfWidgetFormInputHidden(
            array(), array('value' => $medicamento->getId()));
       
       $this->widgetSchema['fecha'] = new sfWidgetFormJQueryDate(
            array('culture' => 'es',
                  'default' => date('Y-m-d'),
                  'date_widget' => new sfWidgetFormDate(array(
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
       
  }
}

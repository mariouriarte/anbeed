<?php

/**
 * Formulario11 form base class.
 *
 * @method Formulario11 getObject() Returns the current form's model object
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFormulario11Form extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                    => new sfWidgetFormInputHidden(),
      'formulario_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Formulario'), 'add_empty' => true)),
      'fecha'                 => new sfWidgetFormDate(),
      'vigencia'              => new sfWidgetFormInputText(),
      'fecha_inicio_vigencia' => new sfWidgetFormDate(),
      'empresa_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empresa'), 'add_empty' => false)),
      'tipo_despacho_id'      => new sfWidgetFormInputText(),
      'otro'                  => new sfWidgetFormInputText(),
      'sustancias_quimicas'   => new sfWidgetFormInputCheckbox(),
      'licencia_previa'       => new sfWidgetFormInputCheckbox(),
      'licencia_resolucion'   => new sfWidgetFormInputText(),
      'licencia_fecha'        => new sfWidgetFormDate(),
      'numero_item'           => new sfWidgetFormInputText(),
      'foja'                  => new sfWidgetFormInputText(),
      'pais_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pais'), 'add_empty' => false)),
      'factura'               => new sfWidgetFormInputText(),
      'factura_fecha'         => new sfWidgetFormDate(),
      'para'                  => new sfWidgetFormInputText(),
      'created_at'            => new sfWidgetFormDateTime(),
      'updated_at'            => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'formulario_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Formulario'), 'required' => false)),
      'fecha'                 => new sfValidatorDate(array('required' => false)),
      'vigencia'              => new sfValidatorInteger(array('required' => false)),
      'fecha_inicio_vigencia' => new sfValidatorDate(array('required' => false)),
      'empresa_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Empresa'))),
      'tipo_despacho_id'      => new sfValidatorInteger(),
      'otro'                  => new sfValidatorString(array('max_length' => 250)),
      'sustancias_quimicas'   => new sfValidatorBoolean(),
      'licencia_previa'       => new sfValidatorBoolean(),
      'licencia_resolucion'   => new sfValidatorString(array('max_length' => 150)),
      'licencia_fecha'        => new sfValidatorDate(),
      'numero_item'           => new sfValidatorInteger(),
      'foja'                  => new sfValidatorInteger(),
      'pais_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Pais'))),
      'factura'               => new sfValidatorString(array('max_length' => 150)),
      'factura_fecha'         => new sfValidatorDate(),
      'para'                  => new sfValidatorString(array('max_length' => 150)),
      'created_at'            => new sfValidatorDateTime(),
      'updated_at'            => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('formulario11[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Formulario11';
  }

}

<?php

/**
 * Medicamento form base class.
 *
 * @method Medicamento getObject() Returns the current form's model object
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMedicamentoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                    => new sfWidgetFormInputHidden(),
      'producto_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Producto'), 'add_empty' => false)),
      'forma_farmaceutica_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('FormaFarmaceutica'), 'add_empty' => false)),
      'via_administracion_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ViaAdministracion'), 'add_empty' => false)),
      'tipo_venta_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoVenta'), 'add_empty' => false)),
      'formula_cc_id'         => new sfWidgetFormInputText(),
      'nombre_comercial'      => new sfWidgetFormInputText(),
      'concentracion'         => new sfWidgetFormInputText(),
      'accion_terapeutica'    => new sfWidgetFormInputText(),
      'conservacion'          => new sfWidgetFormInputText(),
      'periodo_validez'       => new sfWidgetFormInputText(),
      'especificacion_envase' => new sfWidgetFormTextarea(),
      'aval'                  => new sfWidgetFormInputText(),
      'certificado_control'   => new sfWidgetFormInputText(),
      'created_at'            => new sfWidgetFormDateTime(),
      'updated_at'            => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'producto_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Producto'))),
      'forma_farmaceutica_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('FormaFarmaceutica'))),
      'via_administracion_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ViaAdministracion'))),
      'tipo_venta_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TipoVenta'))),
      'formula_cc_id'         => new sfValidatorInteger(),
      'nombre_comercial'      => new sfValidatorString(array('max_length' => 255)),
      'concentracion'         => new sfValidatorString(array('max_length' => 150)),
      'accion_terapeutica'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'conservacion'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'periodo_validez'       => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'especificacion_envase' => new sfValidatorString(array('max_length' => 2000, 'required' => false)),
      'aval'                  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'certificado_control'   => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'created_at'            => new sfValidatorDateTime(),
      'updated_at'            => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('medicamento[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Medicamento';
  }

}

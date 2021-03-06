<?php

/**
 * DetalleFormulaCc form base class.
 *
 * @method DetalleFormulaCc getObject() Returns the current form's model object
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDetalleFormulaCcForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'formula_cc_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('FormulaCc'), 'add_empty' => false)),
      'ingrediente_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Ingrediente'), 'add_empty' => true)),
      'cantidad'       => new sfWidgetFormInputText(),
      'unidad'         => new sfWidgetFormInputText(),
      'created_at'     => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
      'created_by'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'formula_cc_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('FormulaCc'))),
      'ingrediente_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Ingrediente'), 'required' => false)),
      'cantidad'       => new sfValidatorNumber(),
      'unidad'         => new sfValidatorString(array('max_length' => 20)),
      'created_at'     => new sfValidatorDateTime(),
      'updated_at'     => new sfValidatorDateTime(),
      'created_by'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'required' => false)),
      'updated_by'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('detalle_formula_cc[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DetalleFormulaCc';
  }

}

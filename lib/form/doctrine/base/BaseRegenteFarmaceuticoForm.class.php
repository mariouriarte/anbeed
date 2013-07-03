<?php

/**
 * RegenteFarmaceutico form base class.
 *
 * @method RegenteFarmaceutico getObject() Returns the current form's model object
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRegenteFarmaceuticoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                    => new sfWidgetFormInputHidden(),
      'persona_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Persona'), 'add_empty' => false)),
      'matricula_profesional' => new sfWidgetFormInputText(),
      'carnet_colegiado'      => new sfWidgetFormInputText(),
      'is_active'             => new sfWidgetFormInputCheckbox(),
      'created_at'            => new sfWidgetFormDateTime(),
      'updated_at'            => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'persona_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Persona'))),
      'matricula_profesional' => new sfValidatorString(array('max_length' => 20)),
      'carnet_colegiado'      => new sfValidatorString(array('max_length' => 20)),
      'is_active'             => new sfValidatorBoolean(array('required' => false)),
      'created_at'            => new sfValidatorDateTime(),
      'updated_at'            => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('regente_farmaceutico[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RegenteFarmaceutico';
  }

}

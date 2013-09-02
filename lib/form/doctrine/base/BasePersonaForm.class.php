<?php

/**
 * Persona form base class.
 *
 * @method Persona getObject() Returns the current form's model object
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePersonaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'nombre'           => new sfWidgetFormInputText(),
      'ap_paterno'       => new sfWidgetFormInputText(),
      'ap_materno'       => new sfWidgetFormInputText(),
      'ci'               => new sfWidgetFormInputText(),
      'expedido'         => new sfWidgetFormInputText(),
      'direccion'        => new sfWidgetFormInputText(),
      'telefono'         => new sfWidgetFormInputText(),
      'celular'          => new sfWidgetFormInputText(),
      'fax'              => new sfWidgetFormInputText(),
      'casilla'          => new sfWidgetFormInputText(),
      'email'            => new sfWidgetFormInputText(),
      'fecha_nacimiento' => new sfWidgetFormDate(),
      'is_active'        => new sfWidgetFormInputCheckbox(),
      'foto'             => new sfWidgetFormInputText(),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
      'created_by'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'           => new sfValidatorString(array('max_length' => 50)),
      'ap_paterno'       => new sfValidatorString(array('max_length' => 30)),
      'ap_materno'       => new sfValidatorString(array('max_length' => 30)),
      'ci'               => new sfValidatorString(array('max_length' => 12)),
      'expedido'         => new sfValidatorString(array('max_length' => 2)),
      'direccion'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'telefono'         => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'celular'          => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'fax'              => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'casilla'          => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'email'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'fecha_nacimiento' => new sfValidatorDate(array('required' => false)),
      'is_active'        => new sfValidatorBoolean(array('required' => false)),
      'foto'             => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'created_at'       => new sfValidatorDateTime(),
      'updated_at'       => new sfValidatorDateTime(),
      'created_by'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'required' => false)),
      'updated_by'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorDoctrineUnique(array('model' => 'Persona', 'column' => array('ci'))),
        new sfValidatorDoctrineUnique(array('model' => 'Persona', 'column' => array('email'))),
      ))
    );

    $this->widgetSchema->setNameFormat('persona[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Persona';
  }

}

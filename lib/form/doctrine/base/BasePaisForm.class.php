<?php

/**
 * Pais form base class.
 *
 * @method Pais getObject() Returns the current form's model object
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePaisForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'codigo'      => new sfWidgetFormInputText(),
      'nombre'      => new sfWidgetFormInputText(),
      'continente'  => new sfWidgetFormInputText(),
      'region'      => new sfWidgetFormInputText(),
      'poblacion'   => new sfWidgetFormInputText(),
      'jefe_estado' => new sfWidgetFormInputText(),
      'capital'     => new sfWidgetFormInputText(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
      'created_by'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'codigo'      => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'nombre'      => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'continente'  => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'region'      => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'poblacion'   => new sfValidatorInteger(array('required' => false)),
      'jefe_estado' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'capital'     => new sfValidatorInteger(array('required' => false)),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
      'created_by'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'required' => false)),
      'updated_by'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('pais[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Pais';
  }

}

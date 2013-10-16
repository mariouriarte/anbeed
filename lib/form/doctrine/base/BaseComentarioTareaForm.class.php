<?php

/**
 * ComentarioTarea form base class.
 *
 * @method ComentarioTarea getObject() Returns the current form's model object
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseComentarioTareaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'tarea_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tarea'), 'add_empty' => false)),
      'comentario' => new sfWidgetFormTextarea(),
      'leido'      => new sfWidgetFormInputCheckbox(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
      'created_by' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'tarea_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Tarea'))),
      'comentario' => new sfValidatorString(array('max_length' => 2000)),
      'leido'      => new sfValidatorBoolean(array('required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
      'created_by' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'required' => false)),
      'updated_by' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('comentario_tarea[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ComentarioTarea';
  }

}

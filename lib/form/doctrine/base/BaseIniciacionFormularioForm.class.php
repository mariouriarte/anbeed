<?php

/**
 * IniciacionFormulario form base class.
 *
 * @method IniciacionFormulario getObject() Returns the current form's model object
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseIniciacionFormularioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'empresa_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empresa'), 'add_empty' => false)),
      'etapa_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Etapa'), 'add_empty' => true)),
      'tramite'     => new sfWidgetFormInputText(),
      'descripcion' => new sfWidgetFormTextarea(),
      'observacion' => new sfWidgetFormTextarea(),
      'fecha_fin'   => new sfWidgetFormDate(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
      'created_by'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'empresa_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Empresa'))),
      'etapa_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Etapa'), 'required' => false)),
      'tramite'     => new sfValidatorString(array('max_length' => 250)),
      'descripcion' => new sfValidatorString(array('max_length' => 2000)),
      'observacion' => new sfValidatorString(array('max_length' => 2000, 'required' => false)),
      'fecha_fin'   => new sfValidatorDate(array('required' => false)),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
      'created_by'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'required' => false)),
      'updated_by'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('iniciacion_formulario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'IniciacionFormulario';
  }

}

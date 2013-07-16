<?php

/**
 * Etapa form base class.
 *
 * @method Etapa getObject() Returns the current form's model object
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEtapaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'formulario5_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Formulario5'), 'add_empty' => true)),
      'formulario27_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Formulario27'), 'add_empty' => true)),
      'formulario516_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Formulario516'), 'add_empty' => true)),
      'formulario706_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Formulario706'), 'add_empty' => true)),
      'tipo_etapa_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoEtapa'), 'add_empty' => false)),
      'fecha'            => new sfWidgetFormDate(),
      'observacion'      => new sfWidgetFormTextarea(),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'formulario5_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Formulario5'), 'required' => false)),
      'formulario27_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Formulario27'), 'required' => false)),
      'formulario516_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Formulario516'), 'required' => false)),
      'formulario706_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Formulario706'), 'required' => false)),
      'tipo_etapa_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TipoEtapa'))),
      'fecha'            => new sfValidatorDate(),
      'observacion'      => new sfValidatorString(array('max_length' => 2000, 'required' => false)),
      'created_at'       => new sfValidatorDateTime(),
      'updated_at'       => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('etapa[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Etapa';
  }

}

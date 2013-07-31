<?php

/**
 * Formulario12 form base class.
 *
 * @method Formulario12 getObject() Returns the current form's model object
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFormulario12Form extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                           => new sfWidgetFormInputHidden(),
      'formulario_id'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Formulario'), 'add_empty' => false)),
      'fecha'                        => new sfWidgetFormDate(),
      'vigencia'                     => new sfWidgetFormInputText(),
      'fecha_inicio_vigencia'        => new sfWidgetFormDate(),
      'numero_ruta'                  => new sfWidgetFormInputText(),
      'reactivo_id'                  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Reactivo'), 'add_empty' => false)),
      'tipo_tramite_formulario12_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoTramiteFormulario12'), 'add_empty' => false)),
      'origen_formulario_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('OrigenFormulario'), 'add_empty' => false)),
      'modificacion'                 => new sfWidgetFormInputText(),
      'created_at'                   => new sfWidgetFormDateTime(),
      'updated_at'                   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'formulario_id'                => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Formulario'))),
      'fecha'                        => new sfValidatorDate(array('required' => false)),
      'vigencia'                     => new sfValidatorInteger(array('required' => false)),
      'fecha_inicio_vigencia'        => new sfValidatorDate(array('required' => false)),
      'numero_ruta'                  => new sfValidatorInteger(array('required' => false)),
      'reactivo_id'                  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Reactivo'))),
      'tipo_tramite_formulario12_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TipoTramiteFormulario12'))),
      'origen_formulario_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('OrigenFormulario'))),
      'modificacion'                 => new sfValidatorString(array('max_length' => 250)),
      'created_at'                   => new sfValidatorDateTime(),
      'updated_at'                   => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('formulario12[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Formulario12';
  }

}

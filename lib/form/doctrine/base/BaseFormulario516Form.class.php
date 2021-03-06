<?php

/**
 * Formulario516 form base class.
 *
 * @method Formulario516 getObject() Returns the current form's model object
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFormulario516Form extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                         => new sfWidgetFormInputHidden(),
      'formulario_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Formulario'), 'add_empty' => true)),
      'fecha'                      => new sfWidgetFormDate(),
      'cosmetico_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Cosmetico'), 'add_empty' => false)),
      'vigencia'                   => new sfWidgetFormInputText(),
      'fecha_inicio_vigencia'      => new sfWidgetFormDate(),
      'numero_ruta'                => new sfWidgetFormInputText(),
      'tipo_tramite_formulario_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoTramiteFormulario'), 'add_empty' => false)),
      'datos'                      => new sfWidgetFormInputText(),
      'datos_titular'              => new sfWidgetFormInputText(),
      'maquila_tipo'               => new sfWidgetFormInputText(),
      'maquila'                    => new sfWidgetFormInputText(),
      'maquila_fabricado'          => new sfWidgetFormInputText(),
      'informacion_cambios'        => new sfWidgetFormTextarea(),
      'created_at'                 => new sfWidgetFormDateTime(),
      'updated_at'                 => new sfWidgetFormDateTime(),
      'created_by'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'formulario_id'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Formulario'), 'required' => false)),
      'fecha'                      => new sfValidatorDate(array('required' => false)),
      'cosmetico_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Cosmetico'))),
      'vigencia'                   => new sfValidatorInteger(array('required' => false)),
      'fecha_inicio_vigencia'      => new sfValidatorDate(array('required' => false)),
      'numero_ruta'                => new sfValidatorInteger(array('required' => false)),
      'tipo_tramite_formulario_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TipoTramiteFormulario'))),
      'datos'                      => new sfValidatorString(array('max_length' => 150)),
      'datos_titular'              => new sfValidatorString(array('max_length' => 150)),
      'maquila_tipo'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'maquila'                    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'maquila_fabricado'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'informacion_cambios'        => new sfValidatorString(array('max_length' => 3000, 'required' => false)),
      'created_at'                 => new sfValidatorDateTime(),
      'updated_at'                 => new sfValidatorDateTime(),
      'created_by'                 => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'required' => false)),
      'updated_by'                 => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('formulario516[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Formulario516';
  }

}

<?php

/**
 * Formulario5 form base class.
 *
 * @method Formulario5 getObject() Returns the current form's model object
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFormulario5Form extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                           => new sfWidgetFormInputHidden(),
      'formulario_id'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Formulario'), 'add_empty' => true)),
      'fecha'                        => new sfWidgetFormDate(),
      'vigencia'                     => new sfWidgetFormInputText(),
      'fecha_inicio_vigencia'        => new sfWidgetFormDate(),
      'numero_ruta'                  => new sfWidgetFormInputText(),
      'tipo_tramite_formulario5_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoTramiteFormulario5'), 'add_empty' => false)),
      'tipo_producto_formulario5_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoProductoFormulario5'), 'add_empty' => false)),
      'origen_formulario_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('OrigenFormulario'), 'add_empty' => false)),
      'medicamento_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Medicamento'), 'add_empty' => false)),
      'created_at'                   => new sfWidgetFormDateTime(),
      'updated_at'                   => new sfWidgetFormDateTime(),
      'created_by'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'formulario_id'                => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Formulario'), 'required' => false)),
      'fecha'                        => new sfValidatorDate(array('required' => false)),
      'vigencia'                     => new sfValidatorInteger(array('required' => false)),
      'fecha_inicio_vigencia'        => new sfValidatorDate(array('required' => false)),
      'numero_ruta'                  => new sfValidatorInteger(array('required' => false)),
      'tipo_tramite_formulario5_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TipoTramiteFormulario5'))),
      'tipo_producto_formulario5_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TipoProductoFormulario5'))),
      'origen_formulario_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('OrigenFormulario'))),
      'medicamento_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Medicamento'))),
      'created_at'                   => new sfValidatorDateTime(),
      'updated_at'                   => new sfValidatorDateTime(),
      'created_by'                   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'required' => false)),
      'updated_by'                   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('formulario5[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Formulario5';
  }

}

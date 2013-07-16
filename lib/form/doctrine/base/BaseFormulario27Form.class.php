<?php

/**
 * Formulario27 form base class.
 *
 * @method Formulario27 getObject() Returns the current form's model object
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFormulario27Form extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                           => new sfWidgetFormInputHidden(),
      'fecha'                        => new sfWidgetFormDate(),
      'vigencia'                     => new sfWidgetFormInputText(),
      'fecha_inicio_vigencia'        => new sfWidgetFormDate(),
      'numero_ruta'                  => new sfWidgetFormInputText(),
      'tipo_tramite_formulario27_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoTramiteFormulario27'), 'add_empty' => false)),
      'origen_formulario_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('OrigenFormulario'), 'add_empty' => false)),
      'datos_formulario27_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatosFormulario27'), 'add_empty' => false)),
      'producto_id'                  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Producto'), 'add_empty' => false)),
      'created_at'                   => new sfWidgetFormDateTime(),
      'updated_at'                   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'fecha'                        => new sfValidatorDate(array('required' => false)),
      'vigencia'                     => new sfValidatorInteger(array('required' => false)),
      'fecha_inicio_vigencia'        => new sfValidatorDate(array('required' => false)),
      'numero_ruta'                  => new sfValidatorInteger(array('required' => false)),
      'tipo_tramite_formulario27_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TipoTramiteFormulario27'))),
      'origen_formulario_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('OrigenFormulario'))),
      'datos_formulario27_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatosFormulario27'))),
      'producto_id'                  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Producto'))),
      'created_at'                   => new sfValidatorDateTime(),
      'updated_at'                   => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('formulario27[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Formulario27';
  }

}

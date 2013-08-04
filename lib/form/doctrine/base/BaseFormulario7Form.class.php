<?php

/**
 * Formulario7 form base class.
 *
 * @method Formulario7 getObject() Returns the current form's model object
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFormulario7Form extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                    => new sfWidgetFormInputHidden(),
      'formulario_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Formulario'), 'add_empty' => true)),
      'fecha'                 => new sfWidgetFormDate(),
      'vigencia'              => new sfWidgetFormInputText(),
      'fecha_inicio_vigencia' => new sfWidgetFormDate(),
      'referencia_aval'       => new sfWidgetFormInputText(),
      'producto_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Producto'), 'add_empty' => true)),
      'tipo_calificacion_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoCalificacion'), 'add_empty' => false)),
      'via_administracion_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ViaAdministracion'), 'add_empty' => false)),
      'accion_terapeutica'    => new sfWidgetFormTextarea(),
      'dosis'                 => new sfWidgetFormTextarea(),
      'indicaciones'          => new sfWidgetFormTextarea(),
      'contraindicaciones'    => new sfWidgetFormTextarea(),
      'precauciones'          => new sfWidgetFormTextarea(),
      'efectos_secundarios'   => new sfWidgetFormTextarea(),
      'observaciones'         => new sfWidgetFormTextarea(),
      'comision'              => new sfWidgetFormInputText(),
      'calificacion'          => new sfWidgetFormInputText(),
      'created_at'            => new sfWidgetFormDateTime(),
      'updated_at'            => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'formulario_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Formulario'), 'required' => false)),
      'fecha'                 => new sfValidatorDate(array('required' => false)),
      'vigencia'              => new sfValidatorInteger(array('required' => false)),
      'fecha_inicio_vigencia' => new sfValidatorDate(array('required' => false)),
      'referencia_aval'       => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'producto_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Producto'), 'required' => false)),
      'tipo_calificacion_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TipoCalificacion'))),
      'via_administracion_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ViaAdministracion'))),
      'accion_terapeutica'    => new sfValidatorString(array('max_length' => 1000)),
      'dosis'                 => new sfValidatorString(array('max_length' => 2000)),
      'indicaciones'          => new sfValidatorString(array('max_length' => 5000)),
      'contraindicaciones'    => new sfValidatorString(array('max_length' => 5000)),
      'precauciones'          => new sfValidatorString(array('max_length' => 5000)),
      'efectos_secundarios'   => new sfValidatorString(array('max_length' => 5000)),
      'observaciones'         => new sfValidatorString(array('max_length' => 2000, 'required' => false)),
      'comision'              => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'calificacion'          => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'created_at'            => new sfValidatorDateTime(),
      'updated_at'            => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('formulario7[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Formulario7';
  }

}

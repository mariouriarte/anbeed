<?php

/**
 * Aval form base class.
 *
 * @method Aval getObject() Returns the current form's model object
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAvalForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'codigo'              => new sfWidgetFormInputText(),
      'nombre_generico'     => new sfWidgetFormInputText(),
      'forma_farmaceutica'  => new sfWidgetFormInputText(),
      'concentracion'       => new sfWidgetFormInputText(),
      'via_administracion'  => new sfWidgetFormInputText(),
      'accion_terapeutica'  => new sfWidgetFormTextarea(),
      'dosis'               => new sfWidgetFormTextarea(),
      'indicaciones'        => new sfWidgetFormTextarea(),
      'contraindicaciones'  => new sfWidgetFormTextarea(),
      'precauciones'        => new sfWidgetFormTextarea(),
      'efectos_secundarios' => new sfWidgetFormTextarea(),
      'acta_comunicacion'   => new sfWidgetFormInputText(),
      'observaciones'       => new sfWidgetFormTextarea(),
      'comision'            => new sfWidgetFormInputText(),
      'calificacion'        => new sfWidgetFormInputText(),
      'created_at'          => new sfWidgetFormDateTime(),
      'updated_at'          => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'codigo'              => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'nombre_generico'     => new sfValidatorString(array('max_length' => 100)),
      'forma_farmaceutica'  => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'concentracion'       => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'via_administracion'  => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'accion_terapeutica'  => new sfValidatorString(array('max_length' => 1000, 'required' => false)),
      'dosis'               => new sfValidatorString(array('max_length' => 2000, 'required' => false)),
      'indicaciones'        => new sfValidatorString(array('max_length' => 5000, 'required' => false)),
      'contraindicaciones'  => new sfValidatorString(array('max_length' => 5000, 'required' => false)),
      'precauciones'        => new sfValidatorString(array('max_length' => 5000, 'required' => false)),
      'efectos_secundarios' => new sfValidatorString(array('max_length' => 5000, 'required' => false)),
      'acta_comunicacion'   => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'observaciones'       => new sfValidatorString(array('max_length' => 2000, 'required' => false)),
      'comision'            => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'calificacion'        => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'created_at'          => new sfValidatorDateTime(),
      'updated_at'          => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('aval[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Aval';
  }

}

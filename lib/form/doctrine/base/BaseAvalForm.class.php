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
      'id'                   => new sfWidgetFormInputHidden(),
      'codigo'               => new sfWidgetFormInputText(),
      'nombre_generico'      => new sfWidgetFormInputText(),
      'forma_farmaceutica'   => new sfWidgetFormInputText(),
      'concentracion'        => new sfWidgetFormInputText(),
      'via_administracion'   => new sfWidgetFormInputText(),
      'accion_terapeutica'   => new sfWidgetFormInputText(),
      'accion_terapeutica2'  => new sfWidgetFormInputText(),
      'dosis'                => new sfWidgetFormInputText(),
      'dosis2'               => new sfWidgetFormInputText(),
      'dosis3'               => new sfWidgetFormInputText(),
      'indicaciones'         => new sfWidgetFormInputText(),
      'indicaciones2'        => new sfWidgetFormInputText(),
      'indicaciones3'        => new sfWidgetFormInputText(),
      'indicaciones4'        => new sfWidgetFormInputText(),
      'indicaciones5'        => new sfWidgetFormInputText(),
      'indicaciones6'        => new sfWidgetFormInputText(),
      'contraindicaciones'   => new sfWidgetFormInputText(),
      'contraindicaciones2'  => new sfWidgetFormInputText(),
      'contraindicaciones3'  => new sfWidgetFormInputText(),
      'contraindicaciones4'  => new sfWidgetFormInputText(),
      'contraindicaciones5'  => new sfWidgetFormInputText(),
      'precauciones'         => new sfWidgetFormInputText(),
      'precauciones2'        => new sfWidgetFormInputText(),
      'precauciones3'        => new sfWidgetFormInputText(),
      'precauciones4'        => new sfWidgetFormInputText(),
      'precauciones5'        => new sfWidgetFormInputText(),
      'efectos_secundarios'  => new sfWidgetFormInputText(),
      'efectos_secundarios2' => new sfWidgetFormInputText(),
      'efectos_secundarios3' => new sfWidgetFormInputText(),
      'efectos_secundarios4' => new sfWidgetFormInputText(),
      'efectos_secundarios5' => new sfWidgetFormInputText(),
      'acta_comunicacion'    => new sfWidgetFormInputText(),
      'observaciones'        => new sfWidgetFormInputText(),
      'observaciones2'       => new sfWidgetFormInputText(),
      'created_at'           => new sfWidgetFormDateTime(),
      'updated_at'           => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'codigo'               => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'nombre_generico'      => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'forma_farmaceutica'   => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'concentracion'        => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'via_administracion'   => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'accion_terapeutica'   => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'accion_terapeutica2'  => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'dosis'                => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'dosis2'               => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'dosis3'               => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'indicaciones'         => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'indicaciones2'        => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'indicaciones3'        => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'indicaciones4'        => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'indicaciones5'        => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'indicaciones6'        => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'contraindicaciones'   => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'contraindicaciones2'  => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'contraindicaciones3'  => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'contraindicaciones4'  => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'contraindicaciones5'  => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'precauciones'         => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'precauciones2'        => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'precauciones3'        => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'precauciones4'        => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'precauciones5'        => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'efectos_secundarios'  => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'efectos_secundarios2' => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'efectos_secundarios3' => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'efectos_secundarios4' => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'efectos_secundarios5' => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'acta_comunicacion'    => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'observaciones'        => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'observaciones2'       => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'created_at'           => new sfValidatorDateTime(),
      'updated_at'           => new sfValidatorDateTime(),
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

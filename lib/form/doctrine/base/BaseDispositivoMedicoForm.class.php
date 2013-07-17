<?php

/**
 * DispositivoMedico form base class.
 *
 * @method DispositivoMedico getObject() Returns the current form's model object
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDispositivoMedicoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'producto_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Producto'), 'add_empty' => false)),
      'nombre_comercial'     => new sfWidgetFormInputText(),
      'clasificacion_riesgo' => new sfWidgetFormTextarea(),
      'codigo_internacional' => new sfWidgetFormInputText(),
      'manual'               => new sfWidgetFormInputText(),
      'indicaciones'         => new sfWidgetFormTextarea(),
      'presentacion'         => new sfWidgetFormTextarea(),
      'condicion_empaque'    => new sfWidgetFormTextarea(),
      'vida_util'            => new sfWidgetFormTextarea(),
      'metodo_desecho'       => new sfWidgetFormTextarea(),
      'created_at'           => new sfWidgetFormDateTime(),
      'updated_at'           => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'producto_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Producto'))),
      'nombre_comercial'     => new sfValidatorString(array('max_length' => 255)),
      'clasificacion_riesgo' => new sfValidatorString(array('max_length' => 1000, 'required' => false)),
      'codigo_internacional' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'manual'               => new sfValidatorInteger(array('required' => false)),
      'indicaciones'         => new sfValidatorString(array('max_length' => 2000, 'required' => false)),
      'presentacion'         => new sfValidatorString(array('max_length' => 2000, 'required' => false)),
      'condicion_empaque'    => new sfValidatorString(array('max_length' => 2000, 'required' => false)),
      'vida_util'            => new sfValidatorString(array('max_length' => 2000, 'required' => false)),
      'metodo_desecho'       => new sfValidatorString(array('max_length' => 2000, 'required' => false)),
      'created_at'           => new sfValidatorDateTime(),
      'updated_at'           => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('dispositivo_medico[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DispositivoMedico';
  }

}

<?php

/**
 * Empresa form base class.
 *
 * @method Empresa getObject() Returns the current form's model object
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEmpresaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                      => new sfWidgetFormInputHidden(),
      'representante_legal_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('RepresentanteLegal'), 'add_empty' => false)),
      'regente_farmaceutico_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('RegenteFarmaceutico'), 'add_empty' => false)),
      'razon_social'            => new sfWidgetFormInputText(),
      'fecha_registro'          => new sfWidgetFormDate(),
      'num_resolucion'          => new sfWidgetFormInputText(),
      'fecha_resolucion'        => new sfWidgetFormDate(),
      'fax'                     => new sfWidgetFormInputText(),
      'direccion'               => new sfWidgetFormInputText(),
      'casilla'                 => new sfWidgetFormInputText(),
      'telefono1'               => new sfWidgetFormInputText(),
      'telefono2'               => new sfWidgetFormInputText(),
      'email'                   => new sfWidgetFormInputText(),
      'actividad'               => new sfWidgetFormInputText(),
      'registro_camara'         => new sfWidgetFormInputText(),
      'fundempresa'             => new sfWidgetFormInputText(),
      'nit'                     => new sfWidgetFormInputText(),
      'licencia_funcionamiento' => new sfWidgetFormInputText(),
      'created_at'              => new sfWidgetFormDateTime(),
      'updated_at'              => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'representante_legal_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('RepresentanteLegal'))),
      'regente_farmaceutico_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('RegenteFarmaceutico'))),
      'razon_social'            => new sfValidatorString(array('max_length' => 255)),
      'fecha_registro'          => new sfValidatorDate(array('required' => false)),
      'num_resolucion'          => new sfValidatorString(array('max_length' => 30)),
      'fecha_resolucion'        => new sfValidatorDate(array('required' => false)),
      'fax'                     => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'direccion'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'casilla'                 => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'telefono1'               => new sfValidatorString(array('max_length' => 20)),
      'telefono2'               => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'email'                   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'actividad'               => new sfValidatorString(array('max_length' => 255)),
      'registro_camara'         => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'fundempresa'             => new sfValidatorString(array('max_length' => 30)),
      'nit'                     => new sfValidatorString(array('max_length' => 30)),
      'licencia_funcionamiento' => new sfValidatorString(array('max_length' => 30)),
      'created_at'              => new sfValidatorDateTime(),
      'updated_at'              => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorDoctrineUnique(array('model' => 'Empresa', 'column' => array('razon_social'))),
        new sfValidatorDoctrineUnique(array('model' => 'Empresa', 'column' => array('num_resolucion'))),
        new sfValidatorDoctrineUnique(array('model' => 'Empresa', 'column' => array('email'))),
        new sfValidatorDoctrineUnique(array('model' => 'Empresa', 'column' => array('nit'))),
        new sfValidatorDoctrineUnique(array('model' => 'Empresa', 'column' => array('licencia_funcionamiento'))),
      ))
    );

    $this->widgetSchema->setNameFormat('empresa[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Empresa';
  }

}

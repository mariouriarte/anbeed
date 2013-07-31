<?php

/**
 * LaboratorioFabricante form base class.
 *
 * @method LaboratorioFabricante getObject() Returns the current form's model object
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseLaboratorioFabricanteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'pais_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pais'), 'add_empty' => false)),
      'ciudad_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Ciudad'), 'add_empty' => false)),
      'nombre'        => new sfWidgetFormInputText(),
      'bajo_licencia' => new sfWidgetFormInputText(),
      'para'          => new sfWidgetFormInputText(),
      'direccion'     => new sfWidgetFormInputText(),
      'telefono'      => new sfWidgetFormInputText(),
      'fax'           => new sfWidgetFormInputText(),
      'email'         => new sfWidgetFormInputText(),
      'observaciones' => new sfWidgetFormTextarea(),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'pais_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Pais'))),
      'ciudad_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Ciudad'))),
      'nombre'        => new sfValidatorString(array('max_length' => 255)),
      'bajo_licencia' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'para'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'direccion'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'telefono'      => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'fax'           => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'email'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'observaciones' => new sfValidatorString(array('max_length' => 2000, 'required' => false)),
      'created_at'    => new sfValidatorDateTime(),
      'updated_at'    => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorDoctrineUnique(array('model' => 'LaboratorioFabricante', 'column' => array('nombre'))),
        new sfValidatorDoctrineUnique(array('model' => 'LaboratorioFabricante', 'column' => array('email'))),
      ))
    );

    $this->widgetSchema->setNameFormat('laboratorio_fabricante[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'LaboratorioFabricante';
  }

}

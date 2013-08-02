<?php

/**
 * Reactivo form base class.
 *
 * @method Reactivo getObject() Returns the current form's model object
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseReactivoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                        => new sfWidgetFormInputHidden(),
      'producto_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Producto'), 'add_empty' => false)),
      'empresa_id'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empresa'), 'add_empty' => false)),
      'laboratorio_fabricante_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('LaboratorioFabricante'), 'add_empty' => false)),
      'nombre_comercial'          => new sfWidgetFormInputText(),
      'catalogo'                  => new sfWidgetFormInputText(),
      'uso'                       => new sfWidgetFormTextarea(),
      'presentacion'              => new sfWidgetFormInputText(),
      'conservacion'              => new sfWidgetFormInputText(),
      'periodo_validez'           => new sfWidgetFormInputText(),
      'componente'                => new sfWidgetFormTextarea(),
      'registro_sanitario'        => new sfWidgetFormInputText(),
      'descripcion'               => new sfWidgetFormTextarea(),
      'created_at'                => new sfWidgetFormDateTime(),
      'updated_at'                => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'producto_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Producto'))),
      'empresa_id'                => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Empresa'))),
      'laboratorio_fabricante_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('LaboratorioFabricante'))),
      'nombre_comercial'          => new sfValidatorString(array('max_length' => 255)),
      'catalogo'                  => new sfValidatorString(array('max_length' => 255)),
      'uso'                       => new sfValidatorString(array('max_length' => 1000)),
      'presentacion'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'conservacion'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'periodo_validez'           => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'componente'                => new sfValidatorString(array('max_length' => 5000, 'required' => false)),
      'registro_sanitario'        => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'descripcion'               => new sfValidatorString(array('max_length' => 2000, 'required' => false)),
      'created_at'                => new sfValidatorDateTime(),
      'updated_at'                => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('reactivo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Reactivo';
  }

}

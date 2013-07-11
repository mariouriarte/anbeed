<?php

/**
 * Producto form base class.
 *
 * @method Producto getObject() Returns the current form's model object
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProductoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                        => new sfWidgetFormInputHidden(),
      'empresa_id'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empresa'), 'add_empty' => false)),
      'laboratorio_fabricante_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('LaboratorioFabricante'), 'add_empty' => false)),
      'nombre_generico'           => new sfWidgetFormInputText(),
      'descripcion'               => new sfWidgetFormTextarea(),
      'procedencia'               => new sfWidgetFormInputText(),
      'registro_sanitario'        => new sfWidgetFormInputText(),
      'created_at'                => new sfWidgetFormDateTime(),
      'updated_at'                => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'empresa_id'                => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Empresa'))),
      'laboratorio_fabricante_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('LaboratorioFabricante'))),
      'nombre_generico'           => new sfValidatorString(array('max_length' => 255)),
      'descripcion'               => new sfValidatorString(array('max_length' => 2000, 'required' => false)),
      'procedencia'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'registro_sanitario'        => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'created_at'                => new sfValidatorDateTime(),
      'updated_at'                => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('producto[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Producto';
  }

}

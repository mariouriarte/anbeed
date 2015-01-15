<?php

/**
 * Item form base class.
 *
 * @method Item getObject() Returns the current form's model object
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseItemForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'formulario11_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Formulario11'), 'add_empty' => false)),
      'cantidad'           => new sfWidgetFormInputText(),
      'producto_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Producto'), 'add_empty' => true)),
      'producto_unimed_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ProductoUnimed'), 'add_empty' => false)),
      'nombre'             => new sfWidgetFormInputText(),
      'num_lote'           => new sfWidgetFormInputText(),
      'num_registro_libre' => new sfWidgetFormInputText(),
      'fecha_vencimiento'  => new sfWidgetFormDate(),
      'tipo_item'          => new sfWidgetFormChoice(array('choices' => array('ANBEED' => 'ANBEED', 'UNIMED' => 'UNIMED', 'LIBRE' => 'LIBRE'))),
      'created_at'         => new sfWidgetFormDateTime(),
      'updated_at'         => new sfWidgetFormDateTime(),
      'created_by'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'formulario11_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Formulario11'))),
      'cantidad'           => new sfValidatorString(array('max_length' => 150)),
      'producto_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Producto'), 'required' => false)),
      'producto_unimed_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ProductoUnimed'))),
      'nombre'             => new sfValidatorString(array('max_length' => 28)),
      'num_lote'           => new sfValidatorString(array('max_length' => 150)),
      'num_registro_libre' => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'fecha_vencimiento'  => new sfValidatorDate(array('required' => false)),
      'tipo_item'          => new sfValidatorChoice(array('choices' => array(0 => 'ANBEED', 1 => 'UNIMED', 2 => 'LIBRE'))),
      'created_at'         => new sfValidatorDateTime(),
      'updated_at'         => new sfValidatorDateTime(),
      'created_by'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'required' => false)),
      'updated_by'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('item[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Item';
  }

}

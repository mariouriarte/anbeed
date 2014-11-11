<?php

/**
 * ProductoUnimed form base class.
 *
 * @method ProductoUnimed getObject() Returns the current form's model object
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProductoUnimedForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'codigo_producto_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CodigoProducto'), 'add_empty' => false)),
      'numero_registro'        => new sfWidgetFormInputText(),
      'fecha_registro'         => new sfWidgetFormDate(),
      'notificacion'           => new sfWidgetFormInputText(),
      'nombre_comercial'       => new sfWidgetFormInputText(),
      'nombre_generico'        => new sfWidgetFormInputText(),
      'forma_farmaceutica'     => new sfWidgetFormInputText(),
      'concentracion'          => new sfWidgetFormInputText(),
      'laboratorio_fabricante' => new sfWidgetFormInputText(),
      'pais_origen'            => new sfWidgetFormInputText(),
      'created_at'             => new sfWidgetFormDateTime(),
      'updated_at'             => new sfWidgetFormDateTime(),
      'created_by'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'codigo_producto_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CodigoProducto'))),
      'numero_registro'        => new sfValidatorInteger(),
      'fecha_registro'         => new sfValidatorDate(),
      'notificacion'           => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'nombre_comercial'       => new sfValidatorString(array('max_length' => 255)),
      'nombre_generico'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'forma_farmaceutica'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'concentracion'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'laboratorio_fabricante' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'pais_origen'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'             => new sfValidatorDateTime(),
      'updated_at'             => new sfValidatorDateTime(),
      'created_by'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'required' => false)),
      'updated_by'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('producto_unimed[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProductoUnimed';
  }

}

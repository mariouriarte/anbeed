<?php

/**
 * ProductoWeb form base class.
 *
 * @method ProductoWeb getObject() Returns the current form's model object
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProductoWebForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'categoria_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Categoria'), 'add_empty' => false)),
      'linea_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Linea'), 'add_empty' => false)),
      'pais_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pais'), 'add_empty' => false)),
      'nombre'          => new sfWidgetFormInputText(),
      'caracteristicas' => new sfWidgetFormTextarea(),
      'precio'          => new sfWidgetFormInputText(),
      'foto'            => new sfWidgetFormInputText(),
      'visto'           => new sfWidgetFormInputText(),
      'created_at'      => new sfWidgetFormDateTime(),
      'updated_at'      => new sfWidgetFormDateTime(),
      'created_by'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'categoria_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Categoria'))),
      'linea_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Linea'))),
      'pais_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Pais'))),
      'nombre'          => new sfValidatorString(array('max_length' => 50)),
      'caracteristicas' => new sfValidatorString(array('max_length' => 2000)),
      'precio'          => new sfValidatorNumber(),
      'foto'            => new sfValidatorString(array('max_length' => 50)),
      'visto'           => new sfValidatorInteger(array('required' => false)),
      'created_at'      => new sfValidatorDateTime(),
      'updated_at'      => new sfValidatorDateTime(),
      'created_by'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'required' => false)),
      'updated_by'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('producto_web[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProductoWeb';
  }

}

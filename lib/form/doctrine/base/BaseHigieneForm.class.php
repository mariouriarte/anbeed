<?php

/**
 * Higiene form base class.
 *
 * @method Higiene getObject() Returns the current form's model object
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseHigieneForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                        => new sfWidgetFormInputHidden(),
      'empresa_id'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empresa'), 'add_empty' => false)),
      'laboratorio_fabricante_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('LaboratorioFabricante'), 'add_empty' => false)),
      'grupo_higiene'             => new sfWidgetFormInputText(),
      'marca_id'                  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Marca'), 'add_empty' => false)),
      'pais_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pais'), 'add_empty' => true)),
      'nombre'                    => new sfWidgetFormInputText(),
      'nombre_detalle'            => new sfWidgetFormInputText(),
      'variedades'                => new sfWidgetFormTextarea(),
      'codigo_nso'                => new sfWidgetFormInputText(),
      'vigencia_nso'              => new sfWidgetFormInputText(),
      'expediente'                => new sfWidgetFormInputText(),
      'registro_sanitario'        => new sfWidgetFormInputText(),
      'created_at'                => new sfWidgetFormDateTime(),
      'updated_at'                => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'empresa_id'                => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Empresa'))),
      'laboratorio_fabricante_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('LaboratorioFabricante'))),
      'grupo_higiene'             => new sfValidatorString(array('max_length' => 255)),
      'marca_id'                  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Marca'))),
      'pais_id'                   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Pais'), 'required' => false)),
      'nombre'                    => new sfValidatorString(array('max_length' => 255)),
      'nombre_detalle'            => new sfValidatorString(array('max_length' => 5)),
      'variedades'                => new sfValidatorString(array('max_length' => 2000, 'required' => false)),
      'codigo_nso'                => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'vigencia_nso'              => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'expediente'                => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'registro_sanitario'        => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'created_at'                => new sfValidatorDateTime(),
      'updated_at'                => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('higiene[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Higiene';
  }

}

<?php

/**
 * Cosmetico form base class.
 *
 * @method Cosmetico getObject() Returns the current form's model object
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCosmeticoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                        => new sfWidgetFormInputHidden(),
      'empresa_id'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empresa'), 'add_empty' => false)),
      'laboratorio_fabricante_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('LaboratorioFabricante'), 'add_empty' => false)),
      'forma_cosmetica_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('FormaCosmetica'), 'add_empty' => false)),
      'grupo_cosmetico_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('GrupoCosmetico'), 'add_empty' => false)),
      'marca_id'                  => new sfWidgetFormInputText(),
      'pais_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pais'), 'add_empty' => true)),
      'nombre'                    => new sfWidgetFormInputText(),
      'codigo_nso'                => new sfWidgetFormInputText(),
      'vigencia_nso'              => new sfWidgetFormInputText(),
      'expediente'                => new sfWidgetFormInputText(),
      'created_at'                => new sfWidgetFormDateTime(),
      'updated_at'                => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'empresa_id'                => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Empresa'))),
      'laboratorio_fabricante_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('LaboratorioFabricante'))),
      'forma_cosmetica_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('FormaCosmetica'))),
      'grupo_cosmetico_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('GrupoCosmetico'))),
      'marca_id'                  => new sfValidatorInteger(),
      'pais_id'                   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Pais'), 'required' => false)),
      'nombre'                    => new sfValidatorString(array('max_length' => 255)),
      'codigo_nso'                => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'vigencia_nso'              => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'expediente'                => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'created_at'                => new sfValidatorDateTime(),
      'updated_at'                => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('cosmetico[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cosmetico';
  }

}

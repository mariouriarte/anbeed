<?php

/**
 * Formulario706 form base class.
 *
 * @method Formulario706 getObject() Returns the current form's model object
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFormulario706Form extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                         => new sfWidgetFormInputHidden(),
      'fecha'                      => new sfWidgetFormDate(),
      'higiene_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Higiene'), 'add_empty' => false)),
      'vigencia'                   => new sfWidgetFormInputText(),
      'fecha_inicio_vigencia'      => new sfWidgetFormDate(),
      'numero_ruta'                => new sfWidgetFormInputText(),
      'tipo_tramite_formulario_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoTramiteFormulario'), 'add_empty' => false)),
      'datos'                      => new sfWidgetFormInputText(),
      'datos_titular'              => new sfWidgetFormInputText(),
      'maquila_embasador'          => new sfWidgetFormInputText(),
      'maquila_empacador'          => new sfWidgetFormInputText(),
      'maquila_acondicionador'     => new sfWidgetFormInputText(),
      'maquila_fabricado_para'     => new sfWidgetFormInputText(),
      'created_at'                 => new sfWidgetFormDateTime(),
      'updated_at'                 => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'fecha'                      => new sfValidatorDate(array('required' => false)),
      'higiene_id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Higiene'))),
      'vigencia'                   => new sfValidatorInteger(array('required' => false)),
      'fecha_inicio_vigencia'      => new sfValidatorDate(array('required' => false)),
      'numero_ruta'                => new sfValidatorInteger(array('required' => false)),
      'tipo_tramite_formulario_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TipoTramiteFormulario'))),
      'datos'                      => new sfValidatorString(array('max_length' => 150)),
      'datos_titular'              => new sfValidatorString(array('max_length' => 150)),
      'maquila_embasador'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'maquila_empacador'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'maquila_acondicionador'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'maquila_fabricado_para'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'                 => new sfValidatorDateTime(),
      'updated_at'                 => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('formulario706[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Formulario706';
  }

}

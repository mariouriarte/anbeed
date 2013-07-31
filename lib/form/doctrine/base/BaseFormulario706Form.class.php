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
      'formulario_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Formulario'), 'add_empty' => false)),
      'fecha'                      => new sfWidgetFormDate(),
      'higiene_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Higiene'), 'add_empty' => false)),
      'vigencia'                   => new sfWidgetFormInputText(),
      'fecha_inicio_vigencia'      => new sfWidgetFormDate(),
      'numero_ruta'                => new sfWidgetFormInputText(),
      'tipo_tramite_formulario_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoTramiteFormulario'), 'add_empty' => false)),
      'datos'                      => new sfWidgetFormInputText(),
      'datos_titular'              => new sfWidgetFormInputText(),
      'rescom_nombre'              => new sfWidgetFormInputText(),
      'rescom_direccion'           => new sfWidgetFormInputText(),
      'rescom_ciudad_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Ciudad'), 'add_empty' => true)),
      'rescom_telefono'            => new sfWidgetFormInputText(),
      'rescom_fax'                 => new sfWidgetFormInputText(),
      'rescom_email'               => new sfWidgetFormInputText(),
      'maquila_tipo'               => new sfWidgetFormInputText(),
      'maquila'                    => new sfWidgetFormInputText(),
      'maquila_fabricado'          => new sfWidgetFormInputText(),
      'created_at'                 => new sfWidgetFormDateTime(),
      'updated_at'                 => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'formulario_id'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Formulario'))),
      'fecha'                      => new sfValidatorDate(array('required' => false)),
      'higiene_id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Higiene'))),
      'vigencia'                   => new sfValidatorInteger(array('required' => false)),
      'fecha_inicio_vigencia'      => new sfValidatorDate(array('required' => false)),
      'numero_ruta'                => new sfValidatorInteger(array('required' => false)),
      'tipo_tramite_formulario_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TipoTramiteFormulario'))),
      'datos'                      => new sfValidatorString(array('max_length' => 150)),
      'datos_titular'              => new sfValidatorString(array('max_length' => 150)),
      'rescom_nombre'              => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'rescom_direccion'           => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'rescom_ciudad_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Ciudad'), 'required' => false)),
      'rescom_telefono'            => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'rescom_fax'                 => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'rescom_email'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'maquila_tipo'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'maquila'                    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'maquila_fabricado'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
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

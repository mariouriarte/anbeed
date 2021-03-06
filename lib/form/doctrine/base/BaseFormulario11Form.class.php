<?php

/**
 * Formulario11 form base class.
 *
 * @method Formulario11 getObject() Returns the current form's model object
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFormulario11Form extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                    => new sfWidgetFormInputHidden(),
      'formulario_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Formulario'), 'add_empty' => true)),
      'numero_ruta'           => new sfWidgetFormInputText(),
      'fecha'                 => new sfWidgetFormDate(),
      'vigencia'              => new sfWidgetFormInputText(),
      'fecha_inicio_vigencia' => new sfWidgetFormDate(),
      'empresa_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empresa'), 'add_empty' => false)),
      'tipo_despacho_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoDespacho'), 'add_empty' => false)),
      'otro'                  => new sfWidgetFormInputText(),
      'sustancias_quimicas'   => new sfWidgetFormInputCheckbox(),
      'licencia_previa'       => new sfWidgetFormInputCheckbox(),
      'licencia_resolucion'   => new sfWidgetFormInputText(),
      'licencia_fecha'        => new sfWidgetFormDate(),
      'numero_item'           => new sfWidgetFormInputText(),
      'foja'                  => new sfWidgetFormInputText(),
      'pais_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pais'), 'add_empty' => false)),
      'factura'               => new sfWidgetFormInputText(),
      'factura_fecha'         => new sfWidgetFormDate(),
      'por_tratarse'          => new sfWidgetFormInputText(),
      'para'                  => new sfWidgetFormInputText(),
      'created_at'            => new sfWidgetFormDateTime(),
      'updated_at'            => new sfWidgetFormDateTime(),
      'created_by'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'formulario_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Formulario'), 'required' => false)),
      'numero_ruta'           => new sfValidatorInteger(array('required' => false)),
      'fecha'                 => new sfValidatorDate(array('required' => false)),
      'vigencia'              => new sfValidatorInteger(array('required' => false)),
      'fecha_inicio_vigencia' => new sfValidatorDate(array('required' => false)),
      'empresa_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Empresa'))),
      'tipo_despacho_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TipoDespacho'))),
      'otro'                  => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'sustancias_quimicas'   => new sfValidatorBoolean(),
      'licencia_previa'       => new sfValidatorBoolean(),
      'licencia_resolucion'   => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'licencia_fecha'        => new sfValidatorDate(array('required' => false)),
      'numero_item'           => new sfValidatorInteger(array('required' => false)),
      'foja'                  => new sfValidatorInteger(array('required' => false)),
      'pais_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Pais'))),
      'factura'               => new sfValidatorString(array('max_length' => 150)),
      'factura_fecha'         => new sfValidatorDate(),
      'por_tratarse'          => new sfValidatorString(array('max_length' => 150)),
      'para'                  => new sfValidatorString(array('max_length' => 150)),
      'created_at'            => new sfValidatorDateTime(),
      'updated_at'            => new sfValidatorDateTime(),
      'created_by'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'required' => false)),
      'updated_by'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('formulario11[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Formulario11';
  }

}

<?php

/**
 * EmisionCorrespondencia form base class.
 *
 * @method EmisionCorrespondencia getObject() Returns the current form's model object
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEmisionCorrespondenciaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                    => new sfWidgetFormInputHidden(),
      'tipo_documento_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoDocumento'), 'add_empty' => false)),
      'empresa_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empresa'), 'add_empty' => false)),
      'emisor_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Emisor'), 'add_empty' => false)),
      'factura'               => new sfWidgetFormInputText(),
      'factura_fecha'         => new sfWidgetFormDate(),
      'monto_item'            => new sfWidgetFormInputText(),
      'nombre'                => new sfWidgetFormTextarea(),
      'numero'                => new sfWidgetFormInputText(),
      'codigo_producto_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CodigoProducto'), 'add_empty' => true)),
      'forma_cosmetica_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('FormaCosmetica'), 'add_empty' => true)),
      'fecha_inicio_vigencia' => new sfWidgetFormDate(),
      'vigencia'              => new sfWidgetFormInputText(),
      'fecha_envio'           => new sfWidgetFormDate(),
      'numero_guia'           => new sfWidgetFormInputText(),
      'created_at'            => new sfWidgetFormDateTime(),
      'updated_at'            => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'tipo_documento_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TipoDocumento'))),
      'empresa_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Empresa'))),
      'emisor_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Emisor'))),
      'factura'               => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'factura_fecha'         => new sfValidatorDate(array('required' => false)),
      'monto_item'            => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'nombre'                => new sfValidatorString(array('max_length' => 500)),
      'numero'                => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'codigo_producto_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CodigoProducto'), 'required' => false)),
      'forma_cosmetica_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('FormaCosmetica'), 'required' => false)),
      'fecha_inicio_vigencia' => new sfValidatorDate(array('required' => false)),
      'vigencia'              => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'fecha_envio'           => new sfValidatorDate(),
      'numero_guia'           => new sfValidatorString(array('max_length' => 150)),
      'created_at'            => new sfValidatorDateTime(),
      'updated_at'            => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('emision_correspondencia[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EmisionCorrespondencia';
  }

}

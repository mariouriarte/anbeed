<?php

/**
 * EmisionCorrespondencia filter form base class.
 *
 * @package    anbeed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseEmisionCorrespondenciaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tipo_documento_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoDocumento'), 'add_empty' => true)),
      'empresa_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empresa'), 'add_empty' => true)),
      'otro_destino'          => new sfWidgetFormFilterInput(),
      'emisor_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Emisor'), 'add_empty' => true)),
      'factura'               => new sfWidgetFormFilterInput(),
      'factura_fecha'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'monto_item'            => new sfWidgetFormFilterInput(),
      'nombre'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numero'                => new sfWidgetFormFilterInput(),
      'codigo_producto_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CodigoProducto'), 'add_empty' => true)),
      'forma_cosmetica_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('FormaCosmetica'), 'add_empty' => true)),
      'fecha_inicio_vigencia' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'vigencia'              => new sfWidgetFormFilterInput(),
      'fecha_envio'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'numero_guia'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'created_by'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'tipo_documento_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TipoDocumento'), 'column' => 'id')),
      'empresa_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Empresa'), 'column' => 'id')),
      'otro_destino'          => new sfValidatorPass(array('required' => false)),
      'emisor_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Emisor'), 'column' => 'id')),
      'factura'               => new sfValidatorPass(array('required' => false)),
      'factura_fecha'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'monto_item'            => new sfValidatorPass(array('required' => false)),
      'nombre'                => new sfValidatorPass(array('required' => false)),
      'numero'                => new sfValidatorPass(array('required' => false)),
      'codigo_producto_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('CodigoProducto'), 'column' => 'id')),
      'forma_cosmetica_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('FormaCosmetica'), 'column' => 'id')),
      'fecha_inicio_vigencia' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'vigencia'              => new sfValidatorPass(array('required' => false)),
      'fecha_envio'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'numero_guia'           => new sfValidatorPass(array('required' => false)),
      'created_at'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'created_by'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Creator'), 'column' => 'id')),
      'updated_by'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Updator'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('emision_correspondencia_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EmisionCorrespondencia';
  }

  public function getFields()
  {
    return array(
      'id'                    => 'Number',
      'tipo_documento_id'     => 'ForeignKey',
      'empresa_id'            => 'ForeignKey',
      'otro_destino'          => 'Text',
      'emisor_id'             => 'ForeignKey',
      'factura'               => 'Text',
      'factura_fecha'         => 'Date',
      'monto_item'            => 'Text',
      'nombre'                => 'Text',
      'numero'                => 'Text',
      'codigo_producto_id'    => 'ForeignKey',
      'forma_cosmetica_id'    => 'ForeignKey',
      'fecha_inicio_vigencia' => 'Date',
      'vigencia'              => 'Text',
      'fecha_envio'           => 'Date',
      'numero_guia'           => 'Text',
      'created_at'            => 'Date',
      'updated_at'            => 'Date',
      'created_by'            => 'ForeignKey',
      'updated_by'            => 'ForeignKey',
    );
  }
}

<?php

/**
 * ProductoUnimed filter form base class.
 *
 * @package    anbeed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseProductoUnimedFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo_producto_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CodigoProducto'), 'add_empty' => true)),
      'numero_registro'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_registro'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'notificacion'           => new sfWidgetFormFilterInput(),
      'nombre_comercial'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre_generico'        => new sfWidgetFormFilterInput(),
      'forma_farmaceutica'     => new sfWidgetFormFilterInput(),
      'concentracion'          => new sfWidgetFormFilterInput(),
      'laboratorio_fabricante' => new sfWidgetFormFilterInput(),
      'pais_origen'            => new sfWidgetFormFilterInput(),
      'created_at'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'created_by'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'codigo_producto_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('CodigoProducto'), 'column' => 'id')),
      'numero_registro'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha_registro'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'notificacion'           => new sfValidatorPass(array('required' => false)),
      'nombre_comercial'       => new sfValidatorPass(array('required' => false)),
      'nombre_generico'        => new sfValidatorPass(array('required' => false)),
      'forma_farmaceutica'     => new sfValidatorPass(array('required' => false)),
      'concentracion'          => new sfValidatorPass(array('required' => false)),
      'laboratorio_fabricante' => new sfValidatorPass(array('required' => false)),
      'pais_origen'            => new sfValidatorPass(array('required' => false)),
      'created_at'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'created_by'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Creator'), 'column' => 'id')),
      'updated_by'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Updator'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('producto_unimed_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProductoUnimed';
  }

  public function getFields()
  {
    return array(
      'id'                     => 'Number',
      'codigo_producto_id'     => 'ForeignKey',
      'numero_registro'        => 'Number',
      'fecha_registro'         => 'Date',
      'notificacion'           => 'Text',
      'nombre_comercial'       => 'Text',
      'nombre_generico'        => 'Text',
      'forma_farmaceutica'     => 'Text',
      'concentracion'          => 'Text',
      'laboratorio_fabricante' => 'Text',
      'pais_origen'            => 'Text',
      'created_at'             => 'Date',
      'updated_at'             => 'Date',
      'created_by'             => 'ForeignKey',
      'updated_by'             => 'ForeignKey',
    );
  }
}

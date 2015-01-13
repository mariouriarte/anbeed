<?php

/**
 * Item filter form base class.
 *
 * @package    anbeed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseItemFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'formulario11_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Formulario11'), 'add_empty' => true)),
      'cantidad'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'producto_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Producto'), 'add_empty' => true)),
      'producto_unimed_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ProductoUnimed'), 'add_empty' => true)),
      'nombre'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'num_lote'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'num_registro_libre' => new sfWidgetFormFilterInput(),
      'fecha_vencimiento'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'tipo_item'          => new sfWidgetFormChoice(array('choices' => array('' => '', 'ANBEED' => 'ANBEED', 'UNIMED' => 'UNIMED', 'LIBRE' => 'LIBRE'))),
      'created_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'created_by'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'formulario11_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Formulario11'), 'column' => 'id')),
      'cantidad'           => new sfValidatorPass(array('required' => false)),
      'producto_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Producto'), 'column' => 'id')),
      'producto_unimed_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ProductoUnimed'), 'column' => 'id')),
      'nombre'             => new sfValidatorPass(array('required' => false)),
      'num_lote'           => new sfValidatorPass(array('required' => false)),
      'num_registro_libre' => new sfValidatorPass(array('required' => false)),
      'fecha_vencimiento'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'tipo_item'          => new sfValidatorChoice(array('required' => false, 'choices' => array('ANBEED' => 'ANBEED', 'UNIMED' => 'UNIMED', 'LIBRE' => 'LIBRE'))),
      'created_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'created_by'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Creator'), 'column' => 'id')),
      'updated_by'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Updator'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('item_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Item';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'formulario11_id'    => 'ForeignKey',
      'cantidad'           => 'Text',
      'producto_id'        => 'ForeignKey',
      'producto_unimed_id' => 'ForeignKey',
      'nombre'             => 'Text',
      'num_lote'           => 'Text',
      'num_registro_libre' => 'Text',
      'fecha_vencimiento'  => 'Date',
      'tipo_item'          => 'Enum',
      'created_at'         => 'Date',
      'updated_at'         => 'Date',
      'created_by'         => 'ForeignKey',
      'updated_by'         => 'ForeignKey',
    );
  }
}

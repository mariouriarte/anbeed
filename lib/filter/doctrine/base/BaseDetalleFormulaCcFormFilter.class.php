<?php

/**
 * DetalleFormulaCc filter form base class.
 *
 * @package    anbeed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDetalleFormulaCcFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ingrediente_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Ingrediente'), 'add_empty' => true)),
      'cantidad'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'unidad'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'ingrediente_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Ingrediente'), 'column' => 'id')),
      'cantidad'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'unidad'         => new sfValidatorPass(array('required' => false)),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('detalle_formula_cc_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DetalleFormulaCc';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'ingrediente_id' => 'ForeignKey',
      'cantidad'       => 'Number',
      'unidad'         => 'Text',
      'created_at'     => 'Date',
      'updated_at'     => 'Date',
    );
  }
}

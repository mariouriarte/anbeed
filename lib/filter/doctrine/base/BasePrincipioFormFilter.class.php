<?php

/**
 * Principio filter form base class.
 *
 * @package    anbeed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePrincipioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'formula_cc_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('FormulaCc'), 'add_empty' => true)),
      'ingrediente_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Ingrediente'), 'add_empty' => true)),
      'cantidad'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'unidad'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'otro'           => new sfWidgetFormFilterInput(),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'created_by'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'formula_cc_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('FormulaCc'), 'column' => 'id')),
      'ingrediente_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Ingrediente'), 'column' => 'id')),
      'cantidad'       => new sfValidatorPass(array('required' => false)),
      'unidad'         => new sfValidatorPass(array('required' => false)),
      'otro'           => new sfValidatorPass(array('required' => false)),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'created_by'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Creator'), 'column' => 'id')),
      'updated_by'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Updator'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('principio_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Principio';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'formula_cc_id'  => 'ForeignKey',
      'ingrediente_id' => 'ForeignKey',
      'cantidad'       => 'Text',
      'unidad'         => 'Text',
      'otro'           => 'Text',
      'created_at'     => 'Date',
      'updated_at'     => 'Date',
      'created_by'     => 'ForeignKey',
      'updated_by'     => 'ForeignKey',
    );
  }
}

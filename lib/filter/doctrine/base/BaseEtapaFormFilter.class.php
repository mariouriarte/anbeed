<?php

/**
 * Etapa filter form base class.
 *
 * @package    anbeed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseEtapaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'formulario5_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Formulario5'), 'add_empty' => true)),
      'formulario27_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Formulario27'), 'add_empty' => true)),
      'formulario516_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Formulario516'), 'add_empty' => true)),
      'formulario706_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Formulario706'), 'add_empty' => true)),
      'tipo_etapa_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoEtapa'), 'add_empty' => true)),
      'fecha'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'observacion'      => new sfWidgetFormFilterInput(),
      'created_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'formulario5_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Formulario5'), 'column' => 'id')),
      'formulario27_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Formulario27'), 'column' => 'id')),
      'formulario516_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Formulario516'), 'column' => 'id')),
      'formulario706_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Formulario706'), 'column' => 'id')),
      'tipo_etapa_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TipoEtapa'), 'column' => 'id')),
      'fecha'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'observacion'      => new sfValidatorPass(array('required' => false)),
      'created_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('etapa_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Etapa';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'formulario5_id'   => 'ForeignKey',
      'formulario27_id'  => 'ForeignKey',
      'formulario516_id' => 'ForeignKey',
      'formulario706_id' => 'ForeignKey',
      'tipo_etapa_id'    => 'ForeignKey',
      'fecha'            => 'Date',
      'observacion'      => 'Text',
      'created_at'       => 'Date',
      'updated_at'       => 'Date',
    );
  }
}

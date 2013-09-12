<?php

/**
 * Formulario5 filter form base class.
 *
 * @package    anbeed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseFormulario5FormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'formulario_id'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Formulario'), 'add_empty' => true)),
      'fecha'                        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'vigencia'                     => new sfWidgetFormFilterInput(),
      'fecha_inicio_vigencia'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'numero_ruta'                  => new sfWidgetFormFilterInput(),
      'tipo_tramite_formulario5_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoTramiteFormulario5'), 'add_empty' => true)),
      'tipo_producto_formulario5_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoProductoFormulario5'), 'add_empty' => true)),
      'origen_formulario_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('OrigenFormulario'), 'add_empty' => true)),
      'medicamento_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Medicamento'), 'add_empty' => true)),
      'created_at'                   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'created_by'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'formulario_id'                => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Formulario'), 'column' => 'id')),
      'fecha'                        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'vigencia'                     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha_inicio_vigencia'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'numero_ruta'                  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tipo_tramite_formulario5_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TipoTramiteFormulario5'), 'column' => 'id')),
      'tipo_producto_formulario5_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TipoProductoFormulario5'), 'column' => 'id')),
      'origen_formulario_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('OrigenFormulario'), 'column' => 'id')),
      'medicamento_id'               => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Medicamento'), 'column' => 'id')),
      'created_at'                   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'created_by'                   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Creator'), 'column' => 'id')),
      'updated_by'                   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Updator'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('formulario5_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Formulario5';
  }

  public function getFields()
  {
    return array(
      'id'                           => 'Number',
      'formulario_id'                => 'ForeignKey',
      'fecha'                        => 'Date',
      'vigencia'                     => 'Number',
      'fecha_inicio_vigencia'        => 'Date',
      'numero_ruta'                  => 'Number',
      'tipo_tramite_formulario5_id'  => 'ForeignKey',
      'tipo_producto_formulario5_id' => 'ForeignKey',
      'origen_formulario_id'         => 'ForeignKey',
      'medicamento_id'               => 'ForeignKey',
      'created_at'                   => 'Date',
      'updated_at'                   => 'Date',
      'created_by'                   => 'ForeignKey',
      'updated_by'                   => 'ForeignKey',
    );
  }
}

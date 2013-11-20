<?php

/**
 * Formulario7 filter form base class.
 *
 * @package    anbeed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseFormulario7FormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'formulario_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Formulario'), 'add_empty' => true)),
      'fecha'                 => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'vigencia'              => new sfWidgetFormFilterInput(),
      'fecha_inicio_vigencia' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'referencia_aval'       => new sfWidgetFormFilterInput(),
      'producto_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Producto'), 'add_empty' => true)),
      'aval_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Aval'), 'add_empty' => true)),
      'forma_farmaceutica_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('FormaFarmaceutica'), 'add_empty' => true)),
      'concentracion'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_calificacion_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoCalificacion'), 'add_empty' => true)),
      'via_administracion_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ViaAdministracion'), 'add_empty' => true)),
      'accion_terapeutica'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dosis'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'indicaciones'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'contraindicaciones'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precauciones'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'efectos_secundarios'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'observaciones'         => new sfWidgetFormFilterInput(),
      'comision'              => new sfWidgetFormFilterInput(),
      'calificacion'          => new sfWidgetFormFilterInput(),
      'created_at'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'created_by'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'formulario_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Formulario'), 'column' => 'id')),
      'fecha'                 => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'vigencia'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha_inicio_vigencia' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'referencia_aval'       => new sfValidatorPass(array('required' => false)),
      'producto_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Producto'), 'column' => 'id')),
      'aval_id'               => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Aval'), 'column' => 'id')),
      'forma_farmaceutica_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('FormaFarmaceutica'), 'column' => 'id')),
      'concentracion'         => new sfValidatorPass(array('required' => false)),
      'tipo_calificacion_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TipoCalificacion'), 'column' => 'id')),
      'via_administracion_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ViaAdministracion'), 'column' => 'id')),
      'accion_terapeutica'    => new sfValidatorPass(array('required' => false)),
      'dosis'                 => new sfValidatorPass(array('required' => false)),
      'indicaciones'          => new sfValidatorPass(array('required' => false)),
      'contraindicaciones'    => new sfValidatorPass(array('required' => false)),
      'precauciones'          => new sfValidatorPass(array('required' => false)),
      'efectos_secundarios'   => new sfValidatorPass(array('required' => false)),
      'observaciones'         => new sfValidatorPass(array('required' => false)),
      'comision'              => new sfValidatorPass(array('required' => false)),
      'calificacion'          => new sfValidatorPass(array('required' => false)),
      'created_at'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'created_by'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Creator'), 'column' => 'id')),
      'updated_by'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Updator'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('formulario7_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Formulario7';
  }

  public function getFields()
  {
    return array(
      'id'                    => 'Number',
      'formulario_id'         => 'ForeignKey',
      'fecha'                 => 'Date',
      'vigencia'              => 'Number',
      'fecha_inicio_vigencia' => 'Date',
      'referencia_aval'       => 'Text',
      'producto_id'           => 'ForeignKey',
      'aval_id'               => 'ForeignKey',
      'forma_farmaceutica_id' => 'ForeignKey',
      'concentracion'         => 'Text',
      'tipo_calificacion_id'  => 'ForeignKey',
      'via_administracion_id' => 'ForeignKey',
      'accion_terapeutica'    => 'Text',
      'dosis'                 => 'Text',
      'indicaciones'          => 'Text',
      'contraindicaciones'    => 'Text',
      'precauciones'          => 'Text',
      'efectos_secundarios'   => 'Text',
      'observaciones'         => 'Text',
      'comision'              => 'Text',
      'calificacion'          => 'Text',
      'created_at'            => 'Date',
      'updated_at'            => 'Date',
      'created_by'            => 'ForeignKey',
      'updated_by'            => 'ForeignKey',
    );
  }
}

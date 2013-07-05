<?php

/**
 * Medicamento filter form base class.
 *
 * @package    anbeed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMedicamentoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'producto_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Producto'), 'add_empty' => true)),
      'forma_farmaceutica_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('FormaFarmaceutica'), 'add_empty' => true)),
      'via_administracion_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ViaAdministracion'), 'add_empty' => true)),
      'tipo_venta_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoVenta'), 'add_empty' => true)),
      'formula_cc_id'         => new sfWidgetFormFilterInput(),
      'nombre_comercial'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'concentracion'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'accion_terapeutica'    => new sfWidgetFormFilterInput(),
      'conservacion'          => new sfWidgetFormFilterInput(),
      'periodo_validez'       => new sfWidgetFormFilterInput(),
      'especificacion_envase' => new sfWidgetFormFilterInput(),
      'aval'                  => new sfWidgetFormFilterInput(),
      'certificado_control'   => new sfWidgetFormFilterInput(),
      'created_at'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'producto_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Producto'), 'column' => 'id')),
      'forma_farmaceutica_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('FormaFarmaceutica'), 'column' => 'id')),
      'via_administracion_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ViaAdministracion'), 'column' => 'id')),
      'tipo_venta_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TipoVenta'), 'column' => 'id')),
      'formula_cc_id'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nombre_comercial'      => new sfValidatorPass(array('required' => false)),
      'concentracion'         => new sfValidatorPass(array('required' => false)),
      'accion_terapeutica'    => new sfValidatorPass(array('required' => false)),
      'conservacion'          => new sfValidatorPass(array('required' => false)),
      'periodo_validez'       => new sfValidatorPass(array('required' => false)),
      'especificacion_envase' => new sfValidatorPass(array('required' => false)),
      'aval'                  => new sfValidatorPass(array('required' => false)),
      'certificado_control'   => new sfValidatorPass(array('required' => false)),
      'created_at'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('medicamento_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Medicamento';
  }

  public function getFields()
  {
    return array(
      'id'                    => 'Number',
      'producto_id'           => 'ForeignKey',
      'forma_farmaceutica_id' => 'ForeignKey',
      'via_administracion_id' => 'ForeignKey',
      'tipo_venta_id'         => 'ForeignKey',
      'formula_cc_id'         => 'Number',
      'nombre_comercial'      => 'Text',
      'concentracion'         => 'Text',
      'accion_terapeutica'    => 'Text',
      'conservacion'          => 'Text',
      'periodo_validez'       => 'Text',
      'especificacion_envase' => 'Text',
      'aval'                  => 'Text',
      'certificado_control'   => 'Text',
      'created_at'            => 'Date',
      'updated_at'            => 'Date',
    );
  }
}

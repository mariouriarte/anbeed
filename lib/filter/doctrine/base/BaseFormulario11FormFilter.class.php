<?php

/**
 * Formulario11 filter form base class.
 *
 * @package    anbeed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseFormulario11FormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'formulario_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Formulario'), 'add_empty' => true)),
      'numero_ruta'           => new sfWidgetFormFilterInput(),
      'fecha'                 => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'vigencia'              => new sfWidgetFormFilterInput(),
      'fecha_inicio_vigencia' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'empresa_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empresa'), 'add_empty' => true)),
      'tipo_despacho_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoDespacho'), 'add_empty' => true)),
      'otro'                  => new sfWidgetFormFilterInput(),
      'sustancias_quimicas'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'licencia_previa'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'licencia_resolucion'   => new sfWidgetFormFilterInput(),
      'licencia_fecha'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'numero_item'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'foja'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pais_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pais'), 'add_empty' => true)),
      'factura'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'factura_fecha'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'por_tratarse'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'para'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'created_by'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'formulario_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Formulario'), 'column' => 'id')),
      'numero_ruta'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha'                 => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'vigencia'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha_inicio_vigencia' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'empresa_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Empresa'), 'column' => 'id')),
      'tipo_despacho_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TipoDespacho'), 'column' => 'id')),
      'otro'                  => new sfValidatorPass(array('required' => false)),
      'sustancias_quimicas'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'licencia_previa'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'licencia_resolucion'   => new sfValidatorPass(array('required' => false)),
      'licencia_fecha'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'numero_item'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'foja'                  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'pais_id'               => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Pais'), 'column' => 'id')),
      'factura'               => new sfValidatorPass(array('required' => false)),
      'factura_fecha'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'por_tratarse'          => new sfValidatorPass(array('required' => false)),
      'para'                  => new sfValidatorPass(array('required' => false)),
      'created_at'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'created_by'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Creator'), 'column' => 'id')),
      'updated_by'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Updator'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('formulario11_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Formulario11';
  }

  public function getFields()
  {
    return array(
      'id'                    => 'Number',
      'formulario_id'         => 'ForeignKey',
      'numero_ruta'           => 'Number',
      'fecha'                 => 'Date',
      'vigencia'              => 'Number',
      'fecha_inicio_vigencia' => 'Date',
      'empresa_id'            => 'ForeignKey',
      'tipo_despacho_id'      => 'ForeignKey',
      'otro'                  => 'Text',
      'sustancias_quimicas'   => 'Boolean',
      'licencia_previa'       => 'Boolean',
      'licencia_resolucion'   => 'Text',
      'licencia_fecha'        => 'Date',
      'numero_item'           => 'Number',
      'foja'                  => 'Number',
      'pais_id'               => 'ForeignKey',
      'factura'               => 'Text',
      'factura_fecha'         => 'Date',
      'por_tratarse'          => 'Text',
      'para'                  => 'Text',
      'created_at'            => 'Date',
      'updated_at'            => 'Date',
      'created_by'            => 'ForeignKey',
      'updated_by'            => 'ForeignKey',
    );
  }
}

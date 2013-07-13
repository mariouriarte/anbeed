<?php

/**
 * Empresa filter form base class.
 *
 * @package    anbeed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseEmpresaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'representante_legal_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('RepresentanteLegal'), 'add_empty' => true)),
      'regente_farmaceutico_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('RegenteFarmaceutico'), 'add_empty' => true)),
      'razon_social'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_registro'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'num_resolucion'          => new sfWidgetFormFilterInput(),
      'fecha_resolucion'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'fax'                     => new sfWidgetFormFilterInput(),
      'direccion'               => new sfWidgetFormFilterInput(),
      'casilla'                 => new sfWidgetFormFilterInput(),
      'telefono1'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telefono2'               => new sfWidgetFormFilterInput(),
      'email'                   => new sfWidgetFormFilterInput(),
      'actividad'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'registro_camara'         => new sfWidgetFormFilterInput(),
      'fundempresa'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nit'                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'licencia_funcionamiento' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'is_active'               => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'representante_legal_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('RepresentanteLegal'), 'column' => 'id')),
      'regente_farmaceutico_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('RegenteFarmaceutico'), 'column' => 'id')),
      'razon_social'            => new sfValidatorPass(array('required' => false)),
      'fecha_registro'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'num_resolucion'          => new sfValidatorPass(array('required' => false)),
      'fecha_resolucion'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'fax'                     => new sfValidatorPass(array('required' => false)),
      'direccion'               => new sfValidatorPass(array('required' => false)),
      'casilla'                 => new sfValidatorPass(array('required' => false)),
      'telefono1'               => new sfValidatorPass(array('required' => false)),
      'telefono2'               => new sfValidatorPass(array('required' => false)),
      'email'                   => new sfValidatorPass(array('required' => false)),
      'actividad'               => new sfValidatorPass(array('required' => false)),
      'registro_camara'         => new sfValidatorPass(array('required' => false)),
      'fundempresa'             => new sfValidatorPass(array('required' => false)),
      'nit'                     => new sfValidatorPass(array('required' => false)),
      'licencia_funcionamiento' => new sfValidatorPass(array('required' => false)),
      'is_active'               => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('empresa_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Empresa';
  }

  public function getFields()
  {
    return array(
      'id'                      => 'Number',
      'representante_legal_id'  => 'ForeignKey',
      'regente_farmaceutico_id' => 'ForeignKey',
      'razon_social'            => 'Text',
      'fecha_registro'          => 'Date',
      'num_resolucion'          => 'Text',
      'fecha_resolucion'        => 'Date',
      'fax'                     => 'Text',
      'direccion'               => 'Text',
      'casilla'                 => 'Text',
      'telefono1'               => 'Text',
      'telefono2'               => 'Text',
      'email'                   => 'Text',
      'actividad'               => 'Text',
      'registro_camara'         => 'Text',
      'fundempresa'             => 'Text',
      'nit'                     => 'Text',
      'licencia_funcionamiento' => 'Text',
      'is_active'               => 'Boolean',
      'created_at'              => 'Date',
      'updated_at'              => 'Date',
    );
  }
}

<?php

/**
 * Aval filter form base class.
 *
 * @package    anbeed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAvalFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo'              => new sfWidgetFormFilterInput(),
      'nombre_generico'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'forma_farmaceutica'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'concentracion'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'via_administracion'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'accion_terapeutica'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dosis'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'indicaciones'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'contraindicaciones'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precauciones'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'efectos_secundarios' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'acta_comunicacion'   => new sfWidgetFormFilterInput(),
      'observaciones'       => new sfWidgetFormFilterInput(),
      'comision'            => new sfWidgetFormFilterInput(),
      'calificacion'        => new sfWidgetFormFilterInput(),
      'created_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'codigo'              => new sfValidatorPass(array('required' => false)),
      'nombre_generico'     => new sfValidatorPass(array('required' => false)),
      'forma_farmaceutica'  => new sfValidatorPass(array('required' => false)),
      'concentracion'       => new sfValidatorPass(array('required' => false)),
      'via_administracion'  => new sfValidatorPass(array('required' => false)),
      'accion_terapeutica'  => new sfValidatorPass(array('required' => false)),
      'dosis'               => new sfValidatorPass(array('required' => false)),
      'indicaciones'        => new sfValidatorPass(array('required' => false)),
      'contraindicaciones'  => new sfValidatorPass(array('required' => false)),
      'precauciones'        => new sfValidatorPass(array('required' => false)),
      'efectos_secundarios' => new sfValidatorPass(array('required' => false)),
      'acta_comunicacion'   => new sfValidatorPass(array('required' => false)),
      'observaciones'       => new sfValidatorPass(array('required' => false)),
      'comision'            => new sfValidatorPass(array('required' => false)),
      'calificacion'        => new sfValidatorPass(array('required' => false)),
      'created_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('aval_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Aval';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'codigo'              => 'Text',
      'nombre_generico'     => 'Text',
      'forma_farmaceutica'  => 'Text',
      'concentracion'       => 'Text',
      'via_administracion'  => 'Text',
      'accion_terapeutica'  => 'Text',
      'dosis'               => 'Text',
      'indicaciones'        => 'Text',
      'contraindicaciones'  => 'Text',
      'precauciones'        => 'Text',
      'efectos_secundarios' => 'Text',
      'acta_comunicacion'   => 'Text',
      'observaciones'       => 'Text',
      'comision'            => 'Text',
      'calificacion'        => 'Text',
      'created_at'          => 'Date',
      'updated_at'          => 'Date',
    );
  }
}

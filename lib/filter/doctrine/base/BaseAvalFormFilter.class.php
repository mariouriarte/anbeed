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
      'codigo'               => new sfWidgetFormFilterInput(),
      'nombre_generico'      => new sfWidgetFormFilterInput(),
      'forma_farmaceutica'   => new sfWidgetFormFilterInput(),
      'concentracion'        => new sfWidgetFormFilterInput(),
      'via_administracion'   => new sfWidgetFormFilterInput(),
      'accion_terapeutica'   => new sfWidgetFormFilterInput(),
      'accion_terapeutica2'  => new sfWidgetFormFilterInput(),
      'dosis'                => new sfWidgetFormFilterInput(),
      'dosis2'               => new sfWidgetFormFilterInput(),
      'dosis3'               => new sfWidgetFormFilterInput(),
      'indicaciones'         => new sfWidgetFormFilterInput(),
      'indicaciones2'        => new sfWidgetFormFilterInput(),
      'indicaciones3'        => new sfWidgetFormFilterInput(),
      'indicaciones4'        => new sfWidgetFormFilterInput(),
      'indicaciones5'        => new sfWidgetFormFilterInput(),
      'indicaciones6'        => new sfWidgetFormFilterInput(),
      'contraindicaciones'   => new sfWidgetFormFilterInput(),
      'contraindicaciones2'  => new sfWidgetFormFilterInput(),
      'contraindicaciones3'  => new sfWidgetFormFilterInput(),
      'contraindicaciones4'  => new sfWidgetFormFilterInput(),
      'contraindicaciones5'  => new sfWidgetFormFilterInput(),
      'precauciones'         => new sfWidgetFormFilterInput(),
      'precauciones2'        => new sfWidgetFormFilterInput(),
      'precauciones3'        => new sfWidgetFormFilterInput(),
      'precauciones4'        => new sfWidgetFormFilterInput(),
      'precauciones5'        => new sfWidgetFormFilterInput(),
      'efectos_secundarios'  => new sfWidgetFormFilterInput(),
      'efectos_secundarios2' => new sfWidgetFormFilterInput(),
      'efectos_secundarios3' => new sfWidgetFormFilterInput(),
      'efectos_secundarios4' => new sfWidgetFormFilterInput(),
      'efectos_secundarios5' => new sfWidgetFormFilterInput(),
      'acta_comunicacion'    => new sfWidgetFormFilterInput(),
      'observaciones'        => new sfWidgetFormFilterInput(),
      'observaciones2'       => new sfWidgetFormFilterInput(),
      'created_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'codigo'               => new sfValidatorPass(array('required' => false)),
      'nombre_generico'      => new sfValidatorPass(array('required' => false)),
      'forma_farmaceutica'   => new sfValidatorPass(array('required' => false)),
      'concentracion'        => new sfValidatorPass(array('required' => false)),
      'via_administracion'   => new sfValidatorPass(array('required' => false)),
      'accion_terapeutica'   => new sfValidatorPass(array('required' => false)),
      'accion_terapeutica2'  => new sfValidatorPass(array('required' => false)),
      'dosis'                => new sfValidatorPass(array('required' => false)),
      'dosis2'               => new sfValidatorPass(array('required' => false)),
      'dosis3'               => new sfValidatorPass(array('required' => false)),
      'indicaciones'         => new sfValidatorPass(array('required' => false)),
      'indicaciones2'        => new sfValidatorPass(array('required' => false)),
      'indicaciones3'        => new sfValidatorPass(array('required' => false)),
      'indicaciones4'        => new sfValidatorPass(array('required' => false)),
      'indicaciones5'        => new sfValidatorPass(array('required' => false)),
      'indicaciones6'        => new sfValidatorPass(array('required' => false)),
      'contraindicaciones'   => new sfValidatorPass(array('required' => false)),
      'contraindicaciones2'  => new sfValidatorPass(array('required' => false)),
      'contraindicaciones3'  => new sfValidatorPass(array('required' => false)),
      'contraindicaciones4'  => new sfValidatorPass(array('required' => false)),
      'contraindicaciones5'  => new sfValidatorPass(array('required' => false)),
      'precauciones'         => new sfValidatorPass(array('required' => false)),
      'precauciones2'        => new sfValidatorPass(array('required' => false)),
      'precauciones3'        => new sfValidatorPass(array('required' => false)),
      'precauciones4'        => new sfValidatorPass(array('required' => false)),
      'precauciones5'        => new sfValidatorPass(array('required' => false)),
      'efectos_secundarios'  => new sfValidatorPass(array('required' => false)),
      'efectos_secundarios2' => new sfValidatorPass(array('required' => false)),
      'efectos_secundarios3' => new sfValidatorPass(array('required' => false)),
      'efectos_secundarios4' => new sfValidatorPass(array('required' => false)),
      'efectos_secundarios5' => new sfValidatorPass(array('required' => false)),
      'acta_comunicacion'    => new sfValidatorPass(array('required' => false)),
      'observaciones'        => new sfValidatorPass(array('required' => false)),
      'observaciones2'       => new sfValidatorPass(array('required' => false)),
      'created_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
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
      'id'                   => 'Number',
      'codigo'               => 'Text',
      'nombre_generico'      => 'Text',
      'forma_farmaceutica'   => 'Text',
      'concentracion'        => 'Text',
      'via_administracion'   => 'Text',
      'accion_terapeutica'   => 'Text',
      'accion_terapeutica2'  => 'Text',
      'dosis'                => 'Text',
      'dosis2'               => 'Text',
      'dosis3'               => 'Text',
      'indicaciones'         => 'Text',
      'indicaciones2'        => 'Text',
      'indicaciones3'        => 'Text',
      'indicaciones4'        => 'Text',
      'indicaciones5'        => 'Text',
      'indicaciones6'        => 'Text',
      'contraindicaciones'   => 'Text',
      'contraindicaciones2'  => 'Text',
      'contraindicaciones3'  => 'Text',
      'contraindicaciones4'  => 'Text',
      'contraindicaciones5'  => 'Text',
      'precauciones'         => 'Text',
      'precauciones2'        => 'Text',
      'precauciones3'        => 'Text',
      'precauciones4'        => 'Text',
      'precauciones5'        => 'Text',
      'efectos_secundarios'  => 'Text',
      'efectos_secundarios2' => 'Text',
      'efectos_secundarios3' => 'Text',
      'efectos_secundarios4' => 'Text',
      'efectos_secundarios5' => 'Text',
      'acta_comunicacion'    => 'Text',
      'observaciones'        => 'Text',
      'observaciones2'       => 'Text',
      'created_at'           => 'Date',
      'updated_at'           => 'Date',
    );
  }
}

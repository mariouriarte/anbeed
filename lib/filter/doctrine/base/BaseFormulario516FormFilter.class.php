<?php

/**
 * Formulario516 filter form base class.
 *
 * @package    anbeed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseFormulario516FormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'formulario_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Formulario'), 'add_empty' => true)),
      'fecha'                      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'cosmetico_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Cosmetico'), 'add_empty' => true)),
      'vigencia'                   => new sfWidgetFormFilterInput(),
      'fecha_inicio_vigencia'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'numero_ruta'                => new sfWidgetFormFilterInput(),
      'tipo_tramite_formulario_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoTramiteFormulario'), 'add_empty' => true)),
      'datos'                      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'datos_titular'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'maquila_embasador'          => new sfWidgetFormFilterInput(),
      'maquila_empacador'          => new sfWidgetFormFilterInput(),
      'maquila_acondicionador'     => new sfWidgetFormFilterInput(),
      'maquila_fabricado_para'     => new sfWidgetFormFilterInput(),
      'created_at'                 => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                 => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'formulario_id'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Formulario'), 'column' => 'id')),
      'fecha'                      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'cosmetico_id'               => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Cosmetico'), 'column' => 'id')),
      'vigencia'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha_inicio_vigencia'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'numero_ruta'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tipo_tramite_formulario_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TipoTramiteFormulario'), 'column' => 'id')),
      'datos'                      => new sfValidatorPass(array('required' => false)),
      'datos_titular'              => new sfValidatorPass(array('required' => false)),
      'maquila_embasador'          => new sfValidatorPass(array('required' => false)),
      'maquila_empacador'          => new sfValidatorPass(array('required' => false)),
      'maquila_acondicionador'     => new sfValidatorPass(array('required' => false)),
      'maquila_fabricado_para'     => new sfValidatorPass(array('required' => false)),
      'created_at'                 => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                 => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('formulario516_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Formulario516';
  }

  public function getFields()
  {
    return array(
      'id'                         => 'Number',
      'formulario_id'              => 'ForeignKey',
      'fecha'                      => 'Date',
      'cosmetico_id'               => 'ForeignKey',
      'vigencia'                   => 'Number',
      'fecha_inicio_vigencia'      => 'Date',
      'numero_ruta'                => 'Number',
      'tipo_tramite_formulario_id' => 'ForeignKey',
      'datos'                      => 'Text',
      'datos_titular'              => 'Text',
      'maquila_embasador'          => 'Text',
      'maquila_empacador'          => 'Text',
      'maquila_acondicionador'     => 'Text',
      'maquila_fabricado_para'     => 'Text',
      'created_at'                 => 'Date',
      'updated_at'                 => 'Date',
    );
  }
}

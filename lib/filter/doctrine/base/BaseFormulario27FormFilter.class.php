<?php

/**
 * Formulario27 filter form base class.
 *
 * @package    anbeed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseFormulario27FormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fecha'                        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'vigencia'                     => new sfWidgetFormFilterInput(),
      'fecha_inicio_vigencia'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'numero_ruta'                  => new sfWidgetFormFilterInput(),
      'tipo_tramite_formulario27_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoTramiteFormulario27'), 'add_empty' => true)),
      'origen_formulario_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('OrigenFormulario'), 'add_empty' => true)),
      'datos_formulario27_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatosFormulario27'), 'add_empty' => true)),
      'producto_id'                  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Producto'), 'add_empty' => true)),
      'created_at'                   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'fecha'                        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'vigencia'                     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha_inicio_vigencia'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'numero_ruta'                  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tipo_tramite_formulario27_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TipoTramiteFormulario27'), 'column' => 'id')),
      'origen_formulario_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('OrigenFormulario'), 'column' => 'id')),
      'datos_formulario27_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatosFormulario27'), 'column' => 'id')),
      'producto_id'                  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Producto'), 'column' => 'id')),
      'created_at'                   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('formulario27_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Formulario27';
  }

  public function getFields()
  {
    return array(
      'id'                           => 'Number',
      'fecha'                        => 'Date',
      'vigencia'                     => 'Number',
      'fecha_inicio_vigencia'        => 'Date',
      'numero_ruta'                  => 'Number',
      'tipo_tramite_formulario27_id' => 'ForeignKey',
      'origen_formulario_id'         => 'ForeignKey',
      'datos_formulario27_id'        => 'ForeignKey',
      'producto_id'                  => 'ForeignKey',
      'created_at'                   => 'Date',
      'updated_at'                   => 'Date',
    );
  }
}

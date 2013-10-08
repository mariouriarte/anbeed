<?php

/**
 * Formulario706 filter form base class.
 *
 * @package    anbeed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseFormulario706FormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'formulario_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Formulario'), 'add_empty' => true)),
      'fecha'                      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'higiene_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Higiene'), 'add_empty' => true)),
      'vigencia'                   => new sfWidgetFormFilterInput(),
      'fecha_inicio_vigencia'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'numero_ruta'                => new sfWidgetFormFilterInput(),
      'tipo_tramite_formulario_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoTramiteFormulario'), 'add_empty' => true)),
      'datos'                      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'datos_titular'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rescom_nombre'              => new sfWidgetFormFilterInput(),
      'rescom_direccion'           => new sfWidgetFormFilterInput(),
      'rescom_ciudad_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Ciudad'), 'add_empty' => true)),
      'rescom_telefono'            => new sfWidgetFormFilterInput(),
      'rescom_fax'                 => new sfWidgetFormFilterInput(),
      'rescom_email'               => new sfWidgetFormFilterInput(),
      'maquila_tipo'               => new sfWidgetFormFilterInput(),
      'maquila'                    => new sfWidgetFormFilterInput(),
      'maquila_fabricado'          => new sfWidgetFormFilterInput(),
      'informacion_cambios'        => new sfWidgetFormFilterInput(),
      'created_at'                 => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                 => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'created_by'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'formulario_id'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Formulario'), 'column' => 'id')),
      'fecha'                      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'higiene_id'                 => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Higiene'), 'column' => 'id')),
      'vigencia'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha_inicio_vigencia'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'numero_ruta'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tipo_tramite_formulario_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TipoTramiteFormulario'), 'column' => 'id')),
      'datos'                      => new sfValidatorPass(array('required' => false)),
      'datos_titular'              => new sfValidatorPass(array('required' => false)),
      'rescom_nombre'              => new sfValidatorPass(array('required' => false)),
      'rescom_direccion'           => new sfValidatorPass(array('required' => false)),
      'rescom_ciudad_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Ciudad'), 'column' => 'id')),
      'rescom_telefono'            => new sfValidatorPass(array('required' => false)),
      'rescom_fax'                 => new sfValidatorPass(array('required' => false)),
      'rescom_email'               => new sfValidatorPass(array('required' => false)),
      'maquila_tipo'               => new sfValidatorPass(array('required' => false)),
      'maquila'                    => new sfValidatorPass(array('required' => false)),
      'maquila_fabricado'          => new sfValidatorPass(array('required' => false)),
      'informacion_cambios'        => new sfValidatorPass(array('required' => false)),
      'created_at'                 => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                 => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'created_by'                 => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Creator'), 'column' => 'id')),
      'updated_by'                 => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Updator'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('formulario706_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Formulario706';
  }

  public function getFields()
  {
    return array(
      'id'                         => 'Number',
      'formulario_id'              => 'ForeignKey',
      'fecha'                      => 'Date',
      'higiene_id'                 => 'ForeignKey',
      'vigencia'                   => 'Number',
      'fecha_inicio_vigencia'      => 'Date',
      'numero_ruta'                => 'Number',
      'tipo_tramite_formulario_id' => 'ForeignKey',
      'datos'                      => 'Text',
      'datos_titular'              => 'Text',
      'rescom_nombre'              => 'Text',
      'rescom_direccion'           => 'Text',
      'rescom_ciudad_id'           => 'ForeignKey',
      'rescom_telefono'            => 'Text',
      'rescom_fax'                 => 'Text',
      'rescom_email'               => 'Text',
      'maquila_tipo'               => 'Text',
      'maquila'                    => 'Text',
      'maquila_fabricado'          => 'Text',
      'informacion_cambios'        => 'Text',
      'created_at'                 => 'Date',
      'updated_at'                 => 'Date',
      'created_by'                 => 'ForeignKey',
      'updated_by'                 => 'ForeignKey',
    );
  }
}

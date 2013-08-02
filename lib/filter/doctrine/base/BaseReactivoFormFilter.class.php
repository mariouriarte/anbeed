<?php

/**
 * Reactivo filter form base class.
 *
 * @package    anbeed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseReactivoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'producto_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Producto'), 'add_empty' => true)),
      'empresa_id'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empresa'), 'add_empty' => true)),
      'laboratorio_fabricante_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('LaboratorioFabricante'), 'add_empty' => true)),
      'nombre_comercial'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'catalogo'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'uso'                       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'presentacion'              => new sfWidgetFormFilterInput(),
      'conservacion'              => new sfWidgetFormFilterInput(),
      'periodo_validez'           => new sfWidgetFormFilterInput(),
      'componente'                => new sfWidgetFormFilterInput(),
      'registro_sanitario'        => new sfWidgetFormFilterInput(),
      'created_at'                => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'producto_id'               => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Producto'), 'column' => 'id')),
      'empresa_id'                => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Empresa'), 'column' => 'id')),
      'laboratorio_fabricante_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('LaboratorioFabricante'), 'column' => 'id')),
      'nombre_comercial'          => new sfValidatorPass(array('required' => false)),
      'catalogo'                  => new sfValidatorPass(array('required' => false)),
      'uso'                       => new sfValidatorPass(array('required' => false)),
      'presentacion'              => new sfValidatorPass(array('required' => false)),
      'conservacion'              => new sfValidatorPass(array('required' => false)),
      'periodo_validez'           => new sfValidatorPass(array('required' => false)),
      'componente'                => new sfValidatorPass(array('required' => false)),
      'registro_sanitario'        => new sfValidatorPass(array('required' => false)),
      'created_at'                => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('reactivo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Reactivo';
  }

  public function getFields()
  {
    return array(
      'id'                        => 'Number',
      'producto_id'               => 'ForeignKey',
      'empresa_id'                => 'ForeignKey',
      'laboratorio_fabricante_id' => 'ForeignKey',
      'nombre_comercial'          => 'Text',
      'catalogo'                  => 'Text',
      'uso'                       => 'Text',
      'presentacion'              => 'Text',
      'conservacion'              => 'Text',
      'periodo_validez'           => 'Text',
      'componente'                => 'Text',
      'registro_sanitario'        => 'Text',
      'created_at'                => 'Date',
      'updated_at'                => 'Date',
    );
  }
}

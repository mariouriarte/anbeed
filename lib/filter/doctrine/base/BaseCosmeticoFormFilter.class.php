<?php

/**
 * Cosmetico filter form base class.
 *
 * @package    anbeed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCosmeticoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'producto_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Producto'), 'add_empty' => true)),
      'empresa_id'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empresa'), 'add_empty' => true)),
      'laboratorio_fabricante_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('LaboratorioFabricante'), 'add_empty' => true)),
      'forma_cosmetica_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('FormaCosmetica'), 'add_empty' => true)),
      'grupo_cosmetico_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('GrupoCosmetico'), 'add_empty' => true)),
      'marca'                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pais_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pais'), 'add_empty' => true)),
      'nombre'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'codigo_nso'                => new sfWidgetFormFilterInput(),
      'vigencia_nso'              => new sfWidgetFormFilterInput(),
      'expediente'                => new sfWidgetFormFilterInput(),
      'registro_sanitario'        => new sfWidgetFormFilterInput(),
      'descripcion'               => new sfWidgetFormFilterInput(),
      'created_at'                => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'producto_id'               => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Producto'), 'column' => 'id')),
      'empresa_id'                => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Empresa'), 'column' => 'id')),
      'laboratorio_fabricante_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('LaboratorioFabricante'), 'column' => 'id')),
      'forma_cosmetica_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('FormaCosmetica'), 'column' => 'id')),
      'grupo_cosmetico_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('GrupoCosmetico'), 'column' => 'id')),
      'marca'                     => new sfValidatorPass(array('required' => false)),
      'pais_id'                   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Pais'), 'column' => 'id')),
      'nombre'                    => new sfValidatorPass(array('required' => false)),
      'codigo_nso'                => new sfValidatorPass(array('required' => false)),
      'vigencia_nso'              => new sfValidatorPass(array('required' => false)),
      'expediente'                => new sfValidatorPass(array('required' => false)),
      'registro_sanitario'        => new sfValidatorPass(array('required' => false)),
      'descripcion'               => new sfValidatorPass(array('required' => false)),
      'created_at'                => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('cosmetico_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cosmetico';
  }

  public function getFields()
  {
    return array(
      'id'                        => 'Number',
      'producto_id'               => 'ForeignKey',
      'empresa_id'                => 'ForeignKey',
      'laboratorio_fabricante_id' => 'ForeignKey',
      'forma_cosmetica_id'        => 'ForeignKey',
      'grupo_cosmetico_id'        => 'ForeignKey',
      'marca'                     => 'Text',
      'pais_id'                   => 'ForeignKey',
      'nombre'                    => 'Text',
      'codigo_nso'                => 'Text',
      'vigencia_nso'              => 'Text',
      'expediente'                => 'Text',
      'registro_sanitario'        => 'Text',
      'descripcion'               => 'Text',
      'created_at'                => 'Date',
      'updated_at'                => 'Date',
    );
  }
}

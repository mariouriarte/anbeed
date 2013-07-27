<?php

/**
 * Higiene filter form base class.
 *
 * @package    anbeed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseHigieneFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'empresa_id'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empresa'), 'add_empty' => true)),
      'laboratorio_fabricante_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('LaboratorioFabricante'), 'add_empty' => true)),
      'grupo_higiene'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'marca_id'                  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Marca'), 'add_empty' => true)),
      'pais_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pais'), 'add_empty' => true)),
      'nombre'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'phd'                       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'pahp'                      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'variedad'                  => new sfWidgetFormFilterInput(),
      'codigo_nso'                => new sfWidgetFormFilterInput(),
      'vigencia_nso'              => new sfWidgetFormFilterInput(),
      'expediente'                => new sfWidgetFormFilterInput(),
      'registro_sanitario'        => new sfWidgetFormFilterInput(),
      'created_at'                => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'empresa_id'                => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Empresa'), 'column' => 'id')),
      'laboratorio_fabricante_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('LaboratorioFabricante'), 'column' => 'id')),
      'grupo_higiene'             => new sfValidatorPass(array('required' => false)),
      'marca_id'                  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Marca'), 'column' => 'id')),
      'pais_id'                   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Pais'), 'column' => 'id')),
      'nombre'                    => new sfValidatorPass(array('required' => false)),
      'phd'                       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'pahp'                      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'variedad'                  => new sfValidatorPass(array('required' => false)),
      'codigo_nso'                => new sfValidatorPass(array('required' => false)),
      'vigencia_nso'              => new sfValidatorPass(array('required' => false)),
      'expediente'                => new sfValidatorPass(array('required' => false)),
      'registro_sanitario'        => new sfValidatorPass(array('required' => false)),
      'created_at'                => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('higiene_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Higiene';
  }

  public function getFields()
  {
    return array(
      'id'                        => 'Number',
      'empresa_id'                => 'ForeignKey',
      'laboratorio_fabricante_id' => 'ForeignKey',
      'grupo_higiene'             => 'Text',
      'marca_id'                  => 'ForeignKey',
      'pais_id'                   => 'ForeignKey',
      'nombre'                    => 'Text',
      'phd'                       => 'Boolean',
      'pahp'                      => 'Boolean',
      'variedad'                  => 'Text',
      'codigo_nso'                => 'Text',
      'vigencia_nso'              => 'Text',
      'expediente'                => 'Text',
      'registro_sanitario'        => 'Text',
      'created_at'                => 'Date',
      'updated_at'                => 'Date',
    );
  }
}
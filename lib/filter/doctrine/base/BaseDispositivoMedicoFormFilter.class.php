<?php

/**
 * DispositivoMedico filter form base class.
 *
 * @package    anbeed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDispositivoMedicoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'producto_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Producto'), 'add_empty' => true)),
      'empresa_id'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empresa'), 'add_empty' => true)),
      'laboratorio_fabricante_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('LaboratorioFabricante'), 'add_empty' => true)),
      'nombre_comercial'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre_generico'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'clasificacion_riesgo'      => new sfWidgetFormFilterInput(),
      'codigo_internacional'      => new sfWidgetFormFilterInput(),
      'manual'                    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'indicaciones'              => new sfWidgetFormFilterInput(),
      'presentacion'              => new sfWidgetFormFilterInput(),
      'condicion_empaque'         => new sfWidgetFormFilterInput(),
      'vida_util'                 => new sfWidgetFormFilterInput(),
      'metodo_desecho'            => new sfWidgetFormFilterInput(),
      'registro_sanitario'        => new sfWidgetFormFilterInput(),
      'descripcion'               => new sfWidgetFormFilterInput(),
      'formula_cc'                => new sfWidgetFormFilterInput(),
      'created_at'                => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'created_by'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'producto_id'               => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Producto'), 'column' => 'id')),
      'empresa_id'                => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Empresa'), 'column' => 'id')),
      'laboratorio_fabricante_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('LaboratorioFabricante'), 'column' => 'id')),
      'nombre_comercial'          => new sfValidatorPass(array('required' => false)),
      'nombre_generico'           => new sfValidatorPass(array('required' => false)),
      'clasificacion_riesgo'      => new sfValidatorPass(array('required' => false)),
      'codigo_internacional'      => new sfValidatorPass(array('required' => false)),
      'manual'                    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'indicaciones'              => new sfValidatorPass(array('required' => false)),
      'presentacion'              => new sfValidatorPass(array('required' => false)),
      'condicion_empaque'         => new sfValidatorPass(array('required' => false)),
      'vida_util'                 => new sfValidatorPass(array('required' => false)),
      'metodo_desecho'            => new sfValidatorPass(array('required' => false)),
      'registro_sanitario'        => new sfValidatorPass(array('required' => false)),
      'descripcion'               => new sfValidatorPass(array('required' => false)),
      'formula_cc'                => new sfValidatorPass(array('required' => false)),
      'created_at'                => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'created_by'                => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Creator'), 'column' => 'id')),
      'updated_by'                => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Updator'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('dispositivo_medico_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DispositivoMedico';
  }

  public function getFields()
  {
    return array(
      'id'                        => 'Number',
      'producto_id'               => 'ForeignKey',
      'empresa_id'                => 'ForeignKey',
      'laboratorio_fabricante_id' => 'ForeignKey',
      'nombre_comercial'          => 'Text',
      'nombre_generico'           => 'Text',
      'clasificacion_riesgo'      => 'Text',
      'codigo_internacional'      => 'Text',
      'manual'                    => 'Boolean',
      'indicaciones'              => 'Text',
      'presentacion'              => 'Text',
      'condicion_empaque'         => 'Text',
      'vida_util'                 => 'Text',
      'metodo_desecho'            => 'Text',
      'registro_sanitario'        => 'Text',
      'descripcion'               => 'Text',
      'formula_cc'                => 'Text',
      'created_at'                => 'Date',
      'updated_at'                => 'Date',
      'created_by'                => 'ForeignKey',
      'updated_by'                => 'ForeignKey',
    );
  }
}

<?php

/**
 * DispositivoMedico form base class.
 *
 * @method DispositivoMedico getObject() Returns the current form's model object
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDispositivoMedicoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                        => new sfWidgetFormInputHidden(),
      'producto_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Producto'), 'add_empty' => true)),
      'empresa_id'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empresa'), 'add_empty' => false)),
      'laboratorio_fabricante_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('LaboratorioFabricante'), 'add_empty' => false)),
      'nombre_comercial'          => new sfWidgetFormInputText(),
      'nombre_generico'           => new sfWidgetFormInputText(),
      'clasificacion_riesgo'      => new sfWidgetFormTextarea(),
      'codigo_internacional'      => new sfWidgetFormInputText(),
      'manual'                    => new sfWidgetFormInputCheckbox(),
      'indicaciones'              => new sfWidgetFormTextarea(),
      'presentacion'              => new sfWidgetFormTextarea(),
      'condicion_empaque'         => new sfWidgetFormTextarea(),
      'vida_util'                 => new sfWidgetFormTextarea(),
      'metodo_desecho'            => new sfWidgetFormTextarea(),
      'registro_sanitario'        => new sfWidgetFormInputText(),
      'descripcion'               => new sfWidgetFormTextarea(),
      'formula_cc'                => new sfWidgetFormTextarea(),
      'created_at'                => new sfWidgetFormDateTime(),
      'updated_at'                => new sfWidgetFormDateTime(),
      'created_by'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'producto_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Producto'), 'required' => false)),
      'empresa_id'                => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Empresa'))),
      'laboratorio_fabricante_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('LaboratorioFabricante'))),
      'nombre_comercial'          => new sfValidatorString(array('max_length' => 255)),
      'nombre_generico'           => new sfValidatorString(array('max_length' => 255)),
      'clasificacion_riesgo'      => new sfValidatorString(array('max_length' => 1000, 'required' => false)),
      'codigo_internacional'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'manual'                    => new sfValidatorBoolean(array('required' => false)),
      'indicaciones'              => new sfValidatorString(array('max_length' => 2000, 'required' => false)),
      'presentacion'              => new sfValidatorString(array('max_length' => 2000, 'required' => false)),
      'condicion_empaque'         => new sfValidatorString(array('max_length' => 2000, 'required' => false)),
      'vida_util'                 => new sfValidatorString(array('max_length' => 2000, 'required' => false)),
      'metodo_desecho'            => new sfValidatorString(array('max_length' => 2000, 'required' => false)),
      'registro_sanitario'        => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'descripcion'               => new sfValidatorString(array('max_length' => 2000, 'required' => false)),
      'formula_cc'                => new sfValidatorString(array('max_length' => 5000, 'required' => false)),
      'created_at'                => new sfValidatorDateTime(),
      'updated_at'                => new sfValidatorDateTime(),
      'created_by'                => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'required' => false)),
      'updated_by'                => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dispositivo_medico[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DispositivoMedico';
  }

}

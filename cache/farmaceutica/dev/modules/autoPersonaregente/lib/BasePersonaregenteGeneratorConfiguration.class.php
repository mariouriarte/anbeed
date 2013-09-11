<?php

/**
 * personaregente module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage personaregente
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasePersonaregenteGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array(  '_list' => NULL,  '_save' => NULL,);
  }

  public function getEditActions()
  {
    return array(  'ir_empresa' =>   array(    'label' => 'Volver a empresa',  ),  'quitar_personaregente' =>   array(    'label' => 'Quitar Regente Farmaceútico',    'params' => 'class=boton-quitar confirm=¿Quitar Regente Farmaceútico?',  ),  '_save' => NULL,);
  }

  public function getListObjectActions()
  {
    return array(  'asignar_personaregente' =>   array(    'label' => 'Asignar Persona',    'action' => 'asignarPersonaregente',    'params' => 'class=boton-asignar confirm=¿Asignar al Personal?',  ),);
  }

  public function getListActions()
  {
    return array(  'ir_empresa' =>   array(    'label' => 'Volver a Empresa',  ),  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%nombre_ordenado%% - %%cedula_expedido%% - %%telefono%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Listado de Regentes Farmaceuticos disponibles';
  }

  public function getEditTitle()
  {
    return 'Editar Regente Farmaceutico %%nombre%%';
  }

  public function getNewTitle()
  {
    return 'Nuevo Regente Farmaceutico';
  }

  public function getFilterDisplay()
  {
    return array(  0 => 'ap_paterno',  1 => 'ci',);
  }

  public function getFormDisplay()
  {
    return array(  'Datos de la Persona' =>   array(    0 => 'nombre',    1 => 'ap_paterno',    2 => 'ap_materno',    3 => 'ci',    4 => 'expedido',    5 => 'direccion',    6 => 'telefono',    7 => 'celular',    8 => 'fax',    9 => 'casilla',    10 => 'email',    11 => 'fecha_nacimiento',  ),  'Personal Responsable' =>   array(    0 => 'Nuevo Regente',  ),);
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'nombre_ordenado',  1 => 'cedula_expedido',  2 => 'telefono',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'nombre' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'ap_paterno' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Ap. Paterno',),
      'ap_materno' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Ap. Materno',),
      'ci' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Cedula de Identidad',),
      'expedido' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Expedido',),
      'direccion' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Dirección',),
      'telefono' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Teléfono',),
      'celular' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Celular',),
      'fax' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Fax',),
      'casilla' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Casilla',),
      'email' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Email',),
      'fecha_nacimiento' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'is_active' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'foto' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'created_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'updated_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'cedula_expedido' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Cédula de identidad',),
      'nombre_ordenado' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Persona',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'nombre' => array(),
      'ap_paterno' => array(),
      'ap_materno' => array(),
      'ci' => array(),
      'expedido' => array(),
      'direccion' => array(),
      'telefono' => array(),
      'celular' => array(),
      'fax' => array(),
      'casilla' => array(),
      'email' => array(),
      'fecha_nacimiento' => array(),
      'is_active' => array(),
      'foto' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'nombre' => array(),
      'ap_paterno' => array(),
      'ap_materno' => array(),
      'ci' => array(),
      'expedido' => array(),
      'direccion' => array(),
      'telefono' => array(),
      'celular' => array(),
      'fax' => array(),
      'casilla' => array(),
      'email' => array(),
      'fecha_nacimiento' => array(),
      'is_active' => array(),
      'foto' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'nombre' => array(),
      'ap_paterno' => array(),
      'ap_materno' => array(),
      'ci' => array(),
      'expedido' => array(),
      'direccion' => array(),
      'telefono' => array(),
      'celular' => array(),
      'fax' => array(),
      'casilla' => array(),
      'email' => array(),
      'fecha_nacimiento' => array(),
      'is_active' => array(),
      'foto' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'nombre' => array(),
      'ap_paterno' => array(),
      'ap_materno' => array(),
      'ci' => array(),
      'expedido' => array(),
      'direccion' => array(),
      'telefono' => array(),
      'celular' => array(),
      'fax' => array(),
      'casilla' => array(),
      'email' => array(),
      'fecha_nacimiento' => array(),
      'is_active' => array(),
      'foto' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'nombre' => array(),
      'ap_paterno' => array(),
      'ap_materno' => array(),
      'ci' => array(),
      'expedido' => array(),
      'direccion' => array(),
      'telefono' => array(),
      'celular' => array(),
      'fax' => array(),
      'casilla' => array(),
      'email' => array(),
      'fecha_nacimiento' => array(),
      'is_active' => array(),
      'foto' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'PersonaForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'PersonaFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 20;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getTableMethod()
  {
    return 'selectPersonasDisponibles';
  }

  public function getTableCountMethod()
  {
    return '';
  }
}

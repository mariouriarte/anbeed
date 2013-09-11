<?php

/**
 * empresas module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage empresas
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseEmpresasGeneratorConfiguration extends sfModelGeneratorConfiguration
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
    return array(  'ir_empresa' =>   array(    'label' => 'Volver a Empresa',  ),  '_save' => NULL,);
  }

  public function getListObjectActions()
  {
    return array(  'imprimir' =>   array(    'label' => 'Imprimir',    'action' => 'print',  ),  'adm_empresa' =>   array(    'label' => 'Ingresar',    'action' => 'administrarEmpresa',  ),);
  }

  public function getListActions()
  {
    return array(  'ir_portal' =>   array(    'label' => 'Volver al Portal',  ),  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%razon_social%% - %%nit%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Listado de Empresas Registradas';
  }

  public function getEditTitle()
  {
    return 'Editar Empresa %%razon_social%%';
  }

  public function getNewTitle()
  {
    return 'Registro de Empresa';
  }

  public function getFilterDisplay()
  {
    return array(  0 => 'razon_social',  1 => 'nit',);
  }

  public function getFormDisplay()
  {
    return array(  'Datos' =>   array(    0 => 'razon_social',    1 => 'pais_id',    2 => 'ciudad_id',    3 => 'fecha_registro',    4 => 'fecha_resolucion',    5 => 'num_resolucion',    6 => 'fax',    7 => 'direccion',    8 => 'casilla',    9 => 'telefono1',    10 => 'telefono1',    11 => 'telefono2',    12 => 'email',    13 => 'actividad',    14 => 'registro_camara',    15 => 'fundempresa',    16 => 'nit',    17 => 'licencia_funcionamiento',    18 => 'observacion',  ),);
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
    return array(  0 => 'razon_social',  1 => 'nit',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'representante_legal_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',  'label' => 'Representante Legal',),
      'regente_farmaceutico_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',  'label' => 'Regente Farmacéutico',),
      'ciudad_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',  'label' => 'Ciudad',),
      'razon_social' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Razón Social',  'help' => 'Nombre de la empresa',),
      'fecha_registro' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',  'label' => 'Fecha de Registro',),
      'num_resolucion' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Número de Resolución Ministerial',),
      'fecha_resolucion' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',  'label' => 'Fecha de Resolución Ministerial',  'date_format' => 'dd/MM/yyyy',),
      'fax' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'direccion' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Dirección',),
      'casilla' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'telefono1' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Teléfono 1',),
      'telefono2' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Teléfono 2',),
      'email' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'actividad' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'registro_camara' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Registro en la Cámara Nacional de Industria y/o Comercio',),
      'fundempresa' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Fundempresa',),
      'nit' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'NIT',),
      'licencia_funcionamiento' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'observacion' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Observaciones',),
      'is_active' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'created_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'updated_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'pais_id' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'País',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'representante_legal_id' => array(),
      'regente_farmaceutico_id' => array(),
      'ciudad_id' => array(),
      'razon_social' => array(),
      'fecha_registro' => array(),
      'num_resolucion' => array(),
      'fecha_resolucion' => array(),
      'fax' => array(),
      'direccion' => array(),
      'casilla' => array(),
      'telefono1' => array(),
      'telefono2' => array(),
      'email' => array(),
      'actividad' => array(),
      'registro_camara' => array(),
      'fundempresa' => array(),
      'nit' => array(),
      'licencia_funcionamiento' => array(),
      'observacion' => array(),
      'is_active' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'representante_legal_id' => array(),
      'regente_farmaceutico_id' => array(),
      'ciudad_id' => array(),
      'razon_social' => array(),
      'fecha_registro' => array(),
      'num_resolucion' => array(),
      'fecha_resolucion' => array(),
      'fax' => array(),
      'direccion' => array(),
      'casilla' => array(),
      'telefono1' => array(),
      'telefono2' => array(),
      'email' => array(),
      'actividad' => array(),
      'registro_camara' => array(),
      'fundempresa' => array(),
      'nit' => array(),
      'licencia_funcionamiento' => array(),
      'observacion' => array(),
      'is_active' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'representante_legal_id' => array(),
      'regente_farmaceutico_id' => array(),
      'ciudad_id' => array(),
      'razon_social' => array(),
      'fecha_registro' => array(),
      'num_resolucion' => array(),
      'fecha_resolucion' => array(),
      'fax' => array(),
      'direccion' => array(),
      'casilla' => array(),
      'telefono1' => array(),
      'telefono2' => array(),
      'email' => array(),
      'actividad' => array(),
      'registro_camara' => array(),
      'fundempresa' => array(),
      'nit' => array(),
      'licencia_funcionamiento' => array(),
      'observacion' => array(),
      'is_active' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'representante_legal_id' => array(),
      'regente_farmaceutico_id' => array(),
      'ciudad_id' => array(),
      'razon_social' => array(),
      'fecha_registro' => array(),
      'num_resolucion' => array(),
      'fecha_resolucion' => array(),
      'fax' => array(),
      'direccion' => array(),
      'casilla' => array(),
      'telefono1' => array(),
      'telefono2' => array(),
      'email' => array(),
      'actividad' => array(),
      'registro_camara' => array(),
      'fundempresa' => array(),
      'nit' => array(),
      'licencia_funcionamiento' => array(),
      'observacion' => array(),
      'is_active' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'representante_legal_id' => array(),
      'regente_farmaceutico_id' => array(),
      'ciudad_id' => array(),
      'razon_social' => array(),
      'fecha_registro' => array(),
      'num_resolucion' => array(),
      'fecha_resolucion' => array(),
      'fax' => array(),
      'direccion' => array(),
      'casilla' => array(),
      'telefono1' => array(),
      'telefono2' => array(),
      'email' => array(),
      'actividad' => array(),
      'registro_camara' => array(),
      'fundempresa' => array(),
      'nit' => array(),
      'licencia_funcionamiento' => array(),
      'observacion' => array(),
      'is_active' => array(),
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
    return 'EmpresaForm';
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
    return 'EmpresaFormFilter';
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
    return '';
  }

  public function getTableCountMethod()
  {
    return '';
  }
}

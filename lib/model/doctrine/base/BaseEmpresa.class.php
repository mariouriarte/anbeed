<?php

/**
 * BaseEmpresa
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $representante_legal_id
 * @property integer $regente_farmaceutico_id
 * @property string $razon_social
 * @property date $fecha_registro
 * @property string $num_resolucion
 * @property date $fecha_resolucion
 * @property string $fax
 * @property string $direccion
 * @property string $casilla
 * @property string $telefono1
 * @property string $telefono2
 * @property string $email
 * @property string $actividad
 * @property string $registro_camara
 * @property string $fundempresa
 * @property string $nit
 * @property string $licencia_funcionamiento
 * @property boolean $is_active
 * @property RepresentanteLegal $RepresentanteLegal
 * @property RegenteFarmaceutico $RegenteFarmaceutico
 * @property Doctrine_Collection $Producto
 * 
 * @method integer             getRepresentanteLegalId()    Returns the current record's "representante_legal_id" value
 * @method integer             getRegenteFarmaceuticoId()   Returns the current record's "regente_farmaceutico_id" value
 * @method string              getRazonSocial()             Returns the current record's "razon_social" value
 * @method date                getFechaRegistro()           Returns the current record's "fecha_registro" value
 * @method string              getNumResolucion()           Returns the current record's "num_resolucion" value
 * @method date                getFechaResolucion()         Returns the current record's "fecha_resolucion" value
 * @method string              getFax()                     Returns the current record's "fax" value
 * @method string              getDireccion()               Returns the current record's "direccion" value
 * @method string              getCasilla()                 Returns the current record's "casilla" value
 * @method string              getTelefono1()               Returns the current record's "telefono1" value
 * @method string              getTelefono2()               Returns the current record's "telefono2" value
 * @method string              getEmail()                   Returns the current record's "email" value
 * @method string              getActividad()               Returns the current record's "actividad" value
 * @method string              getRegistroCamara()          Returns the current record's "registro_camara" value
 * @method string              getFundempresa()             Returns the current record's "fundempresa" value
 * @method string              getNit()                     Returns the current record's "nit" value
 * @method string              getLicenciaFuncionamiento()  Returns the current record's "licencia_funcionamiento" value
 * @method boolean             getIsActive()                Returns the current record's "is_active" value
 * @method RepresentanteLegal  getRepresentanteLegal()      Returns the current record's "RepresentanteLegal" value
 * @method RegenteFarmaceutico getRegenteFarmaceutico()     Returns the current record's "RegenteFarmaceutico" value
 * @method Doctrine_Collection getProducto()                Returns the current record's "Producto" collection
 * @method Empresa             setRepresentanteLegalId()    Sets the current record's "representante_legal_id" value
 * @method Empresa             setRegenteFarmaceuticoId()   Sets the current record's "regente_farmaceutico_id" value
 * @method Empresa             setRazonSocial()             Sets the current record's "razon_social" value
 * @method Empresa             setFechaRegistro()           Sets the current record's "fecha_registro" value
 * @method Empresa             setNumResolucion()           Sets the current record's "num_resolucion" value
 * @method Empresa             setFechaResolucion()         Sets the current record's "fecha_resolucion" value
 * @method Empresa             setFax()                     Sets the current record's "fax" value
 * @method Empresa             setDireccion()               Sets the current record's "direccion" value
 * @method Empresa             setCasilla()                 Sets the current record's "casilla" value
 * @method Empresa             setTelefono1()               Sets the current record's "telefono1" value
 * @method Empresa             setTelefono2()               Sets the current record's "telefono2" value
 * @method Empresa             setEmail()                   Sets the current record's "email" value
 * @method Empresa             setActividad()               Sets the current record's "actividad" value
 * @method Empresa             setRegistroCamara()          Sets the current record's "registro_camara" value
 * @method Empresa             setFundempresa()             Sets the current record's "fundempresa" value
 * @method Empresa             setNit()                     Sets the current record's "nit" value
 * @method Empresa             setLicenciaFuncionamiento()  Sets the current record's "licencia_funcionamiento" value
 * @method Empresa             setIsActive()                Sets the current record's "is_active" value
 * @method Empresa             setRepresentanteLegal()      Sets the current record's "RepresentanteLegal" value
 * @method Empresa             setRegenteFarmaceutico()     Sets the current record's "RegenteFarmaceutico" value
 * @method Empresa             setProducto()                Sets the current record's "Producto" collection
 * 
 * @package    anbeed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEmpresa extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('empresa');
        $this->hasColumn('representante_legal_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => false,
             ));
        $this->hasColumn('regente_farmaceutico_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => false,
             ));
        $this->hasColumn('razon_social', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 255,
             ));
        $this->hasColumn('fecha_registro', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('num_resolucion', 'string', 30, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 30,
             ));
        $this->hasColumn('fecha_resolucion', 'date', null, array(
             'type' => 'date',
             'notnull' => false,
             ));
        $this->hasColumn('fax', 'string', 20, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 20,
             ));
        $this->hasColumn('direccion', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('casilla', 'string', 20, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 20,
             ));
        $this->hasColumn('telefono1', 'string', 20, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 20,
             ));
        $this->hasColumn('telefono2', 'string', 20, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 20,
             ));
        $this->hasColumn('email', 'string', 255, array(
             'type' => 'string',
             'notnull' => false,
             'unique' => true,
             'length' => 255,
             ));
        $this->hasColumn('actividad', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('registro_camara', 'string', 30, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 30,
             ));
        $this->hasColumn('fundempresa', 'string', 30, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 30,
             ));
        $this->hasColumn('nit', 'string', 30, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 30,
             ));
        $this->hasColumn('licencia_funcionamiento', 'string', 30, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 30,
             ));
        $this->hasColumn('is_active', 'boolean', null, array(
             'type' => 'boolean',
             'default' => true,
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('RepresentanteLegal', array(
             'local' => 'representante_legal_id',
             'foreign' => 'id'));

        $this->hasOne('RegenteFarmaceutico', array(
             'local' => 'regente_farmaceutico_id',
             'foreign' => 'id'));

        $this->hasMany('Producto', array(
             'local' => 'id',
             'foreign' => 'empresa_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}
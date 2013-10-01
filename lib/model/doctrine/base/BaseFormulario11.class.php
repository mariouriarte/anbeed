<?php

/**
 * BaseFormulario11
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $formulario_id
 * @property integer $numero_ruta
 * @property date $fecha
 * @property integer $vigencia
 * @property date $fecha_inicio_vigencia
 * @property integer $empresa_id
 * @property integer $tipo_despacho_id
 * @property string $otro
 * @property boolean $sustancias_quimicas
 * @property boolean $licencia_previa
 * @property string $licencia_resolucion
 * @property date $licencia_fecha
 * @property integer $numero_item
 * @property integer $foja
 * @property integer $pais_id
 * @property string $factura
 * @property date $factura_fecha
 * @property string $por_tratarse
 * @property string $para
 * @property Formulario $Formulario
 * @property Empresa $Empresa
 * @property TipoDespacho $TipoDespacho
 * @property Pais $Pais
 * @property Doctrine_Collection $Item
 * 
 * @method integer             getFormularioId()          Returns the current record's "formulario_id" value
 * @method integer             getNumeroRuta()            Returns the current record's "numero_ruta" value
 * @method date                getFecha()                 Returns the current record's "fecha" value
 * @method integer             getVigencia()              Returns the current record's "vigencia" value
 * @method date                getFechaInicioVigencia()   Returns the current record's "fecha_inicio_vigencia" value
 * @method integer             getEmpresaId()             Returns the current record's "empresa_id" value
 * @method integer             getTipoDespachoId()        Returns the current record's "tipo_despacho_id" value
 * @method string              getOtro()                  Returns the current record's "otro" value
 * @method boolean             getSustanciasQuimicas()    Returns the current record's "sustancias_quimicas" value
 * @method boolean             getLicenciaPrevia()        Returns the current record's "licencia_previa" value
 * @method string              getLicenciaResolucion()    Returns the current record's "licencia_resolucion" value
 * @method date                getLicenciaFecha()         Returns the current record's "licencia_fecha" value
 * @method integer             getNumeroItem()            Returns the current record's "numero_item" value
 * @method integer             getFoja()                  Returns the current record's "foja" value
 * @method integer             getPaisId()                Returns the current record's "pais_id" value
 * @method string              getFactura()               Returns the current record's "factura" value
 * @method date                getFacturaFecha()          Returns the current record's "factura_fecha" value
 * @method string              getPorTratarse()           Returns the current record's "por_tratarse" value
 * @method string              getPara()                  Returns the current record's "para" value
 * @method Formulario          getFormulario()            Returns the current record's "Formulario" value
 * @method Empresa             getEmpresa()               Returns the current record's "Empresa" value
 * @method TipoDespacho        getTipoDespacho()          Returns the current record's "TipoDespacho" value
 * @method Pais                getPais()                  Returns the current record's "Pais" value
 * @method Doctrine_Collection getItem()                  Returns the current record's "Item" collection
 * @method Formulario11        setFormularioId()          Sets the current record's "formulario_id" value
 * @method Formulario11        setNumeroRuta()            Sets the current record's "numero_ruta" value
 * @method Formulario11        setFecha()                 Sets the current record's "fecha" value
 * @method Formulario11        setVigencia()              Sets the current record's "vigencia" value
 * @method Formulario11        setFechaInicioVigencia()   Sets the current record's "fecha_inicio_vigencia" value
 * @method Formulario11        setEmpresaId()             Sets the current record's "empresa_id" value
 * @method Formulario11        setTipoDespachoId()        Sets the current record's "tipo_despacho_id" value
 * @method Formulario11        setOtro()                  Sets the current record's "otro" value
 * @method Formulario11        setSustanciasQuimicas()    Sets the current record's "sustancias_quimicas" value
 * @method Formulario11        setLicenciaPrevia()        Sets the current record's "licencia_previa" value
 * @method Formulario11        setLicenciaResolucion()    Sets the current record's "licencia_resolucion" value
 * @method Formulario11        setLicenciaFecha()         Sets the current record's "licencia_fecha" value
 * @method Formulario11        setNumeroItem()            Sets the current record's "numero_item" value
 * @method Formulario11        setFoja()                  Sets the current record's "foja" value
 * @method Formulario11        setPaisId()                Sets the current record's "pais_id" value
 * @method Formulario11        setFactura()               Sets the current record's "factura" value
 * @method Formulario11        setFacturaFecha()          Sets the current record's "factura_fecha" value
 * @method Formulario11        setPorTratarse()           Sets the current record's "por_tratarse" value
 * @method Formulario11        setPara()                  Sets the current record's "para" value
 * @method Formulario11        setFormulario()            Sets the current record's "Formulario" value
 * @method Formulario11        setEmpresa()               Sets the current record's "Empresa" value
 * @method Formulario11        setTipoDespacho()          Sets the current record's "TipoDespacho" value
 * @method Formulario11        setPais()                  Sets the current record's "Pais" value
 * @method Formulario11        setItem()                  Sets the current record's "Item" collection
 * 
 * @package    anbeed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseFormulario11 extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('formulario11');
        $this->hasColumn('formulario_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => false,
             ));
        $this->hasColumn('numero_ruta', 'integer', null, array(
             'type' => 'integer',
             'notnull' => false,
             ));
        $this->hasColumn('fecha', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('vigencia', 'integer', 2, array(
             'type' => 'integer',
             'notnull' => false,
             'length' => 2,
             ));
        $this->hasColumn('fecha_inicio_vigencia', 'date', null, array(
             'type' => 'date',
             'notnull' => false,
             ));
        $this->hasColumn('empresa_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('tipo_despacho_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('otro', 'string', 250, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 250,
             ));
        $this->hasColumn('sustancias_quimicas', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             ));
        $this->hasColumn('licencia_previa', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             ));
        $this->hasColumn('licencia_resolucion', 'string', 150, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 150,
             ));
        $this->hasColumn('licencia_fecha', 'date', null, array(
             'type' => 'date',
             'notnull' => false,
             ));
        $this->hasColumn('numero_item', 'integer', null, array(
             'type' => 'integer',
             'notnull' => false,
             ));
        $this->hasColumn('foja', 'integer', null, array(
             'type' => 'integer',
             'notnull' => false,
             ));
        $this->hasColumn('pais_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('factura', 'string', 150, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 150,
             ));
        $this->hasColumn('factura_fecha', 'date', null, array(
             'type' => 'date',
             'notnull' => true,
             ));
        $this->hasColumn('por_tratarse', 'string', 150, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 150,
             ));
        $this->hasColumn('para', 'string', 150, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 150,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Formulario', array(
             'local' => 'formulario_id',
             'foreign' => 'id'));

        $this->hasOne('Empresa', array(
             'local' => 'empresa_id',
             'foreign' => 'id'));

        $this->hasOne('TipoDespacho', array(
             'local' => 'tipo_despacho_id',
             'foreign' => 'id'));

        $this->hasOne('Pais', array(
             'local' => 'pais_id',
             'foreign' => 'id'));

        $this->hasMany('Item', array(
             'local' => 'id',
             'foreign' => 'formulario11_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $signable0 = new Doctrine_Template_Signable(array(
             ));
        $this->actAs($timestampable0);
        $this->actAs($signable0);
    }
}
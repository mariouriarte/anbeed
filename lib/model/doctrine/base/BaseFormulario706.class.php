<?php

/**
 * BaseFormulario706
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property date $fecha
 * @property integer $producto_id
 * @property integer $vigencia
 * @property date $fecha_inicio_vigencia
 * @property integer $numero_ruta
 * @property integer $tipo_tramite_formulario_id
 * @property string $datos
 * @property string $datos_titular
 * @property string $maquila_embasador
 * @property string $maquila_empacador
 * @property string $maquila_acondicionador
 * @property string $maquila_fabricado_para
 * @property Producto $Producto
 * @property TipoTramiteFormulario $TipoTramiteFormulario
 * @property Doctrine_Collection $Etapa
 * 
 * @method date                  getFecha()                      Returns the current record's "fecha" value
 * @method integer               getProductoId()                 Returns the current record's "producto_id" value
 * @method integer               getVigencia()                   Returns the current record's "vigencia" value
 * @method date                  getFechaInicioVigencia()        Returns the current record's "fecha_inicio_vigencia" value
 * @method integer               getNumeroRuta()                 Returns the current record's "numero_ruta" value
 * @method integer               getTipoTramiteFormularioId()    Returns the current record's "tipo_tramite_formulario_id" value
 * @method string                getDatos()                      Returns the current record's "datos" value
 * @method string                getDatosTitular()               Returns the current record's "datos_titular" value
 * @method string                getMaquilaEmbasador()           Returns the current record's "maquila_embasador" value
 * @method string                getMaquilaEmpacador()           Returns the current record's "maquila_empacador" value
 * @method string                getMaquilaAcondicionador()      Returns the current record's "maquila_acondicionador" value
 * @method string                getMaquilaFabricadoPara()       Returns the current record's "maquila_fabricado_para" value
 * @method Producto              getProducto()                   Returns the current record's "Producto" value
 * @method TipoTramiteFormulario getTipoTramiteFormulario()      Returns the current record's "TipoTramiteFormulario" value
 * @method Doctrine_Collection   getEtapa()                      Returns the current record's "Etapa" collection
 * @method Formulario706         setFecha()                      Sets the current record's "fecha" value
 * @method Formulario706         setProductoId()                 Sets the current record's "producto_id" value
 * @method Formulario706         setVigencia()                   Sets the current record's "vigencia" value
 * @method Formulario706         setFechaInicioVigencia()        Sets the current record's "fecha_inicio_vigencia" value
 * @method Formulario706         setNumeroRuta()                 Sets the current record's "numero_ruta" value
 * @method Formulario706         setTipoTramiteFormularioId()    Sets the current record's "tipo_tramite_formulario_id" value
 * @method Formulario706         setDatos()                      Sets the current record's "datos" value
 * @method Formulario706         setDatosTitular()               Sets the current record's "datos_titular" value
 * @method Formulario706         setMaquilaEmbasador()           Sets the current record's "maquila_embasador" value
 * @method Formulario706         setMaquilaEmpacador()           Sets the current record's "maquila_empacador" value
 * @method Formulario706         setMaquilaAcondicionador()      Sets the current record's "maquila_acondicionador" value
 * @method Formulario706         setMaquilaFabricadoPara()       Sets the current record's "maquila_fabricado_para" value
 * @method Formulario706         setProducto()                   Sets the current record's "Producto" value
 * @method Formulario706         setTipoTramiteFormulario()      Sets the current record's "TipoTramiteFormulario" value
 * @method Formulario706         setEtapa()                      Sets the current record's "Etapa" collection
 * 
 * @package    anbeed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseFormulario706 extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('formulario706');
        $this->hasColumn('fecha', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('producto_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
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
        $this->hasColumn('numero_ruta', 'integer', null, array(
             'type' => 'integer',
             'notnull' => false,
             ));
        $this->hasColumn('tipo_tramite_formulario_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('datos', 'string', 150, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 150,
             ));
        $this->hasColumn('datos_titular', 'string', 150, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 150,
             ));
        $this->hasColumn('maquila_embasador', 'string', 255, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 255,
             ));
        $this->hasColumn('maquila_empacador', 'string', 255, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 255,
             ));
        $this->hasColumn('maquila_acondicionador', 'string', 255, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 255,
             ));
        $this->hasColumn('maquila_fabricado_para', 'string', 255, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Producto', array(
             'local' => 'producto_id',
             'foreign' => 'id'));

        $this->hasOne('TipoTramiteFormulario', array(
             'local' => 'tipo_tramite_formulario_id',
             'foreign' => 'id'));

        $this->hasMany('Etapa', array(
             'local' => 'id',
             'foreign' => 'formulario706_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}
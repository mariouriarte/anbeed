<?php

/**
 * BaseItem
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $formulario11_id
 * @property string $cantidad
 * @property integer $producto_id
 * @property integer $producto_unimed_id
 * @property string $nombre
 * @property string $num_lote
 * @property date $fecha_vencimiento
 * @property enum $tipo_item
 * @property Formulario11 $Formulario11
 * @property Producto $Producto
 * @property ProductoUnimed $ProductoUnimed
 * 
 * @method integer        getFormulario11Id()     Returns the current record's "formulario11_id" value
 * @method string         getCantidad()           Returns the current record's "cantidad" value
 * @method integer        getProductoId()         Returns the current record's "producto_id" value
 * @method integer        getProductoUnimedId()   Returns the current record's "producto_unimed_id" value
 * @method string         getNombre()             Returns the current record's "nombre" value
 * @method string         getNumLote()            Returns the current record's "num_lote" value
 * @method date           getFechaVencimiento()   Returns the current record's "fecha_vencimiento" value
 * @method enum           getTipoItem()           Returns the current record's "tipo_item" value
 * @method Formulario11   getFormulario11()       Returns the current record's "Formulario11" value
 * @method Producto       getProducto()           Returns the current record's "Producto" value
 * @method ProductoUnimed getProductoUnimed()     Returns the current record's "ProductoUnimed" value
 * @method Item           setFormulario11Id()     Sets the current record's "formulario11_id" value
 * @method Item           setCantidad()           Sets the current record's "cantidad" value
 * @method Item           setProductoId()         Sets the current record's "producto_id" value
 * @method Item           setProductoUnimedId()   Sets the current record's "producto_unimed_id" value
 * @method Item           setNombre()             Sets the current record's "nombre" value
 * @method Item           setNumLote()            Sets the current record's "num_lote" value
 * @method Item           setFechaVencimiento()   Sets the current record's "fecha_vencimiento" value
 * @method Item           setTipoItem()           Sets the current record's "tipo_item" value
 * @method Item           setFormulario11()       Sets the current record's "Formulario11" value
 * @method Item           setProducto()           Sets the current record's "Producto" value
 * @method Item           setProductoUnimed()     Sets the current record's "ProductoUnimed" value
 * 
 * @package    anbeed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseItem extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('item');
        $this->hasColumn('formulario11_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('cantidad', 'string', 150, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 150,
             ));
        $this->hasColumn('producto_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('producto_unimed_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('nombre', 'string', 28, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 28,
             ));
        $this->hasColumn('num_lote', 'string', 150, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 150,
             ));
        $this->hasColumn('fecha_vencimiento', 'date', null, array(
             'type' => 'date',
             'notnull' => true,
             ));
        $this->hasColumn('tipo_item', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'UNIMED',
              1 => 'ANBEED',
             ),
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Formulario11', array(
             'local' => 'formulario11_id',
             'foreign' => 'id'));

        $this->hasOne('Producto', array(
             'local' => 'producto_id',
             'foreign' => 'id'));

        $this->hasOne('ProductoUnimed', array(
             'local' => 'producto_unimed_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $signable0 = new Doctrine_Template_Signable(array(
             ));
        $this->actAs($timestampable0);
        $this->actAs($signable0);
    }
}
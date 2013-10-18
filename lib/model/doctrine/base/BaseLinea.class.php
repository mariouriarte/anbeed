<?php

/**
 * BaseLinea
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $nombre
 * @property string $descripcion
 * @property Doctrine_Collection $ProductoWeb
 * 
 * @method string              getNombre()      Returns the current record's "nombre" value
 * @method string              getDescripcion() Returns the current record's "descripcion" value
 * @method Doctrine_Collection getProductoWeb() Returns the current record's "ProductoWeb" collection
 * @method Linea               setNombre()      Sets the current record's "nombre" value
 * @method Linea               setDescripcion() Sets the current record's "descripcion" value
 * @method Linea               setProductoWeb() Sets the current record's "ProductoWeb" collection
 * 
 * @package    anbeed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseLinea extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('linea');
        $this->hasColumn('nombre', 'string', 30, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 30,
             ));
        $this->hasColumn('descripcion', 'string', 150, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 150,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('ProductoWeb', array(
             'local' => 'id',
             'foreign' => 'linea_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $signable0 = new Doctrine_Template_Signable(array(
             ));
        $this->actAs($timestampable0);
        $this->actAs($signable0);
    }
}
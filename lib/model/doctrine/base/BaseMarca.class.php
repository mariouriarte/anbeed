<?php

/**
 * BaseMarca
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $nombre
 * @property Cosmetico $Cosmetico
 * @property Doctrine_Collection $Higiene
 * 
 * @method string              getNombre()    Returns the current record's "nombre" value
 * @method Cosmetico           getCosmetico() Returns the current record's "Cosmetico" value
 * @method Doctrine_Collection getHigiene()   Returns the current record's "Higiene" collection
 * @method Marca               setNombre()    Sets the current record's "nombre" value
 * @method Marca               setCosmetico() Sets the current record's "Cosmetico" value
 * @method Marca               setHigiene()   Sets the current record's "Higiene" collection
 * 
 * @package    anbeed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMarca extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('marca');
        $this->hasColumn('nombre', 'string', 250, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 250,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Cosmetico', array(
             'local' => 'id',
             'foreign' => 'marca_id'));

        $this->hasMany('Higiene', array(
             'local' => 'id',
             'foreign' => 'marca_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}
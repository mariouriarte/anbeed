<?php

/**
 * BaseEstadoTarea
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $nombre
 * @property string $descripcion
 * @property Tarea $Tarea
 * 
 * @method string      getNombre()      Returns the current record's "nombre" value
 * @method string      getDescripcion() Returns the current record's "descripcion" value
 * @method Tarea       getTarea()       Returns the current record's "Tarea" value
 * @method EstadoTarea setNombre()      Sets the current record's "nombre" value
 * @method EstadoTarea setDescripcion() Sets the current record's "descripcion" value
 * @method EstadoTarea setTarea()       Sets the current record's "Tarea" value
 * 
 * @package    anbeed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEstadoTarea extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('estado_tarea');
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
        $this->hasOne('Tarea', array(
             'local' => 'id',
             'foreign' => 'estado_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $signable0 = new Doctrine_Template_Signable(array(
             ));
        $this->actAs($timestampable0);
        $this->actAs($signable0);
    }
}
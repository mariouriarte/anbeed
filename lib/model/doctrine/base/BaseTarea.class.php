<?php

/**
 * BaseTarea
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $user_id
 * @property integer $estado_id
 * @property string $nombre
 * @property string $descripcion
 * @property date $fecha_estimada
 * @property sfGuardUser $sfGuardUser
 * @property EstadoTarea $EstadoTarea
 * @property Doctrine_Collection $ComentarioTarea
 * 
 * @method integer             getUserId()          Returns the current record's "user_id" value
 * @method integer             getEstadoId()        Returns the current record's "estado_id" value
 * @method string              getNombre()          Returns the current record's "nombre" value
 * @method string              getDescripcion()     Returns the current record's "descripcion" value
 * @method date                getFechaEstimada()   Returns the current record's "fecha_estimada" value
 * @method sfGuardUser         getSfGuardUser()     Returns the current record's "sfGuardUser" value
 * @method EstadoTarea         getEstadoTarea()     Returns the current record's "EstadoTarea" value
 * @method Doctrine_Collection getComentarioTarea() Returns the current record's "ComentarioTarea" collection
 * @method Tarea               setUserId()          Sets the current record's "user_id" value
 * @method Tarea               setEstadoId()        Sets the current record's "estado_id" value
 * @method Tarea               setNombre()          Sets the current record's "nombre" value
 * @method Tarea               setDescripcion()     Sets the current record's "descripcion" value
 * @method Tarea               setFechaEstimada()   Sets the current record's "fecha_estimada" value
 * @method Tarea               setSfGuardUser()     Sets the current record's "sfGuardUser" value
 * @method Tarea               setEstadoTarea()     Sets the current record's "EstadoTarea" value
 * @method Tarea               setComentarioTarea() Sets the current record's "ComentarioTarea" collection
 * 
 * @package    anbeed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTarea extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tarea');
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('estado_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('nombre', 'string', 150, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 150,
             ));
        $this->hasColumn('descripcion', 'string', 2000, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 2000,
             ));
        $this->hasColumn('fecha_estimada', 'date', null, array(
             'type' => 'date',
             'notnull' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('sfGuardUser', array(
             'local' => 'user_id',
             'foreign' => 'id'));

        $this->hasOne('EstadoTarea', array(
             'local' => 'estado_id',
             'foreign' => 'id'));

        $this->hasMany('ComentarioTarea', array(
             'local' => 'id',
             'foreign' => 'tarea_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $signable0 = new Doctrine_Template_Signable(array(
             ));
        $this->actAs($timestampable0);
        $this->actAs($signable0);
    }
}
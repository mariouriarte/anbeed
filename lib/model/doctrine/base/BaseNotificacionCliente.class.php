<?php

/**
 * BaseNotificacionCliente
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $empresa_id
 * @property string $asunto
 * @property string $descripcion
 * @property string $observacion
 * @property date $fecha
 * @property Empresa $Empresa
 * 
 * @method integer             getEmpresaId()   Returns the current record's "empresa_id" value
 * @method string              getAsunto()      Returns the current record's "asunto" value
 * @method string              getDescripcion() Returns the current record's "descripcion" value
 * @method string              getObservacion() Returns the current record's "observacion" value
 * @method date                getFecha()       Returns the current record's "fecha" value
 * @method Empresa             getEmpresa()     Returns the current record's "Empresa" value
 * @method NotificacionCliente setEmpresaId()   Sets the current record's "empresa_id" value
 * @method NotificacionCliente setAsunto()      Sets the current record's "asunto" value
 * @method NotificacionCliente setDescripcion() Sets the current record's "descripcion" value
 * @method NotificacionCliente setObservacion() Sets the current record's "observacion" value
 * @method NotificacionCliente setFecha()       Sets the current record's "fecha" value
 * @method NotificacionCliente setEmpresa()     Sets the current record's "Empresa" value
 * 
 * @package    anbeed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseNotificacionCliente extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('notificacion_cliente');
        $this->hasColumn('empresa_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('asunto', 'string', 250, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 250,
             ));
        $this->hasColumn('descripcion', 'string', 2000, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 2000,
             ));
        $this->hasColumn('observacion', 'string', 2000, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 2000,
             ));
        $this->hasColumn('fecha', 'date', null, array(
             'type' => 'date',
             'notnull' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Empresa', array(
             'local' => 'empresa_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $signable0 = new Doctrine_Template_Signable(array(
             ));
        $this->actAs($timestampable0);
        $this->actAs($signable0);
    }
}
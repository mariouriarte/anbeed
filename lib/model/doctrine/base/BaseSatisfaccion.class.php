<?php

/**
 * BaseSatisfaccion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $comentario
 * @property integer $servicio_id
 * @property integer $calificacion_id
 * @property integer $empresa_id
 * @property Empresa $Empresa
 * @property Servicios $Servicios
 * @property CalificacionServicio $CalificacionServicio
 * 
 * @method string               getComentario()           Returns the current record's "comentario" value
 * @method integer              getServicioId()           Returns the current record's "servicio_id" value
 * @method integer              getCalificacionId()       Returns the current record's "calificacion_id" value
 * @method integer              getEmpresaId()            Returns the current record's "empresa_id" value
 * @method Empresa              getEmpresa()              Returns the current record's "Empresa" value
 * @method Servicios            getServicios()            Returns the current record's "Servicios" value
 * @method CalificacionServicio getCalificacionServicio() Returns the current record's "CalificacionServicio" value
 * @method Satisfaccion         setComentario()           Sets the current record's "comentario" value
 * @method Satisfaccion         setServicioId()           Sets the current record's "servicio_id" value
 * @method Satisfaccion         setCalificacionId()       Sets the current record's "calificacion_id" value
 * @method Satisfaccion         setEmpresaId()            Sets the current record's "empresa_id" value
 * @method Satisfaccion         setEmpresa()              Sets the current record's "Empresa" value
 * @method Satisfaccion         setServicios()            Sets the current record's "Servicios" value
 * @method Satisfaccion         setCalificacionServicio() Sets the current record's "CalificacionServicio" value
 * 
 * @package    anbeed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSatisfaccion extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('satisfaccion');
        $this->hasColumn('comentario', 'string', 2000, array(
             'type' => 'string',
             'length' => 2000,
             ));
        $this->hasColumn('servicio_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('calificacion_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('empresa_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Empresa', array(
             'local' => 'empresa_id',
             'foreign' => 'id'));

        $this->hasOne('Servicios', array(
             'local' => 'servicio_id',
             'foreign' => 'id'));

        $this->hasOne('CalificacionServicio', array(
             'local' => 'calificacion_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $signable0 = new Doctrine_Template_Signable(array(
             ));
        $this->actAs($timestampable0);
        $this->actAs($signable0);
    }
}
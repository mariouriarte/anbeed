<?php

/**
 * BaseTipoDocumento
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $nombre
 * @property Doctrine_Collection $EmisionCorrespondencia
 * 
 * @method string              getNombre()                 Returns the current record's "nombre" value
 * @method Doctrine_Collection getEmisionCorrespondencia() Returns the current record's "EmisionCorrespondencia" collection
 * @method TipoDocumento       setNombre()                 Sets the current record's "nombre" value
 * @method TipoDocumento       setEmisionCorrespondencia() Sets the current record's "EmisionCorrespondencia" collection
 * 
 * @package    anbeed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTipoDocumento extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tipo_documento');
        $this->hasColumn('nombre', 'string', 30, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 30,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('EmisionCorrespondencia', array(
             'local' => 'id',
             'foreign' => 'tipo_documento_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $signable0 = new Doctrine_Template_Signable(array(
             ));
        $this->actAs($timestampable0);
        $this->actAs($signable0);
    }
}
<?php

/**
 * BaseFormaFarmaceutica
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $nombre
 * @property Doctrine_Collection $Medicamento
 * 
 * @method string              getNombre()      Returns the current record's "nombre" value
 * @method Doctrine_Collection getMedicamento() Returns the current record's "Medicamento" collection
 * @method FormaFarmaceutica   setNombre()      Sets the current record's "nombre" value
 * @method FormaFarmaceutica   setMedicamento() Sets the current record's "Medicamento" collection
 * 
 * @package    anbeed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseFormaFarmaceutica extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('forma_farmaceutica');
        $this->hasColumn('nombre', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Medicamento', array(
             'local' => 'id',
             'foreign' => 'forma_farmaceutica_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}
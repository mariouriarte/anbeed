<?php

/**
 * BaseGrupoCosmetico
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $nombre
 * @property Cosmetico $Cosmetico
 * 
 * @method string         getNombre()    Returns the current record's "nombre" value
 * @method Cosmetico      getCosmetico() Returns the current record's "Cosmetico" value
 * @method GrupoCosmetico setNombre()    Sets the current record's "nombre" value
 * @method GrupoCosmetico setCosmetico() Sets the current record's "Cosmetico" value
 * 
 * @package    anbeed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseGrupoCosmetico extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('grupo_cosmetico');
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
             'foreign' => 'grupo_cosmetico_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $signable0 = new Doctrine_Template_Signable(array(
             ));
        $this->actAs($timestampable0);
        $this->actAs($signable0);
    }
}
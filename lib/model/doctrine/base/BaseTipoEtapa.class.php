<?php

/**
 * BaseTipoEtapa
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $nombre
 * @property string $descripcion
 * @property Etapa $Etapa
 * 
 * @method string    getNombre()      Returns the current record's "nombre" value
 * @method string    getDescripcion() Returns the current record's "descripcion" value
 * @method Etapa     getEtapa()       Returns the current record's "Etapa" value
 * @method TipoEtapa setNombre()      Sets the current record's "nombre" value
 * @method TipoEtapa setDescripcion() Sets the current record's "descripcion" value
 * @method TipoEtapa setEtapa()       Sets the current record's "Etapa" value
 * 
 * @package    anbeed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTipoEtapa extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tipo_etapa');
        $this->hasColumn('nombre', 'string', 250, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 250,
             ));
        $this->hasColumn('descripcion', 'string', 2000, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 2000,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Etapa', array(
             'local' => 'id',
             'foreign' => 'tipo_etapa_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $signable0 = new Doctrine_Template_Signable(array(
             ));
        $this->actAs($timestampable0);
        $this->actAs($signable0);
    }
}
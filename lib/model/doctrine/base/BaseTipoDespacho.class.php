<?php

/**
 * BaseTipoDespacho
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $nombre
 * @property Formulario11 $Formulario11
 * 
 * @method string       getNombre()       Returns the current record's "nombre" value
 * @method Formulario11 getFormulario11() Returns the current record's "Formulario11" value
 * @method TipoDespacho setNombre()       Sets the current record's "nombre" value
 * @method TipoDespacho setFormulario11() Sets the current record's "Formulario11" value
 * 
 * @package    anbeed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTipoDespacho extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tipo_despacho');
        $this->hasColumn('nombre', 'string', 50, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 50,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Formulario11', array(
             'local' => 'id',
             'foreign' => 'tipo_despacho_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $signable0 = new Doctrine_Template_Signable(array(
             ));
        $this->actAs($timestampable0);
        $this->actAs($signable0);
    }
}
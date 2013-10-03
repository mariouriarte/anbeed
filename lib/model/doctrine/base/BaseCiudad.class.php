<?php

/**
 * BaseCiudad
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $pais_id
 * @property string $nombre
 * @property string $distrito
 * @property integer $poblacion
 * @property Pais $Pais
 * @property Empresa $Empresa
 * @property LaboratorioFabricante $LaboratorioFabricante
 * @property Formulario706 $Formulario706
 * 
 * @method integer               getPaisId()                Returns the current record's "pais_id" value
 * @method string                getNombre()                Returns the current record's "nombre" value
 * @method string                getDistrito()              Returns the current record's "distrito" value
 * @method integer               getPoblacion()             Returns the current record's "poblacion" value
 * @method Pais                  getPais()                  Returns the current record's "Pais" value
 * @method Empresa               getEmpresa()               Returns the current record's "Empresa" value
 * @method LaboratorioFabricante getLaboratorioFabricante() Returns the current record's "LaboratorioFabricante" value
 * @method Formulario706         getFormulario706()         Returns the current record's "Formulario706" value
 * @method Ciudad                setPaisId()                Sets the current record's "pais_id" value
 * @method Ciudad                setNombre()                Sets the current record's "nombre" value
 * @method Ciudad                setDistrito()              Sets the current record's "distrito" value
 * @method Ciudad                setPoblacion()             Sets the current record's "poblacion" value
 * @method Ciudad                setPais()                  Sets the current record's "Pais" value
 * @method Ciudad                setEmpresa()               Sets the current record's "Empresa" value
 * @method Ciudad                setLaboratorioFabricante() Sets the current record's "LaboratorioFabricante" value
 * @method Ciudad                setFormulario706()         Sets the current record's "Formulario706" value
 * 
 * @package    anbeed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCiudad extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ciudad');
        $this->hasColumn('pais_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('nombre', 'string', 150, array(
             'type' => 'string',
             'length' => 150,
             ));
        $this->hasColumn('distrito', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('poblacion', 'integer', null, array(
             'type' => 'integer',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Pais', array(
             'local' => 'pais_id',
             'foreign' => 'id'));

        $this->hasOne('Empresa', array(
             'local' => 'id',
             'foreign' => 'ciudad_id'));

        $this->hasOne('LaboratorioFabricante', array(
             'local' => 'id',
             'foreign' => 'ciudad_id'));

        $this->hasOne('Formulario706', array(
             'local' => 'id',
             'foreign' => 'rescom_ciudad_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $signable0 = new Doctrine_Template_Signable(array(
             ));
        $this->actAs($timestampable0);
        $this->actAs($signable0);
    }
}
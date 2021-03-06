<?php

/**
 * BaseFormulaCc
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $contenido
 * @property integer $ingrediente_id
 * @property decimal $cantidad
 * @property string $unidad
 * @property Doctrine_Collection $DetalleFormulaCc
 * @property Doctrine_Collection $Medicamento
 * @property Ingrediente $Ingrediente
 * 
 * @method string              getContenido()        Returns the current record's "contenido" value
 * @method integer             getIngredienteId()    Returns the current record's "ingrediente_id" value
 * @method decimal             getCantidad()         Returns the current record's "cantidad" value
 * @method string              getUnidad()           Returns the current record's "unidad" value
 * @method Doctrine_Collection getDetalleFormulaCc() Returns the current record's "DetalleFormulaCc" collection
 * @method Doctrine_Collection getMedicamento()      Returns the current record's "Medicamento" collection
 * @method Ingrediente         getIngrediente()      Returns the current record's "Ingrediente" value
 * @method FormulaCc           setContenido()        Sets the current record's "contenido" value
 * @method FormulaCc           setIngredienteId()    Sets the current record's "ingrediente_id" value
 * @method FormulaCc           setCantidad()         Sets the current record's "cantidad" value
 * @method FormulaCc           setUnidad()           Sets the current record's "unidad" value
 * @method FormulaCc           setDetalleFormulaCc() Sets the current record's "DetalleFormulaCc" collection
 * @method FormulaCc           setMedicamento()      Sets the current record's "Medicamento" collection
 * @method FormulaCc           setIngrediente()      Sets the current record's "Ingrediente" value
 * 
 * @package    anbeed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseFormulaCc extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('formula_cc');
        $this->hasColumn('contenido', 'string', 250, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 250,
             ));
        $this->hasColumn('ingrediente_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => false,
             ));
        $this->hasColumn('cantidad', 'decimal', 5, array(
             'type' => 'decimal',
             'scale' => 2,
             'notnull' => false,
             'length' => 5,
             ));
        $this->hasColumn('unidad', 'string', 30, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 30,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('DetalleFormulaCc', array(
             'local' => 'id',
             'foreign' => 'formula_cc_id'));

        $this->hasMany('Medicamento', array(
             'local' => 'id',
             'foreign' => 'formula_cc_id'));

        $this->hasOne('Ingrediente', array(
             'local' => 'ingrediente_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $signable0 = new Doctrine_Template_Signable(array(
             ));
        $this->actAs($timestampable0);
        $this->actAs($signable0);
    }
}
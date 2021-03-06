<?php

/**
 * BaseDetalleFormulaCc
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $formula_cc_id
 * @property integer $ingrediente_id
 * @property decimal $cantidad
 * @property string $unidad
 * @property FormulaCc $FormulaCc
 * @property Doctrine_Collection $Ingrediente
 * 
 * @method integer             getFormulaCcId()    Returns the current record's "formula_cc_id" value
 * @method integer             getIngredienteId()  Returns the current record's "ingrediente_id" value
 * @method decimal             getCantidad()       Returns the current record's "cantidad" value
 * @method string              getUnidad()         Returns the current record's "unidad" value
 * @method FormulaCc           getFormulaCc()      Returns the current record's "FormulaCc" value
 * @method Doctrine_Collection getIngrediente()    Returns the current record's "Ingrediente" collection
 * @method DetalleFormulaCc    setFormulaCcId()    Sets the current record's "formula_cc_id" value
 * @method DetalleFormulaCc    setIngredienteId()  Sets the current record's "ingrediente_id" value
 * @method DetalleFormulaCc    setCantidad()       Sets the current record's "cantidad" value
 * @method DetalleFormulaCc    setUnidad()         Sets the current record's "unidad" value
 * @method DetalleFormulaCc    setFormulaCc()      Sets the current record's "FormulaCc" value
 * @method DetalleFormulaCc    setIngrediente()    Sets the current record's "Ingrediente" collection
 * 
 * @package    anbeed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDetalleFormulaCc extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('detalle_formula_cc');
        $this->hasColumn('formula_cc_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('ingrediente_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => false,
             ));
        $this->hasColumn('cantidad', 'decimal', 5, array(
             'type' => 'decimal',
             'scale' => 2,
             'notnull' => true,
             'length' => 5,
             ));
        $this->hasColumn('unidad', 'string', 20, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 20,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('FormulaCc', array(
             'local' => 'formula_cc_id',
             'foreign' => 'id'));

        $this->hasMany('Ingrediente', array(
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
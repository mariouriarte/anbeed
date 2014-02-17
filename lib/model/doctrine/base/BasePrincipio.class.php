<?php

/**
 * BasePrincipio
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $formula_cc_id
 * @property integer $ingrediente_id
 * @property string $cantidad
 * @property string $unidad
 * @property string $otro
 * @property FormulaCc $FormulaCc
 * @property Doctrine_Collection $Ingrediente
 * 
 * @method integer             getFormulaCcId()    Returns the current record's "formula_cc_id" value
 * @method integer             getIngredienteId()  Returns the current record's "ingrediente_id" value
 * @method string              getCantidad()       Returns the current record's "cantidad" value
 * @method string              getUnidad()         Returns the current record's "unidad" value
 * @method string              getOtro()           Returns the current record's "otro" value
 * @method FormulaCc           getFormulaCc()      Returns the current record's "FormulaCc" value
 * @method Doctrine_Collection getIngrediente()    Returns the current record's "Ingrediente" collection
 * @method Principio           setFormulaCcId()    Sets the current record's "formula_cc_id" value
 * @method Principio           setIngredienteId()  Sets the current record's "ingrediente_id" value
 * @method Principio           setCantidad()       Sets the current record's "cantidad" value
 * @method Principio           setUnidad()         Sets the current record's "unidad" value
 * @method Principio           setOtro()           Sets the current record's "otro" value
 * @method Principio           setFormulaCc()      Sets the current record's "FormulaCc" value
 * @method Principio           setIngrediente()    Sets the current record's "Ingrediente" collection
 * 
 * @package    anbeed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePrincipio extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('principio');
        $this->hasColumn('formula_cc_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('ingrediente_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => false,
             ));
        $this->hasColumn('cantidad', 'string', 25, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 25,
             ));
        $this->hasColumn('unidad', 'string', 20, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 20,
             ));
        $this->hasColumn('otro', 'string', 2000, array(
             'type' => 'string',
             'length' => 2000,
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
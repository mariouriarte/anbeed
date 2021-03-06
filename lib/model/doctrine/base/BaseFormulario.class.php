<?php

/**
 * BaseFormulario
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property Formulario5 $Formulario5
 * @property Formulario27 $Formulario27
 * @property Formulario516 $Formulario516
 * @property Formulario706 $Formulario706
 * @property Formulario7 $Formulario7
 * @property Formulario11 $Formulario11
 * @property Formulario12 $Formulario12
 * @property Doctrine_Collection $Etapa
 * 
 * @method Formulario5         getFormulario5()   Returns the current record's "Formulario5" value
 * @method Formulario27        getFormulario27()  Returns the current record's "Formulario27" value
 * @method Formulario516       getFormulario516() Returns the current record's "Formulario516" value
 * @method Formulario706       getFormulario706() Returns the current record's "Formulario706" value
 * @method Formulario7         getFormulario7()   Returns the current record's "Formulario7" value
 * @method Formulario11        getFormulario11()  Returns the current record's "Formulario11" value
 * @method Formulario12        getFormulario12()  Returns the current record's "Formulario12" value
 * @method Doctrine_Collection getEtapa()         Returns the current record's "Etapa" collection
 * @method Formulario          setFormulario5()   Sets the current record's "Formulario5" value
 * @method Formulario          setFormulario27()  Sets the current record's "Formulario27" value
 * @method Formulario          setFormulario516() Sets the current record's "Formulario516" value
 * @method Formulario          setFormulario706() Sets the current record's "Formulario706" value
 * @method Formulario          setFormulario7()   Sets the current record's "Formulario7" value
 * @method Formulario          setFormulario11()  Sets the current record's "Formulario11" value
 * @method Formulario          setFormulario12()  Sets the current record's "Formulario12" value
 * @method Formulario          setEtapa()         Sets the current record's "Etapa" collection
 * 
 * @package    anbeed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseFormulario extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('formulario');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Formulario5', array(
             'local' => 'id',
             'foreign' => 'formulario_id'));

        $this->hasOne('Formulario27', array(
             'local' => 'id',
             'foreign' => 'formulario_id'));

        $this->hasOne('Formulario516', array(
             'local' => 'id',
             'foreign' => 'formulario_id'));

        $this->hasOne('Formulario706', array(
             'local' => 'id',
             'foreign' => 'formulario_id'));

        $this->hasOne('Formulario7', array(
             'local' => 'id',
             'foreign' => 'formulario_id'));

        $this->hasOne('Formulario11', array(
             'local' => 'id',
             'foreign' => 'formulario_id'));

        $this->hasOne('Formulario12', array(
             'local' => 'id',
             'foreign' => 'formulario_id'));

        $this->hasMany('Etapa', array(
             'local' => 'id',
             'foreign' => 'formulario_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $signable0 = new Doctrine_Template_Signable(array(
             ));
        $this->actAs($timestampable0);
        $this->actAs($signable0);
    }
}
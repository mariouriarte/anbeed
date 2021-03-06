<?php

/**
 * BaseEtapa
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $formulario_id
 * @property integer $tipo_etapa_id
 * @property date $fecha
 * @property string $observacion
 * @property TipoEtapa $TipoEtapa
 * @property Formulario $Formulario
 * 
 * @method integer    getFormularioId()  Returns the current record's "formulario_id" value
 * @method integer    getTipoEtapaId()   Returns the current record's "tipo_etapa_id" value
 * @method date       getFecha()         Returns the current record's "fecha" value
 * @method string     getObservacion()   Returns the current record's "observacion" value
 * @method TipoEtapa  getTipoEtapa()     Returns the current record's "TipoEtapa" value
 * @method Formulario getFormulario()    Returns the current record's "Formulario" value
 * @method Etapa      setFormularioId()  Sets the current record's "formulario_id" value
 * @method Etapa      setTipoEtapaId()   Sets the current record's "tipo_etapa_id" value
 * @method Etapa      setFecha()         Sets the current record's "fecha" value
 * @method Etapa      setObservacion()   Sets the current record's "observacion" value
 * @method Etapa      setTipoEtapa()     Sets the current record's "TipoEtapa" value
 * @method Etapa      setFormulario()    Sets the current record's "Formulario" value
 * 
 * @package    anbeed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEtapa extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('etapa');
        $this->hasColumn('formulario_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => false,
             ));
        $this->hasColumn('tipo_etapa_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('fecha', 'date', null, array(
             'type' => 'date',
             'notnull' => true,
             ));
        $this->hasColumn('observacion', 'string', 2000, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 2000,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('TipoEtapa', array(
             'local' => 'tipo_etapa_id',
             'foreign' => 'id'));

        $this->hasOne('Formulario', array(
             'local' => 'formulario_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $signable0 = new Doctrine_Template_Signable(array(
             ));
        $this->actAs($timestampable0);
        $this->actAs($signable0);
    }
}
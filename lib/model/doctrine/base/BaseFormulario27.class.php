<?php

/**
 * BaseFormulario27
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $formulario_id
 * @property date $fecha
 * @property integer $vigencia
 * @property date $fecha_inicio_vigencia
 * @property integer $numero_ruta
 * @property integer $tipo_tramite_formulario27_id
 * @property integer $origen_formulario_id
 * @property integer $datos_formulario27_id
 * @property integer $dispositivo_medico_id
 * @property Formulario $Formulario
 * @property DispositivoMedico $DispositivoMedico
 * @property TipoTramiteFormulario27 $TipoTramiteFormulario27
 * @property DatosFormulario27 $DatosFormulario27
 * @property OrigenFormulario $OrigenFormulario
 * 
 * @method integer                 getFormularioId()                 Returns the current record's "formulario_id" value
 * @method date                    getFecha()                        Returns the current record's "fecha" value
 * @method integer                 getVigencia()                     Returns the current record's "vigencia" value
 * @method date                    getFechaInicioVigencia()          Returns the current record's "fecha_inicio_vigencia" value
 * @method integer                 getNumeroRuta()                   Returns the current record's "numero_ruta" value
 * @method integer                 getTipoTramiteFormulario27Id()    Returns the current record's "tipo_tramite_formulario27_id" value
 * @method integer                 getOrigenFormularioId()           Returns the current record's "origen_formulario_id" value
 * @method integer                 getDatosFormulario27Id()          Returns the current record's "datos_formulario27_id" value
 * @method integer                 getDispositivoMedicoId()          Returns the current record's "dispositivo_medico_id" value
 * @method Formulario              getFormulario()                   Returns the current record's "Formulario" value
 * @method DispositivoMedico       getDispositivoMedico()            Returns the current record's "DispositivoMedico" value
 * @method TipoTramiteFormulario27 getTipoTramiteFormulario27()      Returns the current record's "TipoTramiteFormulario27" value
 * @method DatosFormulario27       getDatosFormulario27()            Returns the current record's "DatosFormulario27" value
 * @method OrigenFormulario        getOrigenFormulario()             Returns the current record's "OrigenFormulario" value
 * @method Formulario27            setFormularioId()                 Sets the current record's "formulario_id" value
 * @method Formulario27            setFecha()                        Sets the current record's "fecha" value
 * @method Formulario27            setVigencia()                     Sets the current record's "vigencia" value
 * @method Formulario27            setFechaInicioVigencia()          Sets the current record's "fecha_inicio_vigencia" value
 * @method Formulario27            setNumeroRuta()                   Sets the current record's "numero_ruta" value
 * @method Formulario27            setTipoTramiteFormulario27Id()    Sets the current record's "tipo_tramite_formulario27_id" value
 * @method Formulario27            setOrigenFormularioId()           Sets the current record's "origen_formulario_id" value
 * @method Formulario27            setDatosFormulario27Id()          Sets the current record's "datos_formulario27_id" value
 * @method Formulario27            setDispositivoMedicoId()          Sets the current record's "dispositivo_medico_id" value
 * @method Formulario27            setFormulario()                   Sets the current record's "Formulario" value
 * @method Formulario27            setDispositivoMedico()            Sets the current record's "DispositivoMedico" value
 * @method Formulario27            setTipoTramiteFormulario27()      Sets the current record's "TipoTramiteFormulario27" value
 * @method Formulario27            setDatosFormulario27()            Sets the current record's "DatosFormulario27" value
 * @method Formulario27            setOrigenFormulario()             Sets the current record's "OrigenFormulario" value
 * 
 * @package    anbeed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseFormulario27 extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('formulario27');
        $this->hasColumn('formulario_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('fecha', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('vigencia', 'integer', 2, array(
             'type' => 'integer',
             'notnull' => false,
             'length' => 2,
             ));
        $this->hasColumn('fecha_inicio_vigencia', 'date', null, array(
             'type' => 'date',
             'notnull' => false,
             ));
        $this->hasColumn('numero_ruta', 'integer', null, array(
             'type' => 'integer',
             'notnull' => false,
             ));
        $this->hasColumn('tipo_tramite_formulario27_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('origen_formulario_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('datos_formulario27_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('dispositivo_medico_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Formulario', array(
             'local' => 'formulario_id',
             'foreign' => 'id'));

        $this->hasOne('DispositivoMedico', array(
             'local' => 'dispositivo_medico_id',
             'foreign' => 'id'));

        $this->hasOne('TipoTramiteFormulario27', array(
             'local' => 'tipo_tramite_formulario27_id',
             'foreign' => 'id'));

        $this->hasOne('DatosFormulario27', array(
             'local' => 'datos_formulario27_id',
             'foreign' => 'id'));

        $this->hasOne('OrigenFormulario', array(
             'local' => 'origen_formulario_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}
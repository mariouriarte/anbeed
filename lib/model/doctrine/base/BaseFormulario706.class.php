<?php

/**
 * BaseFormulario706
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $formulario_id
 * @property date $fecha
 * @property integer $higiene_id
 * @property integer $vigencia
 * @property date $fecha_inicio_vigencia
 * @property integer $numero_ruta
 * @property integer $tipo_tramite_formulario_id
 * @property string $datos
 * @property string $datos_titular
 * @property string $rescom_nombre
 * @property string $rescom_direccion
 * @property integer $rescom_ciudad_id
 * @property string $rescom_telefono
 * @property string $rescom_fax
 * @property string $rescom_email
 * @property string $maquila_tipo
 * @property string $maquila
 * @property string $maquila_fabricado
 * @property string $informacion_cambios
 * @property Formulario $Formulario
 * @property Higiene $Higiene
 * @property TipoTramiteFormulario $TipoTramiteFormulario
 * @property Ciudad $Ciudad
 * @property Pais $Pais
 * 
 * @method integer               getFormularioId()               Returns the current record's "formulario_id" value
 * @method date                  getFecha()                      Returns the current record's "fecha" value
 * @method integer               getHigieneId()                  Returns the current record's "higiene_id" value
 * @method integer               getVigencia()                   Returns the current record's "vigencia" value
 * @method date                  getFechaInicioVigencia()        Returns the current record's "fecha_inicio_vigencia" value
 * @method integer               getNumeroRuta()                 Returns the current record's "numero_ruta" value
 * @method integer               getTipoTramiteFormularioId()    Returns the current record's "tipo_tramite_formulario_id" value
 * @method string                getDatos()                      Returns the current record's "datos" value
 * @method string                getDatosTitular()               Returns the current record's "datos_titular" value
 * @method string                getRescomNombre()               Returns the current record's "rescom_nombre" value
 * @method string                getRescomDireccion()            Returns the current record's "rescom_direccion" value
 * @method integer               getRescomCiudadId()             Returns the current record's "rescom_ciudad_id" value
 * @method string                getRescomTelefono()             Returns the current record's "rescom_telefono" value
 * @method string                getRescomFax()                  Returns the current record's "rescom_fax" value
 * @method string                getRescomEmail()                Returns the current record's "rescom_email" value
 * @method string                getMaquilaTipo()                Returns the current record's "maquila_tipo" value
 * @method string                getMaquila()                    Returns the current record's "maquila" value
 * @method string                getMaquilaFabricado()           Returns the current record's "maquila_fabricado" value
 * @method string                getInformacionCambios()         Returns the current record's "informacion_cambios" value
 * @method Formulario            getFormulario()                 Returns the current record's "Formulario" value
 * @method Higiene               getHigiene()                    Returns the current record's "Higiene" value
 * @method TipoTramiteFormulario getTipoTramiteFormulario()      Returns the current record's "TipoTramiteFormulario" value
 * @method Ciudad                getCiudad()                     Returns the current record's "Ciudad" value
 * @method Pais                  getPais()                       Returns the current record's "Pais" value
 * @method Formulario706         setFormularioId()               Sets the current record's "formulario_id" value
 * @method Formulario706         setFecha()                      Sets the current record's "fecha" value
 * @method Formulario706         setHigieneId()                  Sets the current record's "higiene_id" value
 * @method Formulario706         setVigencia()                   Sets the current record's "vigencia" value
 * @method Formulario706         setFechaInicioVigencia()        Sets the current record's "fecha_inicio_vigencia" value
 * @method Formulario706         setNumeroRuta()                 Sets the current record's "numero_ruta" value
 * @method Formulario706         setTipoTramiteFormularioId()    Sets the current record's "tipo_tramite_formulario_id" value
 * @method Formulario706         setDatos()                      Sets the current record's "datos" value
 * @method Formulario706         setDatosTitular()               Sets the current record's "datos_titular" value
 * @method Formulario706         setRescomNombre()               Sets the current record's "rescom_nombre" value
 * @method Formulario706         setRescomDireccion()            Sets the current record's "rescom_direccion" value
 * @method Formulario706         setRescomCiudadId()             Sets the current record's "rescom_ciudad_id" value
 * @method Formulario706         setRescomTelefono()             Sets the current record's "rescom_telefono" value
 * @method Formulario706         setRescomFax()                  Sets the current record's "rescom_fax" value
 * @method Formulario706         setRescomEmail()                Sets the current record's "rescom_email" value
 * @method Formulario706         setMaquilaTipo()                Sets the current record's "maquila_tipo" value
 * @method Formulario706         setMaquila()                    Sets the current record's "maquila" value
 * @method Formulario706         setMaquilaFabricado()           Sets the current record's "maquila_fabricado" value
 * @method Formulario706         setInformacionCambios()         Sets the current record's "informacion_cambios" value
 * @method Formulario706         setFormulario()                 Sets the current record's "Formulario" value
 * @method Formulario706         setHigiene()                    Sets the current record's "Higiene" value
 * @method Formulario706         setTipoTramiteFormulario()      Sets the current record's "TipoTramiteFormulario" value
 * @method Formulario706         setCiudad()                     Sets the current record's "Ciudad" value
 * @method Formulario706         setPais()                       Sets the current record's "Pais" value
 * 
 * @package    anbeed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseFormulario706 extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('formulario706');
        $this->hasColumn('formulario_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => false,
             ));
        $this->hasColumn('fecha', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('higiene_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
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
        $this->hasColumn('tipo_tramite_formulario_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('datos', 'string', 150, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 150,
             ));
        $this->hasColumn('datos_titular', 'string', 150, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 150,
             ));
        $this->hasColumn('rescom_nombre', 'string', 150, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 150,
             ));
        $this->hasColumn('rescom_direccion', 'string', 150, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 150,
             ));
        $this->hasColumn('rescom_ciudad_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => false,
             ));
        $this->hasColumn('rescom_telefono', 'string', 20, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 20,
             ));
        $this->hasColumn('rescom_fax', 'string', 20, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 20,
             ));
        $this->hasColumn('rescom_email', 'string', 255, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 255,
             ));
        $this->hasColumn('maquila_tipo', 'string', 255, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 255,
             ));
        $this->hasColumn('maquila', 'string', 255, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 255,
             ));
        $this->hasColumn('maquila_fabricado', 'string', 255, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 255,
             ));
        $this->hasColumn('informacion_cambios', 'string', 3000, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 3000,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Formulario', array(
             'local' => 'formulario_id',
             'foreign' => 'id'));

        $this->hasOne('Higiene', array(
             'local' => 'higiene_id',
             'foreign' => 'id'));

        $this->hasOne('TipoTramiteFormulario', array(
             'local' => 'tipo_tramite_formulario_id',
             'foreign' => 'id'));

        $this->hasOne('Ciudad', array(
             'local' => 'rescom_ciudad_id',
             'foreign' => 'id'));

        $this->hasOne('Pais', array(
             'local' => 'rescom_ciudad_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $signable0 = new Doctrine_Template_Signable(array(
             ));
        $this->actAs($timestampable0);
        $this->actAs($signable0);
    }
}
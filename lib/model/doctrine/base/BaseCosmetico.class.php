<?php

/**
 * BaseCosmetico
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $empresa_id
 * @property integer $laboratorio_fabricante_id
 * @property integer $forma_cosmetica_id
 * @property integer $grupo_cosmetico_id
 * @property integer $marca_id
 * @property integer $pais_id
 * @property string $nombre
 * @property string $codigo_nso
 * @property string $vigencia_nso
 * @property string $expediente
 * @property string $registro_sanitario
 * @property string $descripcion
 * @property Doctrine_Collection $Formulario516
 * @property Empresa $Empresa
 * @property LaboratorioFabricante $LaboratorioFabricante
 * @property FormaCosmetica $FormaCosmetica
 * @property Doctrine_Collection $GrupoCosmetico
 * @property Doctrine_Collection $Marca
 * @property Pais $Pais
 * 
 * @method integer               getEmpresaId()                 Returns the current record's "empresa_id" value
 * @method integer               getLaboratorioFabricanteId()   Returns the current record's "laboratorio_fabricante_id" value
 * @method integer               getFormaCosmeticaId()          Returns the current record's "forma_cosmetica_id" value
 * @method integer               getGrupoCosmeticoId()          Returns the current record's "grupo_cosmetico_id" value
 * @method integer               getMarcaId()                   Returns the current record's "marca_id" value
 * @method integer               getPaisId()                    Returns the current record's "pais_id" value
 * @method string                getNombre()                    Returns the current record's "nombre" value
 * @method string                getCodigoNso()                 Returns the current record's "codigo_nso" value
 * @method string                getVigenciaNso()               Returns the current record's "vigencia_nso" value
 * @method string                getExpediente()                Returns the current record's "expediente" value
 * @method string                getRegistroSanitario()         Returns the current record's "registro_sanitario" value
 * @method string                getDescripcion()               Returns the current record's "descripcion" value
 * @method Doctrine_Collection   getFormulario516()             Returns the current record's "Formulario516" collection
 * @method Empresa               getEmpresa()                   Returns the current record's "Empresa" value
 * @method LaboratorioFabricante getLaboratorioFabricante()     Returns the current record's "LaboratorioFabricante" value
 * @method FormaCosmetica        getFormaCosmetica()            Returns the current record's "FormaCosmetica" value
 * @method Doctrine_Collection   getGrupoCosmetico()            Returns the current record's "GrupoCosmetico" collection
 * @method Doctrine_Collection   getMarca()                     Returns the current record's "Marca" collection
 * @method Pais                  getPais()                      Returns the current record's "Pais" value
 * @method Cosmetico             setEmpresaId()                 Sets the current record's "empresa_id" value
 * @method Cosmetico             setLaboratorioFabricanteId()   Sets the current record's "laboratorio_fabricante_id" value
 * @method Cosmetico             setFormaCosmeticaId()          Sets the current record's "forma_cosmetica_id" value
 * @method Cosmetico             setGrupoCosmeticoId()          Sets the current record's "grupo_cosmetico_id" value
 * @method Cosmetico             setMarcaId()                   Sets the current record's "marca_id" value
 * @method Cosmetico             setPaisId()                    Sets the current record's "pais_id" value
 * @method Cosmetico             setNombre()                    Sets the current record's "nombre" value
 * @method Cosmetico             setCodigoNso()                 Sets the current record's "codigo_nso" value
 * @method Cosmetico             setVigenciaNso()               Sets the current record's "vigencia_nso" value
 * @method Cosmetico             setExpediente()                Sets the current record's "expediente" value
 * @method Cosmetico             setRegistroSanitario()         Sets the current record's "registro_sanitario" value
 * @method Cosmetico             setDescripcion()               Sets the current record's "descripcion" value
 * @method Cosmetico             setFormulario516()             Sets the current record's "Formulario516" collection
 * @method Cosmetico             setEmpresa()                   Sets the current record's "Empresa" value
 * @method Cosmetico             setLaboratorioFabricante()     Sets the current record's "LaboratorioFabricante" value
 * @method Cosmetico             setFormaCosmetica()            Sets the current record's "FormaCosmetica" value
 * @method Cosmetico             setGrupoCosmetico()            Sets the current record's "GrupoCosmetico" collection
 * @method Cosmetico             setMarca()                     Sets the current record's "Marca" collection
 * @method Cosmetico             setPais()                      Sets the current record's "Pais" value
 * 
 * @package    anbeed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCosmetico extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('cosmetico');
        $this->hasColumn('empresa_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('laboratorio_fabricante_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('forma_cosmetica_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('grupo_cosmetico_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('marca_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('pais_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => false,
             ));
        $this->hasColumn('nombre', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('codigo_nso', 'string', 250, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 250,
             ));
        $this->hasColumn('vigencia_nso', 'string', 250, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 250,
             ));
        $this->hasColumn('expediente', 'string', 250, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 250,
             ));
        $this->hasColumn('registro_sanitario', 'string', 50, array(
             'type' => 'string',
             'unique' => false,
             'length' => 50,
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
        $this->hasMany('Formulario516', array(
             'local' => 'id',
             'foreign' => 'cosmetico_id'));

        $this->hasOne('Empresa', array(
             'local' => 'empresa_id',
             'foreign' => 'id'));

        $this->hasOne('LaboratorioFabricante', array(
             'local' => 'laboratorio_fabricante_id',
             'foreign' => 'id'));

        $this->hasOne('FormaCosmetica', array(
             'local' => 'forma_cosmetica_id',
             'foreign' => 'id'));

        $this->hasMany('GrupoCosmetico', array(
             'local' => 'grupo_cosmetico_id',
             'foreign' => 'id'));

        $this->hasMany('Marca', array(
             'local' => 'marca_id',
             'foreign' => 'id'));

        $this->hasOne('Pais', array(
             'local' => 'pais_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}
<?php

/**
 * BaseHigiene
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $producto_id
 * @property integer $empresa_id
 * @property integer $laboratorio_fabricante_id
 * @property string $grupo_higiene
 * @property string $marca
 * @property integer $pais_id
 * @property string $nombre
 * @property string $nombre_detalle
 * @property string $variedades
 * @property string $codigo_nso
 * @property string $vigencia_nso
 * @property string $expediente
 * @property string $registro_sanitario
 * @property Producto $Producto
 * @property Doctrine_Collection $Formulario706
 * @property Empresa $Empresa
 * @property LaboratorioFabricante $LaboratorioFabricante
 * @property Pais $Pais
 * 
 * @method integer               getProductoId()                Returns the current record's "producto_id" value
 * @method integer               getEmpresaId()                 Returns the current record's "empresa_id" value
 * @method integer               getLaboratorioFabricanteId()   Returns the current record's "laboratorio_fabricante_id" value
 * @method string                getGrupoHigiene()              Returns the current record's "grupo_higiene" value
 * @method string                getMarca()                     Returns the current record's "marca" value
 * @method integer               getPaisId()                    Returns the current record's "pais_id" value
 * @method string                getNombre()                    Returns the current record's "nombre" value
 * @method string                getNombreDetalle()             Returns the current record's "nombre_detalle" value
 * @method string                getVariedades()                Returns the current record's "variedades" value
 * @method string                getCodigoNso()                 Returns the current record's "codigo_nso" value
 * @method string                getVigenciaNso()               Returns the current record's "vigencia_nso" value
 * @method string                getExpediente()                Returns the current record's "expediente" value
 * @method string                getRegistroSanitario()         Returns the current record's "registro_sanitario" value
 * @method Producto              getProducto()                  Returns the current record's "Producto" value
 * @method Doctrine_Collection   getFormulario706()             Returns the current record's "Formulario706" collection
 * @method Empresa               getEmpresa()                   Returns the current record's "Empresa" value
 * @method LaboratorioFabricante getLaboratorioFabricante()     Returns the current record's "LaboratorioFabricante" value
 * @method Pais                  getPais()                      Returns the current record's "Pais" value
 * @method Higiene               setProductoId()                Sets the current record's "producto_id" value
 * @method Higiene               setEmpresaId()                 Sets the current record's "empresa_id" value
 * @method Higiene               setLaboratorioFabricanteId()   Sets the current record's "laboratorio_fabricante_id" value
 * @method Higiene               setGrupoHigiene()              Sets the current record's "grupo_higiene" value
 * @method Higiene               setMarca()                     Sets the current record's "marca" value
 * @method Higiene               setPaisId()                    Sets the current record's "pais_id" value
 * @method Higiene               setNombre()                    Sets the current record's "nombre" value
 * @method Higiene               setNombreDetalle()             Sets the current record's "nombre_detalle" value
 * @method Higiene               setVariedades()                Sets the current record's "variedades" value
 * @method Higiene               setCodigoNso()                 Sets the current record's "codigo_nso" value
 * @method Higiene               setVigenciaNso()               Sets the current record's "vigencia_nso" value
 * @method Higiene               setExpediente()                Sets the current record's "expediente" value
 * @method Higiene               setRegistroSanitario()         Sets the current record's "registro_sanitario" value
 * @method Higiene               setProducto()                  Sets the current record's "Producto" value
 * @method Higiene               setFormulario706()             Sets the current record's "Formulario706" collection
 * @method Higiene               setEmpresa()                   Sets the current record's "Empresa" value
 * @method Higiene               setLaboratorioFabricante()     Sets the current record's "LaboratorioFabricante" value
 * @method Higiene               setPais()                      Sets the current record's "Pais" value
 * 
 * @package    anbeed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseHigiene extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('higiene');
        $this->hasColumn('producto_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('empresa_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('laboratorio_fabricante_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('grupo_higiene', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('marca', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
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
        $this->hasColumn('nombre_detalle', 'string', 5, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 5,
             ));
        $this->hasColumn('variedades', 'string', 2000, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 2000,
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
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Producto', array(
             'local' => 'producto_id',
             'foreign' => 'id'));

        $this->hasMany('Formulario706', array(
             'local' => 'id',
             'foreign' => 'higiene_id'));

        $this->hasOne('Empresa', array(
             'local' => 'empresa_id',
             'foreign' => 'id'));

        $this->hasOne('LaboratorioFabricante', array(
             'local' => 'laboratorio_fabricante_id',
             'foreign' => 'id'));

        $this->hasOne('Pais', array(
             'local' => 'pais_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}
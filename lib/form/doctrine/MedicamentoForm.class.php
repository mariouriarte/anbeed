<?php

/**
 * Medicamento form.
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class MedicamentoForm extends BaseMedicamentoForm
{
    public function configure()
    {
        parent::setup();
        unset($this['created_at'], $this['updated_at'], 
              $this['formula_cc_id'], $this['created_by'],
              $this['updated_by']);
      
        $this->widgetSchema['producto_id'] = new sfWidgetFormInputHidden();
        
        //La empresa_id lo haremos hidden por que ya tenemos ese id
        $this->widgetSchema['empresa_id'] = new sfWidgetFormInputHidden();
        
        //Autocompletar Labs
        $this->widgetSchema['laboratorio_fabricante_id']= new sfWidgetFormDoctrineJQueryAutocompleter(
                  array( 'model'=>'LaboratorioFabricante',
                          'url'=>sfContext::getInstance()->getRouting()->generate('buscar_labs')
           ));
          
        //Autocompletar Forma Farmaceutica
        $this->widgetSchema['forma_farmaceutica_id']= new sfWidgetFormDoctrineJQueryAutocompleter(
                  array( 'model'=>'FormaFarmaceutica',
                          'url'=>sfContext::getInstance()->getRouting()->generate('buscar_ffarmaceutica')
        ));
        //Autocompletar Via de Administracion
        $this->widgetSchema['via_administracion_id']= new sfWidgetFormDoctrineJQueryAutocompleter(
                  array( 'model'=>'ViaAdministracion',
                          'url'=>sfContext::getInstance()->getRouting()->generate('buscar_via')
        ));
        //Autocompletar Tipo de ventas
        $this->widgetSchema['tipo_venta_id']= new sfWidgetFormDoctrineJQueryAutocompleter(
                  array( 'model'=>'TipoVenta',
                          'url'=>sfContext::getInstance()->getRouting()->generate('buscar_venta')
        ));
        
        /*AJUSTANDO LOS TAMAños*/
        $this->widgetSchema['laboratorio_fabricante_id']->setAttribute('size' , 80);
        $this->widgetSchema['nombre_comercial']->setAttribute('size' , 50);
        $this->widgetSchema['nombre_generico']->setAttribute('size' , 50);
        $this->widgetSchema['forma_farmaceutica_id']->setAttribute('size' , 50);
        $this->widgetSchema['concentracion']->setAttribute('size' , 50);
        $this->widgetSchema['via_administracion_id']->setAttribute('size' , 50);
        $this->widgetSchema['accion_terapeutica']->setAttribute('cols' , 80);
        $this->widgetSchema['tipo_venta_id']->setAttribute('size' , 50);
        $this->widgetSchema['conservacion']->setAttribute('size' , 50);
        $this->widgetSchema['especificacion_envase']->setAttribute('cols' , 80);
        $this->widgetSchema['envase_clinico']->setAttribute('cols' , 80);
        $this->widgetSchema['descripcion']->setAttribute('cols' , 80);
      
    }
}

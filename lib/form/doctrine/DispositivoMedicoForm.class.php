<?php

/**
 * DispositivoMedico form.
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class DispositivoMedicoForm extends BaseDispositivoMedicoForm
{
  public function configure()
  {
      parent::setup();
      unset($this['created_at'], $this['updated_at'], $this['created_by'], $this['updated_by']);
      
      $this->widgetSchema['producto_id'] = new sfWidgetFormInputHidden();
      //La empresa_id lo haremos hidden por que ya tenemos ese id
      $this->widgetSchema['empresa_id'] = new sfWidgetFormInputHidden();
      
      $this->widgetSchema['producto_id'] = new sfWidgetFormInputHidden();
      //Autocompletar Labs
      $this->widgetSchema['laboratorio_fabricante_id']= new sfWidgetFormDoctrineJQueryAutocompleter(
                array( 'model'=>'LaboratorioFabricante',
                        'url'=>sfContext::getInstance()->getRouting()->generate('buscar_labs')
         ));
      
      /*AJUSTANDO LOS TAMAños*/
      $this->widgetSchema['laboratorio_fabricante_id']->setAttribute('size' , 80);
      $this->widgetSchema['nombre_comercial']->setAttribute('size' , 50);
      $this->widgetSchema['nombre_generico']->setAttribute('size' , 50);
      $this->widgetSchema['clasificacion_riesgo']->setAttribute('cols' , 80);
      $this->widgetSchema['codigo_internacional']->setAttribute('size' , 50);
      $this->widgetSchema['indicaciones']->setAttribute('cols' , 80);
      $this->widgetSchema['presentacion']->setAttribute('cols' , 80);
      $this->widgetSchema['condicion_empaque']->setAttribute('cols' , 80);
      $this->widgetSchema['vida_util']->setAttribute('cols' , 80);
      $this->widgetSchema['metodo_desecho']->setAttribute('cols' , 80);
      $this->widgetSchema['descripcion']->setAttribute('cols' , 80);
      $this->widgetSchema['formula_cc']->setAttribute('cols' , 80);
  }
}

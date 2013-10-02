<?php

/**
 * Reactivo form.
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ReactivoForm extends BaseReactivoForm
{
  public function configure()
  {
      parent::setup();
      unset($this['created_at'], $this['updated_at'], $this['created_by'], $this['updated_by']);
      
      $this->widgetSchema['producto_id'] = new sfWidgetFormInputHidden();
      //La empresa_id lo haremos hidden por que ya tenemos ese id
      $this->widgetSchema['empresa_id'] = new sfWidgetFormInputHidden();
      //Autocompletar Labs
      $this->widgetSchema['laboratorio_fabricante_id']= new sfWidgetFormDoctrineJQueryAutocompleter(
                array( 'model'=>'LaboratorioFabricante',
                        'url'=>sfContext::getInstance()->getRouting()->generate('buscar_labs')
         ));
      
      
      $this->widgetSchema['laboratorio_fabricante_id']->setAttribute('size' , 50);
  }
}

<?php

/**
 * Cosmetico form.
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CosmeticoForm extends BaseCosmeticoForm
{
  public function configure()
  {
       unset($this['created_at'], $this['updated_at'], $this['producto_id'], $this['created_by'], $this['updated_by']);
      //La empresa_id lo haremos hidden por que ya tenemos ese id
      $empresa = sfContext::getInstance()->getUser()->getAttribute('empresa');
      $this->widgetSchema['empresa_id'] = new sfWidgetFormInputHidden(
            array(), array('value' => $empresa->getId()));
      
       //Autocompletar Labs
      $this->widgetSchema['laboratorio_fabricante_id']= new sfWidgetFormDoctrineJQueryAutocompleter(
                array( 'model'=>'LaboratorioFabricante',
                        'url'=>sfContext::getInstance()->getRouting()->generate('buscar_labs')
         ));
      
      //Autocompletar Forma Cosmetica
      $this->widgetSchema['forma_cosmetica_id']= new sfWidgetFormDoctrineJQueryAutocompleter(
                array( 'model'=>'FormaCosmetica',
                        'url'=>sfContext::getInstance()->getRouting()->generate('buscar_fcosmetica')
      ));
      //Autocompletar grupo cosmetico
      $this->widgetSchema['grupo_cosmetico_id']= new sfWidgetFormDoctrineJQueryAutocompleter(
                array( 'model'=>'GrupoCosmetico',
                        'url'=>sfContext::getInstance()->getRouting()->generate('buscar_gcosmetico')
      ));
      //Autocompletar marcas
      $this->widgetSchema['marca_id']= new sfWidgetFormDoctrineJQueryAutocompleter(
                array( 'model'=>'Marca',
                        'url'=>sfContext::getInstance()->getRouting()->generate('buscar_marca')
      ));
      //Autocompletar paises
      $this->widgetSchema['pais_id']= new sfWidgetFormDoctrineJQueryAutocompleter(
                array( 'model'=>'Pais',
                        'url'=>sfContext::getInstance()->getRouting()->generate('buscar_paises')
      ));
  }
}

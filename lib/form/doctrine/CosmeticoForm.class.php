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

        /*AJUSTANDO LOS TAMAños*/
        $this->widgetSchema['laboratorio_fabricante_id']->setAttribute('size' , 50);
        $this->widgetSchema['nombre']->setAttribute('size' , 50);
        $this->widgetSchema['forma_cosmetica_id']->setAttribute('size' , 50);
        $this->widgetSchema['grupo_cosmetico_id']->setAttribute('size' , 50);
        $this->widgetSchema['marca']->setAttribute('size' , 50);
        $this->widgetSchema['descripcion']->setAttribute('cols' , 80);
        $this->widgetSchema['pais_id']->setAttribute('size' , 50);
    }
}

<?php

/**
 * Higiene form.
 *
 * @package    anbeed
 * @subpackage form
 * @author     Mario Uriarte
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class HigieneForm extends BaseHigieneForm
{
    public function configure()
    {
        unset($this['created_at'], $this['updated_at']);
        
        //// Empresa
        $empresa = sfContext::getInstance()->getUser()->getAttribute('empresa');
        $this->widgetSchema['empresa_id'] = new sfWidgetFormInputHidden(
            array(), array('value' => $empresa->getId()));
        
        //// Laboratorio
        $this->widgetSchema['laboratorio_fabricante_id']= new sfWidgetFormDoctrineJQueryAutocompleter(
            array('model' => 'LaboratorioFabricante',
                  'url'   =>sfContext::getInstance()->getRouting()->generate('buscar_labs')
        ));
        
        //// Marca
        $this->widgetSchema['marca_id']= new sfWidgetFormDoctrineJQueryAutocompleter(
            array('model'=>'Marca',
                  'url'=>sfContext::getInstance()->getRouting()->generate('buscar_marca')
        ));
        
        //// Pais de codigo NSO 
        $this->widgetSchema['pais_id']= new sfWidgetFormDoctrineJQueryAutocompleter(
            array('model'=>'Pais',
                  'url'=>sfContext::getInstance()->getRouting()->generate('buscar_paises')
        ));
        
        
    }
}

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
    protected $nombre_detalle = array('PHD' => 'PHD', 'PAHP' => 'PAHP');

    public function configure()
    {
        parent::setup();
        unset($this['created_at'], $this['updated_at'], 
              $this['created_by'], $this['updated_by']);
        
        $this->widgetSchema['producto_id'] = new sfWidgetFormInputHidden();
        
//// Empresa
        $this->widgetSchema['empresa_id'] = new sfWidgetFormInputHidden();
        
        //// Empresa
//        $this->widgetSchema['producto_id'] = new sfWidgetFormInputHidden();
//        $this->validatorSchema['producto_id'] = new sfValidatorString(array('required' => false));
        
        //// Laboratorio
        $this->widgetSchema['laboratorio_fabricante_id']= new sfWidgetFormDoctrineJQueryAutocompleter(
            array('model' => 'LaboratorioFabricante',
                  'url'   =>sfContext::getInstance()->getRouting()->generate('buscar_labs')
        ));
        
        //// Marca
//        $this->widgetSchema['grupo_higiene']= new sfWidgetFormDoctrineJQueryAutocompleter(
//            array('model'=>'GrupoHigiene',
//                  'url'=>sfContext::getInstance()->getRouting()->generate('buscar_grupo_higiene')
//        ));
        
        //// Pais de codigo NSO 
        $this->widgetSchema['pais_id']= new sfWidgetFormDoctrineJQueryAutocompleter(
            array('model'=>'Pais',
                  'url'=>sfContext::getInstance()->getRouting()->generate('buscar_paises')
        ));
        
        //// Nombre detalle PHD PAHP
        $this->widgetSchema['nombre_detalle'] = new sfWidgetFormChoice(
            array('expanded' => true, 
                  'choices'  => $this->nombre_detalle));
        $this->validatorSchema['nombre_detalle'] = new sfValidatorString(array('required' => true));
        
        
        // Fecha de vigencia NSO
        $years = range(date('Y') - 10, date('Y') + 10);   
        $this->widgetSchema['vigencia_nso'] = new sfWidgetFormJQueryDate(
            array('culture' => 'es','date_widget' => new sfWidgetFormDate(array(
                  'format' => '%day%%month%%year%',  
                  'years' => array_combine($years, $years))), ));
        
        /*AJUSTANDO LOS TAMAños*/
        $this->widgetSchema['presentacion']->setAttribute('size' , 50);
        $this->widgetSchema['laboratorio_fabricante_id']->setAttribute('size' , 50);
        $this->widgetSchema['nombre']->setAttribute('size' , 50);
        $this->widgetSchema['grupo_higiene']->setAttribute('size' , 50);
        $this->widgetSchema['variedades']->setAttribute('cols' , 50);
        $this->widgetSchema['marca']->setAttribute('size' , 50);
        $this->widgetSchema['pais_id']->setAttribute('size' , 50);
        
    }
}

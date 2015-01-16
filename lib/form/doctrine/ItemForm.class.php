<?php

/**
 * Item form.
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ItemForm extends BaseItemForm
{
    public function configure()
    {
        unset($this['created_at'], $this['updated_at'], $this['created_by'], $this['updated_by']);
        $this->widgetSchema['formulario11_id'] = new sfWidgetFormInputHidden(
              array());
        
        //productos
        $this->widgetSchema['producto_id']
              ->setOption('add_empty', 'Seleccione producto')
              ->setOption('table_method', 'ProductosEmpresa')
              ->setAttribute('onChange','Producto();');
             # ->setOption('table_method', 'ProductosItemsEmpresa');
        
        //productos unimed
        /*$this->widgetSchema['producto_unimed_id']
              ->setOption('add_empty', 'Seleccione producto de UNIMED')
              ->setAttribute('onChange    ','ProductoUnimed();');
             # ->setOption('table_method', 'ProductosItemsEmpresa');
        */   
        
        // tipo de item
        $this->widgetSchema['tipo_item'] = new sfWidgetFormChoice(
            array('choices' => array(''       => 'Seleccione un tipo de Item',
                                     'ANBEED' => 'ANBEED',
                                     'UNIMED' => 'UNIMED',
                                     'LIBRE'  => 'LIBRE')));
       
        $this->widgetSchema['nombre']->setAttribute('maxlength', 28);
        
        $this->widgetSchema['nombre']->setAttribute('size' , 35);
        $this->widgetSchema['cantidad']->setAttribute('maxlength' ,10);
        $this->widgetSchema['num_lote']->setAttribute('maxlength' ,10);
        //formulario11    
        $this->widgetSchema['formulario11_id'] = new sfWidgetFormInputHidden(array());
        
        $years = range(date('Y') , date('Y') + 10);   
          $this->widgetSchema['fecha_vencimiento'] = new sfWidgetFormJQueryDate(
              array('culture' => 'es','date_widget' => new sfWidgetFormDate(array(
                      'format' => '%day%%month%%year%',
                      'years' => array_combine($years, $years))), ));
          
        $this->widgetSchema['producto_unimed_id']= new sfWidgetFormDoctrineJQueryAutocompleter(
            array('model' => 'ProductoUnimed',
                  'url'   => sfContext::getInstance()->getRouting()->generate('buscar_producto_unimed')));
            //array('onChange' => 'ProductoUnimed();'));
    }
}

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
      unset($this['created_at'], $this['updated_at']);
      $this->widgetSchema['formulario11_id'] = new sfWidgetFormInputHidden(
            array());
      
      //prodcutos
      $this->widgetSchema['producto_id']
            ->setOption('add_empty', 'Seleccione producto')
            ->setOption('table_method', 'ProductosItemsEmpresa');
      
      //formulario11    
      $this->widgetSchema['formulario11_id'] = new sfWidgetFormInputHidden(
            array());
  }
}

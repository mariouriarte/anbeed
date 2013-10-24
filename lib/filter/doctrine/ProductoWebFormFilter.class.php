<?php

/**
 * ProductoWeb filter form.
 *
 * @package    anbeed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProductoWebFormFilter extends BaseProductoWebFormFilter
{
  public function configure()
  {

      $this->widgetSchema['categoria_id']->setOption('add_empty', ' - Seleccione Categoría - ');
      $this->widgetSchema['linea_id']->setOption('add_empty', ' - Seleccione Línea o marca - ');
      $this->widgetSchema['pais_id']->setOption('add_empty', ' - Seleccione País de Procedencia - ');
      $this->widgetSchema['nombre']->setAttribute('size' , 16);
    //otra opcion  
    //$this->getWidget('categoria_id')->setOption('add_empty', 'Seleccione Empresa');
  }
}

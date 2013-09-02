<?php

/**
 * EmisionCorrespondencia form.
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class EmisionCorrespondenciaForm extends BaseEmisionCorrespondenciaForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at'], $this['created_by'], $this['updated_by']);
      
      $this->widgetSchema['tipo_documento_id']->setOption('add_empty', 'Seleccione Tipo Documento');
      
      $this->widgetSchema['empresa_id'] = new sfWidgetFormDoctrineChoice(
            array('model'        => 'Empresa',
                  'add_empty'    => 'Seleccione Empresa'));
      
      $this->widgetSchema['emisor_id']->setOption('add_empty', 'Seleccione Emisor');
      
      $years = range(date('Y') - 10, date('Y'));   
        $this->widgetSchema['factura_fecha'] = new sfWidgetFormJQueryDate(
            array(  'culture' => 'es',
                    'date_widget' => new sfWidgetFormDate(array(
                    'years' => array_combine($years, $years))), ));
      
      $this->widgetSchema['codigo_producto_id']->setOption('add_empty', 'Seleccione Código');
      
      $this->widgetSchema['forma_cosmetica_id']->setOption('add_empty', 'Seleccione Forma');
      
      $years = range(date('Y') , date('Y') + 10);   
        $this->widgetSchema['fecha_inicio_vigencia'] = new sfWidgetFormJQueryDate(
            array('culture' => 'es','date_widget' => new sfWidgetFormDate(array(
                  'years' => array_combine($years, $years))), ));
      
                
       $this->widgetSchema['fecha_envio'] = new sfWidgetFormJQueryDate(
            array('culture' => 'es',
                  'default' => date('Y-m-d '),
                  'date_widget' => new sfWidgetFormDate(array(
                  'years' => array_combine($years, $years)))));
      
// de resguardo por si se necesita cambiar mas alla ## no borrar!
//      $this->widgetSchema['producto_id'] = new sfWidgetFormDoctrineDependentSelect(
//            array('model'        => 'Producto',
//                  'depends'      => 'empresa_id',
//                  #'ref_method'   => 'empresa_id',
//                  #'key_method'   => 'empresa_id',
//                  'ajax'         => true,
//                  //'url'          =>  sfContext::getInstance()->getController()->genUrl('emisionc/AjaxListarProductos'),  
//                  'url'          =>  sfContext::getInstance()->getRouting()->generate('listar_productos'),
//                  #'table_method' => 'ListarProductos',
//                  'add_empty'    => 'Seleccione un producto'));
////       $this->validatorSchema['producto_id'] = new sfValidatorCallback(
////           array('callback' => array($this, 'ListarProductos')));
  }
}

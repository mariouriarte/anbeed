<?php

/**
 * Medicamento form.
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class MedicamentoForm extends BaseMedicamentoForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at'], $this['producto_id'], $this['formula_cc_id']);
      
      //Autocompletar Forma Farmaceutica
      $this->widgetSchema['forma_farmaceutica_id']= new sfWidgetFormDoctrineJQueryAutocompleter(
                array( 'model'=>'FormaFarmaceutica',
                        'url'=>sfContext::getInstance()->getRouting()->generate('buscar_ffarmaceutica')
      ));
      //Autocompletar Via de Administracion
      $this->widgetSchema['via_administracion_id']= new sfWidgetFormDoctrineJQueryAutocompleter(
                array( 'model'=>'ViaAdministracion',
                        'url'=>sfContext::getInstance()->getRouting()->generate('buscar_via')
      ));
      //Autocompletar Tipo de ventas
      $this->widgetSchema['tipo_venta_id']= new sfWidgetFormDoctrineJQueryAutocompleter(
                array( 'model'=>'TipoVenta',
                        'url'=>sfContext::getInstance()->getRouting()->generate('buscar_venta')
      ));
  }
}

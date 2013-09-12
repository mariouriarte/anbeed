<?php

/**
 * Formulario11 form.
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class Formulario11Form extends BaseFormulario11Form
{
  public function configure()
  {
        unset($this['created_at'], $this['updated_at'], $this['created_by'], $this['updated_by']);
        $years = range(date('Y') - 0, date('Y'));   
        
        $this->widgetSchema['formulario_id'] = new sfWidgetFormInputHidden();
        // empresa
        $this->widgetSchema['empresa_id'] = new sfWidgetFormInputHidden();
        
        // fecha
        $this->widgetSchema['fecha'] = new sfWidgetFormJQueryDate(
            array('culture'     => 'es',
                  'default'     => date('Y-m-d'),
                  'date_widget' => new sfWidgetFormDate(array(
                  'years'       => array_combine($years, $years)))));
        
        // fecha inicio vigencia
        $this->widgetSchema['fecha_inicio_vigencia'] = new sfWidgetFormJQueryDate(
            array('culture'     => 'es',
                  'date_widget' => new sfWidgetFormDate(array(
                  'years'       => array_combine($years, $years)))));
        
        // tipo de despacho
        $this->widgetSchema['tipo_despacho_id'] = new sfWidgetFormDoctrineChoice(
            array('expanded' => true,
                 'model'     => 'TipoDespacho'), 
            array('onclick'  => 'chMd();'));
        
        // fecha licencia
        $this->widgetSchema['licencia_fecha'] = new sfWidgetFormJQueryDate(
            array('culture'     => 'es',
                  'date_widget' => new sfWidgetFormDate(array(
                  'years'       => array_combine($years, $years)))));
        
        // fecha factura
        $this->widgetSchema['factura_fecha'] = new sfWidgetFormJQueryDate(
            array('culture'     => 'es',
                  'date_widget' => new sfWidgetFormDate(array(
                  'years'       => array_combine($years, $years)))));
        
        $this->widgetSchema['sustancias_quimicas']->setAttribute('onClick','siSustanciaLicencia();');
        $this->widgetSchema['licencia_previa']->setAttribute('onClick','siLicenciaSustancia();');
        
        $this->widgetSchema['otro']->setAttribute('onKeyUp','copiarOtro();');
        $this->widgetSchema['otro']->setAttribute('onBlur','copiarOtro();');
        $this->widgetSchema['otro']->setAttribute('disabled', 'disabled');
        //  $this->widgetSchema['por_tratarse']->setAttribute('disabled', 'disabled');
        
        /*AJUSTANDO LOS TAMAños*/
  }
}

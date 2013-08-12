<?php

/**
 * Formulario7 form.
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class Formulario7Form extends BaseFormulario7Form
{
  public function configure()
  {
        unset($this['created_at'], $this['updated_at']);
        $years = range(date('Y') - 0, date('Y'));   
        
        //$producto = sfContext::getInstance()->getUser()->getAttribute('producto');
        
        //// pproducto
        $this->widgetSchema['producto_id'] = new sfWidgetFormInputHidden(
            array());
        
        //// fecha
        $this->widgetSchema['fecha'] = new sfWidgetFormJQueryDate(
            array('culture'     => 'es',
                  'default'     => date('Y-m-d'),
                  'date_widget' => new sfWidgetFormDate(array(
                  'years'       => array_combine($years, $years)))));
        
        //// fecha inicio vigencia
        $this->widgetSchema['fecha_inicio_vigencia'] = new sfWidgetFormJQueryDate(
            array('culture'     => 'es',
                  'date_widget' => new sfWidgetFormDate(array(
                  'years'       => array_combine($years, $years)))));
        
        //// tipo de calificacion
        $this->widgetSchema['tipo_calificacion_id'] = new sfWidgetFormDoctrineChoice(
            array('expanded' => true,
                 'model'     => 'TipoCalificacion'));
  }
}

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
        unset($this['created_at'], $this['updated_at'], $this['created_by'], $this['updated_by']);
        $years = range(date('Y') - 0, date('Y'));   
        
        $this->widgetSchema['formulario_id'] = new sfWidgetFormInputHidden();
        
        // producto
        $this->widgetSchema['producto_id'] = new sfWidgetFormInputHidden(
            array());
        
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
        
        // tipo de calificacion
        $this->widgetSchema['tipo_calificacion_id'] = new sfWidgetFormDoctrineChoice(
            array('expanded' => true,
                 'model'     => 'TipoCalificacion'));
         
        // Autocompletar Via de Administracion
        $this->widgetSchema['via_administracion_id']= new sfWidgetFormDoctrineJQueryAutocompleter(
                array( 'model'=> 'ViaAdministracion',
                        'url' => sfContext::getInstance()->getRouting()->generate('buscar_via')
        ));
      
        // Autocompletar Forma Farmaceutica
        $this->widgetSchema['forma_farmaceutica_id']= new sfWidgetFormDoctrineJQueryAutocompleter(
                array( 'model'=> 'FormaFarmaceutica',
                        'url' => sfContext::getInstance()->getRouting()->generate('buscar_ffarmaceutica')
        ));
  }
}

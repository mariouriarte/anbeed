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
        
        $this->widgetSchema['aval_id'] = new sfWidgetFormDoctrineChoice(
                array('model'        => 'Aval',
                  'add_empty'    => 'Seleccione el Nombre Generico'));
        
        $this->validatorSchema['aval_id'] = new sfValidatorDoctrineChoice(
            array('model' => 'Aval', 'required' => true));
        
        // fecha
        $this->widgetSchema['fecha'] = new sfWidgetFormJQueryDate(
            array('culture'     => 'es',
                  'default'     => date('Y-m-d'),
                  'date_widget' => new sfWidgetFormDate(array(
                      'format' => '%day%%month%%year%',
                      'years'       => array_combine($years, $years)))));
        
        // fecha inicio vigencia
        $this->widgetSchema['fecha_inicio_vigencia'] = new sfWidgetFormJQueryDate(
            array('culture'     => 'es',
                  'date_widget' => new sfWidgetFormDate(array(
                      'format' => '%day%%month%%year%',
                      'years'       => array_combine($years, $years)))));
        
        // tipo de calificacion
        $this->widgetSchema['tipo_calificacion_id'] = new sfWidgetFormDoctrineChoice(
            array('expanded' => true,
                 'model'     => 'TipoCalificacion'));
         
        // Autocompletar Via de Administracion
//        $this->widgetSchema['via_administracion_id']= new sfWidgetFormDoctrineJQueryAutocompleter(
//                array( 'model'=> 'ViaAdministracion',
//                        'url' => sfContext::getInstance()->getRouting()->generate('buscar_via')
//        ));   
        
        //$this->widgetSchema['via_administracion_id']= new sfWidgetFormInput();
                 
      
        // Autocompletar Forma Farmaceutica
//        $this->widgetSchema['forma_farmaceutica_id']= new sfWidgetFormDoctrineJQueryAutocompleter(
//                array( 'model'=> 'FormaFarmaceutica',
//                        'url' => sfContext::getInstance()->getRouting()->generate('buscar_ffarmaceutica')
//        ));
        
        
        
       # $this->widgetSchema['acta_comunicacion']->setAttribute('size' , 50);
        $this->widgetSchema['comision']->setAttribute('size' , 50);
        $this->widgetSchema['calificacion']->setAttribute('size' , 50);
        $this->widgetSchema['accion_terapeutica']->setAttribute('cols' , 80);
        $this->widgetSchema['dosis']->setAttribute('cols' , 80);
        $this->widgetSchema['indicaciones']->setAttribute('cols' , 80);
        $this->widgetSchema['contraindicaciones']->setAttribute('cols' , 80);
        $this->widgetSchema['precauciones']->setAttribute('cols' , 80);
        $this->widgetSchema['efectos_secundarios']->setAttribute('cols' , 80);
        $this->widgetSchema['observaciones']->setAttribute('cols' , 80);
    
  }
}

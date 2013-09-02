<?php

/**
 * Formulario516 form.
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class Formulario516Form extends BaseFormulario516Form
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at'], $this['created_by'], $this['updated_by']);
      $years = range(date('Y') - 0, date('Y'));   
      
//      //if($this->widgetSchema['maquila_embasador']->getValue()!= NULL)
//      $this->widgetSchema['maquila_embasador']->setAttribute('disabled', 'disabled');
      
      
      $cosmetico = sfContext::getInstance()->getUser()->getAttribute('cosmetico');
      // Asigna el id del cosmetico para el form516 
      $this->widgetSchema['cosmetico_id'] = new sfWidgetFormInputHidden(
           array(), array('value' => $cosmetico->getId()));
      
      $this->widgetSchema['fecha'] = new sfWidgetFormJQueryDate(
           array('culture' => 'es',
                 'default' => date('Y-m-d'),
                 'date_widget' => new sfWidgetFormDate(array(
                 'years' => array_combine($years, $years)))));
      
      $this->widgetSchema['fecha_inicio_vigencia'] = new sfWidgetFormJQueryDate(
           array('culture' => 'es',
                 'date_widget' => new sfWidgetFormDate(array(
                 'years' => array_combine($years, $years)))));
      
      
      $this->widgetSchema['datos'] = new sfWidgetFormChoice(
            array('expanded' => true, 
                  'choices'=>  array('TITULAR', 'RESPONSABLE DE LA COMERCIALIZACIÓN'),       
  ));
      
      $this->widgetSchema['datos_titular'] = new sfWidgetFormChoice(
            array('expanded' => true, 
                  'choices'=>  array('REPRESENTANTE LEGAL', 'APODERADO'),       
  ));
      
      $this->widgetSchema['tipo_tramite_formulario_id'] = new sfWidgetFormDoctrineChoice(
           array('expanded' => true,
                 'model'    => 'TipoTramiteFormulario'));
      
      $this->widgetSchema['tipo_tramite_formulario_id'] = new sfWidgetFormDoctrineChoice(
           array('expanded' => true,
                 'model'    => 'TipoTramiteFormulario'));
      
      //$this->widgetSchema['tipo_tramite_formulario_id']->addOption('order_by',array('id','asc'));
  }
}

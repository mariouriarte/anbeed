<?php

/**
 * Formulario706 form.
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class Formulario706Form extends BaseFormulario706Form
{
    public function configure()
    {
        unset($this['created_at'], $this['updated_at']);
        $years = range(date('Y') - 0, date('Y'));   
        
        $higiene = sfContext::getInstance()->getUser()->getAttribute('higiene');
        
        //// higiene
        $this->widgetSchema['higiene_id'] = new sfWidgetFormInputHidden(
            array(), array('value' => $higiene->getId()));
      
        //// datos
        $this->widgetSchema['datos'] = new sfWidgetFormChoice(
            array('expanded' => true, 
                  'choices'  =>  array('TITULAR', 'IMPORTACIÓN')));
        
        //// datos titular
        $this->widgetSchema['datos_titular'] = new sfWidgetFormChoice(
            array('expanded' => true, 
                  'choices'  =>  array('REPRESENTANTE LEGAL', 'APODERADO')));
        
        //// tipo de tramite
        $this->widgetSchema['tipo_tramite_formulario_id'] = new sfWidgetFormDoctrineChoice(
            array('expanded' => true,
                 'model'     => 'TipoTramiteFormulario'));
        
        //// fecha
        $this->widgetSchema['fecha'] = new sfWidgetFormJQueryDate(
            array('culture'     => 'es',
                  'default'     => date('Y-m-d'),
                  'date_widget' => new sfWidgetFormDate(array(
                  'years'       => array_combine($years, $years)))));
        
    }
}

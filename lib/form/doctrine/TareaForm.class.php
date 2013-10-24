<?php

/**
 * Tarea form.
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class TareaForm extends BaseTareaForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at'], 
            $this['created_by'], $this['updated_by']);
      
      $years = range(date('Y') - 10, date('Y'));   
        $this->widgetSchema['fecha_estimada'] = new sfWidgetFormJQueryDate(
            array('culture' => 'es','date_widget' => new sfWidgetFormDate(array(
                  'format' => '%day%%month%%year%',  
                  'years' => array_combine($years, $years))), ));
      
      
      if(sfContext::getInstance()->getModuleName() == "tareas")
      {
        $this->widgetSchema['estado_id'] = new sfWidgetFormInputHidden();
      }
      
      $this->widgetSchema['user_id']->setOption('add_empty', ' - Seleccione usuario -');
      
      
      /*AJUSTANDO LOS TAMAños*/
      $this->widgetSchema['nombre']->setAttribute('size' , 50);
      $this->widgetSchema['descripcion']->setAttribute('rows' , 5);
      $this->widgetSchema['descripcion']->setAttribute('cols' , 50);
  }
}

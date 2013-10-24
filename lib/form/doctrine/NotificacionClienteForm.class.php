<?php

/**
 * NotificacionCliente form.
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class NotificacionClienteForm extends BaseNotificacionClienteForm
{
    public function configure()
    {
        unset($this['created_at'], $this['updated_at'],
              $this['updated_by'], $this['created_by']);
        
        $years = range(date('Y') - 10, date('Y'));   
        $this->widgetSchema['fecha'] = new sfWidgetFormJQueryDate(
            array('culture' => 'es','date_widget' => new sfWidgetFormDate(array(
                  'format' => '%day%%month%%year%',  
                  'years' => array_combine($years, $years))), ));
        
    }
}

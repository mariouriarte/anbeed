<?php

/**
 * ComentarioTarea form.
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ComentarioTareaForm extends BaseComentarioTareaForm
{
  public function configure()
  {
       unset($this['created_at'], $this['updated_at'], $this['created_by'], $this['updated_by']);
       
       $this->widgetSchema['tarea_id'] = new sfWidgetFormInputHidden();
       
       $this->widgetSchema['leido'] = new sfWidgetFormInputHidden();
       
      /*AJUSTANDO LOS TAMAños*/
      $this->widgetSchema['comentario']->setAttribute('rows' , 5);
      $this->widgetSchema['comentario']->setAttribute('cols' , 143);
  }
}

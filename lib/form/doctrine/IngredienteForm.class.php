<?php

/**
 * Ingrediente form.
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class IngredienteForm extends BaseIngredienteForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at'], $this['created_by'], $this['updated_by']);
      /*AJUSTANDO LOS TAMAños*/
      $this->widgetSchema['nombre']->setAttribute('size' , 50);
  }
}

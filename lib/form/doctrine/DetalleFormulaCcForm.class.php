<?php

/**
 * DetalleFormulaCc form.
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class DetalleFormulaCcForm extends BaseDetalleFormulaCcForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at'], $this['formula_cc_id'], $this['created_by'], $this['updated_by']);
//      $producto = sfContext::getInstance()->getUser()->getAttribute('producto');
//      $this->widgetSchema['formula_cc_id'] = new sfWidgetFormInputHidden(
//            array());
      
      $this->widgetSchema['ingrediente_id']= new sfWidgetFormDoctrineJQueryAutocompleter(
                array( 'model'=>'Ingrediente',
                        'url'=>sfContext::getInstance()->getRouting()->generate('buscar_ingrediente')
         ));
      //$this->validatorSchema['ingrediente_id']->setOption('required', true);
      if ($this->object->exists())
      {
        $this->widgetSchema['Eliminar'] = new sfWidgetFormInputCheckbox();
        $this->validatorSchema['Eliminar'] = new sfValidatorPass();
      }
      /*AJUSTANDO LOS TAMAños*/
      $this->widgetSchema['ingrediente_id']->setAttribute('size' , 50);
  }
}

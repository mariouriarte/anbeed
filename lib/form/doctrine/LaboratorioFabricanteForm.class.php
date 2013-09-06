<?php

/**
 * LaboratorioFabricante form.
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class LaboratorioFabricanteForm extends BaseLaboratorioFabricanteForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at'], $this['created_by'], $this['updated_by']);
      $this->widgetSchema['pais_id']->setOption('add_empty', 'Seleccione un país');
      ////// ciudad
      $this->widgetSchema['ciudad_id'] = new sfWidgetFormDoctrineDependentSelect(
          array('model'     => 'Ciudad',
                'depends'   => 'Pais',
                'add_empty' => 'Seleccione ciudad'));
      $this->validatorSchema['ciudad_id'] = new sfValidatorDoctrineChoice(
          array('model' => 'Ciudad', 'required' => true));
   
      /*AJUSTANDO LOS TAMAños*/
      $this->widgetSchema['nombre']->setAttribute('size' , 50);
  }
}

<?php

/**
 * FormulaCc form.
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class FormulaCcForm extends BaseFormulaCcForm
{
  public function configure()
  {
        unset($this['created_at'], $this['updated_at']);
        //Form enbebido, Detalle de formulas
        $subForm = new sfForm();
        for ($i = 1; $i < 6; $i++)
        {
            if($this->isNew())
            {
                $detalle = new DetalleFormulaCc();
            }
            else 
            {
              $detalles = Doctrine_Query::create()
                    ->from('DetalleFormulaCc a')                    
                    ->where('a.formulaCc_id = ?', $this->getObject()->getId())
                    ->execute();
        
                $detalle = $detalles[0];
            }   
            $detalle->FormulaCc = $this->getObject();
            
            $form2 = new DetalleFormulaCcForm($detalle);
            $subForm->embedForm( $i , $form2);
        }
            $this->embedForm('Formula CualiCuantitativa', $subForm);
  }
}

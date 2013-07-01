<?php

/**
 * Producto form.
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProductoForm extends BaseProductoForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at']);
      //La empresa_id lo haremos hidden por que ya tenemos ese id
      $this->widgetSchema['empresa_id'] = new sfWidgetFormInputHidden();
      
      if(sfContext::getInstance()->getModuleName() == "prodmed")
        {
            
            //Form enbebido, Medicamento\
            $subForm2 = new sfForm();
            if($this->isNew())
            {
                $medicamento = new Medicamento();
            }
            else 
            {
              $medicamentos = Doctrine_Query::create()
                    ->from('Medicamento a')                    
                    ->where('a.producto_id = ?', $this->getObject()->getId())
                    ->execute();
        
                $medicamento = $medicamentos[0];
            }   
            $medicamento->Producto = $this->getObject();
            
            $form2 = new MedicamentoForm($medicamento);
            $subForm2->embedForm( 1 , $form2);
            $this->embedForm('Nuevo Medicamento', $subForm2);
        }
  }
}
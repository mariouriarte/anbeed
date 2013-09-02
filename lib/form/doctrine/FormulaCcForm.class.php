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
  protected $detallesAEliminar = array();
  public function configure()
  {
      unset($this['created_at'], $this['updated_at'], $this['created_by'], $this['updated_by']);
      $detalle = new DetalleFormulaCc();
      $detalle->setFormulaCc($this->object);
      $detalleForm = new DetalleFormulaCcForm($detalle);
      $this->embedForm('NuevoDetalleFormulaCc', $detalleForm);  

      $this->embedRelation('DetalleFormulaCc');
      
      
  }
  protected function doBind(array $values) {
    // step 3.1
    if ('' === trim($values['NuevoDetalleFormulaCc']['ingrediente_id']) AND
        '' === trim($values['NuevoDetalleFormulaCc']['cantidad']) AND
        '' === trim($values['NuevoDetalleFormulaCc']['unidad'])) {
      $this->validatorSchema['NuevoDetalleFormulaCc'] = new sfValidatorPass();
    }

    // para eliminar
     if (isset($values['DetalleFormulaCc'])) {
      foreach ($values['DetalleFormulaCc'] as $key => $detalless) {
        if (isset($detalless['Eliminar']) && $detalless['id']) {
          $this->detallesAEliminar[$key] = $detalless['id'];
        }
      }
    }
    
    
    parent::doBind($values);
  }

   protected function doUpdateObject($values) {
    // step 4.4
    if (count($this->detallesAEliminar)) {
      foreach ($this->detallesAEliminar as $index => $id) {
        unset($values['DetalleFormulaCc'][$index]);
        unset($this->object['DetalleFormulaCc'][$index]);
        DetalleFormulaCcTable::getInstance()->findOneById($id)->delete();
      }
    }

    parent::doUpdateObject($values);
  }
  public function saveEmbeddedForms($con = null, $forms = null)
  {
    if (null === $con) {
      $con = $this->getConnection();
    }

    // step 3.2
    if (null === $forms) {
      $detalle = $this->getValue('NuevoDetalleFormulaCc');
      $forms = $this->embeddedForms;
     
      if ('' === trim($detalle['ingrediente_id']) AND
          '' === trim($detalle['cantidad']) AND
          '' === trim($detalle['unidad'])) {
          unset($forms['NuevoDetalleFormulaCc']);
      }

        }

    foreach ($forms as $form){
      if ($form instanceof sfFormObject) 
      {
           if (!in_array($form->getObject()->getId(), $this->detallesAEliminar)) 
           {
                //var_dump($form);
                //var_dump($detalle['ingrediente_id'][0]);
                //die();
                $form->saveEmbeddedForms($con);
                $form->getObject()->save($con);
           }
      } 
      else {
        $this->saveEmbeddedForms($con, $form->getEmbeddedForms());
      }
    }
  }
  
}

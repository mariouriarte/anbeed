<?php

/**
 * Persona form.
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PersonaRegenteForm extends BasePersonaForm
{
    public function configure()
    {
        unset($this['created_at'], $this['updated_at']);
      
        $this->widgetSchema['fecha_nacimiento'] = new sfWidgetFormJQueryDate(
            array('culture' => 'es'));
        
        // Form enbebido, Regente Farmaceutico
//        $subForm2 = new sfForm();
//
//        $regente = new RegenteFarmaceutico();
//        $regente->Persona = $this->getObject();
//
//        $form2 = new RegenteFarmaceuticoForm($regente);
//
//        $subForm2->embedForm(1, $form2);
//        $this->embedForm('newRegente', $subForm2);
    }
}
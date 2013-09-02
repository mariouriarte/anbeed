<?php

/**
 * Persona form.
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PersonaForm extends BasePersonaForm
{
    public function configure()
    {
        unset($this['created_at'], $this['updated_at'], $this['created_by'], $this['updated_by']);
        
        //Fecha de nacimiento
        $years = range(date('Y') - 80, date('Y'));   
        $this->widgetSchema['fecha_nacimiento'] = new sfWidgetFormJQueryDate(
            array('culture' => 'es','date_widget' => new sfWidgetFormDate(array(
                  'years' => array_combine($years, $years))), ));
        
        $this->validatorSchema['fecha_nacimiento'] = new sfValidatorDate(
            array('required' => true));
       
        if(sfContext::getInstance()->getModuleName() == "personalegal")
        {
             // Form enbebido, Representante Legal
            $subForm = new sfForm();

            $representante = new RepresentanteLegal();
            $representante->Persona = $this->getObject();

            $form = new RepresentanteLegalForm($representante);

            $subForm->embedForm(1, $form);
            $this->embedForm('Nuevo Representante', $subForm);
        }
        
        if(sfContext::getInstance()->getModuleName() == "personaregente")
        {
            
            //Form enbebido, Regente Farmaceutico\
            $subForm2 = new sfForm();
            if($this->isNew())
            {
                $regente = new RegenteFarmaceutico();
            } else {
//                $regente = Doctrine::getTable('RegenteFarmaceutico')
//                    ->find(1);
                $regentes = Doctrine_Query::create()
                    ->from('RegenteFarmaceutico a')                    
                    ->where('a.persona_id = ?', $this->getObject()->getId())
                    ->execute();
        
                $regente = $regentes[0];
            }
            
            $regente->Persona = $this->getObject();
            
            $form2 = new RegenteFarmaceuticoForm($regente);
            $subForm2->embedForm(1, $form2);
            $this->embedForm('Nuevo Regente', $subForm2);
        }
        
    }
}
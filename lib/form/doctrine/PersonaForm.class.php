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
    protected $expedido = array(''   => ' - Expedido en',
                                'LP' => 'LP',
                                'SC' => 'SC',
                                'SR' => 'SR',
                                'OR' => 'OR',
                                'BN' => 'BN',
                                'CB' => 'CB',
                                'TJ' => 'TJ',
                                'PT' => 'PT',
                                'PD' => 'PD');
    
    public function configure()
    {
        unset($this['created_at'], $this['updated_at'],
              $this['created_by'], $this['updated_by']);
        
        // Fecha de nacimiento
        $years = range(date('Y') - 80, date('Y'));   
        $this->widgetSchema['fecha_nacimiento'] = new sfWidgetFormJQueryDate(
            array('culture'     => 'es',
                  'date_widget' => new sfWidgetFormDate(
                          array('format' => '%day%%month%%year%',
                                'years'  => array_combine($years, $years)))));
        
        // Expedido
        $this->widgetSchema['expedido'] = new sfWidgetFormChoice(
            array('expanded' => false,
                  'choices'  => $this->expedido));
        $this->validatorSchema['expedido'] = new sfValidatorString(array('required' => false));
       
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
        
        if(sfContext::getInstance()->getModuleName() == "persona_usuario")
        {
            
            //Form enbebido, USUARIO\
            $subForm2 = new sfForm();
            if($this->isNew())
            {
                $usuario = new sfGuardUser();
            } else {
//                $regente = Doctrine::getTable('RegenteFarmaceutico')
//                    ->find(1);
                $usuarios = Doctrine_Query::create()
                    ->from('sfGuardUser u')                    
                    ->where('u.persona_id = ?', $this->getObject()->getId())
                    ->execute();
        
                $usuario = $usuarios[0];
            }
            
            $usuario->Persona = $this->getObject();
            
            $form2 = new sfGuardMyUserAdminForm($usuario);
            $subForm2->embedForm(1, $form2);
            $this->embedForm('usuario', $subForm2);
        }
       /*AJUSTANDO LOS TAMAños*/
        $this->widgetSchema['nombre']->setAttribute('size', 50);
        $this->widgetSchema['ap_materno']->setAttribute('size', 50);
        $this->widgetSchema['ap_paterno']->setAttribute('size', 50);
        $this->widgetSchema['ap_casada']->setAttribute('size', 50);
        $this->widgetSchema['direccion']->setAttribute('size', 50);
        $this->widgetSchema['email']->setAttribute('size', 50);
        
    }
}
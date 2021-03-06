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
    protected $expedido = array(''   => ' - Expedido en - ',
                                'LP' => 'LP',
                                'SC' => 'SC',
                                'CH' => 'CH',
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
        $this->validatorSchema['expedido'] = new sfValidatorString(array('required' => true));
       
        
        $this->widgetSchema['is_active'] = new sfWidgetFormInputHidden(
            array('default'=> true));
       
        $this->validatorSchema['email'] = new sfValidatorEmail(array('required'=> false));

        
        
        if(sfContext::getInstance()->getModuleName() == "perfil")
        {
            /*FOTOGRAFIA*/
  /*           $this->setWidget('foto', new sfWidgetFormInputFileEditable(array(
                  'file_src'    => '/images/users/'.$this->getObject()->getFoto(),
                  'edit_mode'   => !$this->isNew(),
                  'is_image'    => true,
                  'with_delete' => true,
                  'delete_label' => 'Eliminar',

                )));

                $this->setValidator('foto', new sfValidatorFile(array(
                  'mime_types' => 'web_images',
                  'path' => 'images/users',
                  'required' => false,
                  #'validated_file_class' => 'sfValidatedFileCustom'
                )));*/
            $this->widgetSchema['user_id'] = new sfWidgetFormInputHidden();
            
            $this->widgetSchema['foto'] = new sfWidgetFormInputFileEditable(array(
                                                'file_src'  => '', 
                                                'is_image' => true,
                                                'edit_mode' => !$this->isNew(),
                                                'delete_label' => 'Eliminar foto'));

            $this->validatorSchema['foto'] = new sfValidatorFile(array(
                                  'max_size' => 5000000,  
                                  'mime_types' => 'web_images',
                                  'path' => 'images/users',
                                  'required' => false,
                                  'validated_file_class' => 'sfValidatedFileCustom'));
            
            $this->validatorSchema['foto_delete'] = new sfValidatorBoolean();
           
                    
        }
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
        
       /*AJUSTANDO LOS TAMAños*/
        $this->widgetSchema['nombre']->setAttribute('size', 50);
        $this->widgetSchema['ap_materno']->setAttribute('size', 50);
        $this->widgetSchema['ap_paterno']->setAttribute('size', 50);
        $this->widgetSchema['ap_casada']->setAttribute('size', 50);
        $this->widgetSchema['direccion']->setAttribute('size', 50);
        $this->widgetSchema['email']->setAttribute('size', 50);
        
    }
}
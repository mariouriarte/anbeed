<?php

/**
 * sfGuardUserAdminForm for admin generators
 *
 * @package    sfDoctrineGuardPlugin
 * @subpackage form
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfGuardUserAdminForm.class.php 23536 2009-11-02 21:41:21Z Kris.Wallsmith $
 */
class sfGuardUserAdminForm extends BasesfGuardUserAdminForm
{
  /**
   * @see sfForm
   */
    public function configure()
    {
        
        parent::setup();
        
        unset($this['persona_id'],$this['permissions_list'], $this['is_super_admin'] );
        
        unset($this['empresa_id']);

        $this->widgetSchema['groups_list']->setOption('table_method', 'GrupoUsuarios');
        
        $this->validatorSchema['groups_list']->setOption('required', True);
            
        /*embebido merge a la persona*/    
        $persona = new PersonaForm($this->object->Persona);
        unset($persona['user_id']);
        $this->embedMergeForm('Persona', $persona);

    }
}

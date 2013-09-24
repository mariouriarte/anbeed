<?php

/**
 * sfGuardUser form.
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrinePluginFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sfGuardMyUserAdminForm extends sfGuardUserAdminForm
{
    public function configure()
    {
        
        unset($this['persona_id'],$this['permissions_list'], $this['is_super_admin'] );
        
        if(sfContext::getInstance()->getModuleName() == "persona_usuario")
        {
            unset($this['empresa_id']);
            $this->validatorSchema['groups_list']->setOption('required', True);
        }
        if(sfContext::getInstance()->getModuleName() == "cliente_usuario")
        {
            unset($this['groups_list']);
            $this->validatorSchema['empresa_id']->setOption('required', True);
        }
   
    }
} 

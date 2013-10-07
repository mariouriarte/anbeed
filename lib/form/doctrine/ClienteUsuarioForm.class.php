<?php

/**
 * sfGuardUser form.
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrinePluginFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ClienteUsuarioForm extends sfGuardUserAdminForm
{
  public function configure()
  {
      unset($this['persona_id'],$this['permissions_list'], $this['is_super_admin'] );
      unset($this['groups_list']);
            $this->validatorSchema['empresa_id']->setOption('required', True);
  }

  public function save($con = null)
  {
    
    $user = parent::save($con);

    //Guardamos por default como Grupo Cliente,para sus respectivos permisos
    if (!$user->hasGroup('CLIENTE'))
    {
      $user->addGroupByName('CLIENTE');
      $user->save();
    }

    return $user;
  }
}
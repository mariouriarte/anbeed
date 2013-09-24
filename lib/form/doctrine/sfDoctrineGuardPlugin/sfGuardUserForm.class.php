<?php

/**
 * sfGuardUser form.
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrinePluginFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sfGuardUserForm extends PluginsfGuardUserForm
{
  public function configure()
  {
      unset(  $this['persona_id'], $this['algorithm'], 
              $this['salt'], $this['last_login'], 
              $this['created_at'], $this['updated_at'],
              $this['groups_list'],$this['is_super_admin']);
      
      $this->widgetSchema['password'] = new sfWidgetFormInputPassword();
      $this->widgetSchema['password_again'] = new sfWidgetFormInputPassword();
      
//      $cliente = new Cliente();
//      $cliente->setUserId($this->object);
//      $clienteForm = new ClienteForm($cliente);
//      $this->embedForm('NewCliente', $clienteForm);
        
  }
}

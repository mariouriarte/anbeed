<?php

/**
 * sfGuardFormSignin for sfGuardAuth signin action
 *
 * @package    sfDoctrineGuardPlugin
 * @subpackage form
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfGuardFormSignin.class.php 23536 2009-11-02 21:41:21Z Kris.Wallsmith $
 */
class sfGuardFormSignin extends BasesfGuardFormSignin
{
  /**
   * @see sfForm
   */
  public function configure()
  {
      //$this['username'] = new 'userna->setAttribute("class","fieldInput");me' => new sfWidgetFormInputText(),
      $this->widgetSchema['username']->setAttribute("placeholder","Usuario");          
      //$this->widgetSchema['remember']->setAttribute("class","footer_label");          
      unset($this['remember']);  
      //array('placeholder' => 'Add your comment')
  }
}

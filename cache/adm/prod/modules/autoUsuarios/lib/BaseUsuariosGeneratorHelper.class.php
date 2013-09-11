<?php

/**
 * usuarios module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage usuarios
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseUsuariosGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'sf_guard_user_usuarios' : 'sf_guard_user_usuarios_'.$action;
  }
}

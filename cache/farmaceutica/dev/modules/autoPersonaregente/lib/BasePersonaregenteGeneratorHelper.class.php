<?php

/**
 * personaregente module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage personaregente
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasePersonaregenteGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'persona_personaregente' : 'persona_personaregente_'.$action;
  }
}

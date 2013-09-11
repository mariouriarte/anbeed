<?php

/**
 * empresas module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage empresas
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseEmpresasGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'empresa' : 'empresa_'.$action;
  }
}

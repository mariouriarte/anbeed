<?php

require_once dirname(__FILE__).'/../lib/empresasGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/empresasGeneratorHelper.class.php';

/**
 * empresas actions.
 *
 * @package    anbeed
 * @subpackage empresas
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class empresasActions extends autoEmpresasActions
{
    public function executeNew(sfWebRequest $request)
    {
        parent::executeNew($request);
           }
}

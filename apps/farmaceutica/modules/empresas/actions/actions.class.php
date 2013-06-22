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
        $legal_id = new sfWidgetFormSchema(array('representante_legal_id'
            => new sfWidgetFormInput()));
        $legal_id->setDefault('representante_legal_id', $request
                ->getParameter('legal_id'));
        $this->getUser()->setAttribute('legal_id', $legal_id);
    }
}

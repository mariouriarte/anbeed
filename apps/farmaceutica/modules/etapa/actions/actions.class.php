<?php

require_once dirname(__FILE__).'/../lib/etapaGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/etapaGeneratorHelper.class.php';

/**
 * etapa actions.
 *
 * @package    anbeed
 * @subpackage etapa
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class etapaActions extends autoEtapaActions
{
    public function executeListAdmEmpresa(sfWebRequest $request) 
    {
        $user = $this->getUser();
        $empresa = $user->getAttribute('empresa');
        $this->redirect('empresas/administrarEmpresa?id=' . $empresa->getId());
    }
}

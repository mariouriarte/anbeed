<?php

require_once dirname(__FILE__).'/../lib/cosmeticoGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/cosmeticoGeneratorHelper.class.php';

/**
 * cosmetico actions.
 *
 * @package    anbeed
 * @subpackage cosmetico
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class cosmeticoActions extends autoCosmeticoActions
{
    public function executeListAdmEmpresa(sfWebRequest $request)
    {
        $user = $this->getUser();
        $empresa = $user->getAttribute('empresa');
        $this->redirect('/farmaceutica_dev.php/empresas/'.$empresa->getId().'/administrarEmpresa');
    }
    public function executeIrForm516(sfWebRequest $request)
    {
        $user = $this->getUser();
        $this->cosmetico = $this->getRoute()->getObject();
        $user->setAttribute('cosmetico', $this->cosmetico);
        $this->redirect('/farmaceutica_dev.php/formulario516');
    }
}

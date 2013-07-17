<?php

require_once dirname(__FILE__).'/../lib/prodcosGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/prodcosGeneratorHelper.class.php';

/**
 * prodcos actions.
 *
 * @package    anbeed
 * @subpackage prodcos
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class prodcosActions extends autoProdcosActions
{
    public function executeListAdmEmpresa(sfWebRequest $request)
    {
        $user = $this->getUser();
        $empresa = $user->getAttribute('empresa');
        $this->redirect('/farmaceutica_dev.php/empresas/'.$empresa->getId().'/administrarEmpresa');
    }
    public function executeIrForm5(sfWebRequest $request)
    {
        $user = $this->getUser();
        $this->producto = $this->getRoute()->getObject();
        $user->setAttribute('producto', $this->producto);
        $this->redirect('/farmaceutica_dev.php/formulario516');
    }
}

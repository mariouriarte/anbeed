<?php

require_once dirname(__FILE__).'/../lib/noti_clienteGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/noti_clienteGeneratorHelper.class.php';

/**
 * noti_cliente actions.
 *
 * @package    anbeed
 * @subpackage noti_cliente
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class noti_clienteActions extends autoNoti_clienteActions
{
    public function executeListAdmEmpresa(sfWebRequest $request) 
    {
        $user = $this->getUser();
        $empresa = $user->getAttribute('empresa');
        $this->redirect('empresas/administrarEmpresa?id=' . $empresa->getId());
    }
}

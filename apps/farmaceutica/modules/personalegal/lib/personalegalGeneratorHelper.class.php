<?php

/**
 * personalegal module helper.
 *
 * @package    anbeed
 * @subpackage personalegal
 * @author     Your name here
 * @version    SVN: $Id: helper.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class personalegalGeneratorHelper extends BasePersonalegalGeneratorHelper
{
    public function linkToIrEmpresa($object, $params)
    {
        $user = sfContext::getInstance()->getUser();
        $empresa = $user->getAttribute('empresa');
        
        return link_to($params['label'] , 'empresas/administrarEmpresa?id=' . $empresa->getId());
    }
}

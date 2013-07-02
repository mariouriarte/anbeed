<?php

/**
 * personaregente module helper.
 *
 * @package    anbeed
 * @subpackage personaregente
 * @author     Mario Uriarte
 * @version    SVN: $Id: helper.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class personaregenteGeneratorHelper extends BasePersonaregenteGeneratorHelper
{
    
    // para volver a empresa desde los actions 
    // new y edit de personaregente
    public function linkToIrEmpresa($object, $params)
    {
        $user = sfContext::getInstance()->getUser();
        $empresa = $user->getAttribute('empresa');
        
        return link_to($params['label'] , 'empresas/administrarEmpresa?id=' . $empresa->getId());
    }
}

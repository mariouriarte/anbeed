<?php

/**
 * personaregente module helper.
 *
 * @package    anbeed
 * @subpackage personaregente
 * @author     Your name here
 * @version    SVN: $Id: helper.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class personaregenteGeneratorHelper extends BasePersonaregenteGeneratorHelper
{
    public function linkToIrEmpresa($object, $params)
    {
        $user = sfContext::getInstance()->getUser();
        $id_reprelegal = $user->getAttribute('id_reprelegal');
        
        return link_to($params['label'] , 'empresas/new?idprf='. $object->getId()
            . '&idprl='. $id_reprelegal);
//        if($object->getId())
//        {
//        } else {
//            return link_to($params['label'] , 'empresas/new');
//        }
        
    }
}

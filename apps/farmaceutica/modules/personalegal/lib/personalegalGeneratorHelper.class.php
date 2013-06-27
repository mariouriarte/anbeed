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
        //echo $sf_request->get('idprl');
        $user = sfContext::getInstance()->getUser();
        $id_regentefar = $user->getAttribute('id_regentefar');
        
        return link_to($params['label'] , 'empresas/new?idprl='. $object->getId()
            .'&idprf='. $id_regentefar);
//        if($object->getId())    
//        {
//            
//        } else {
//            return link_to($params['label'] , 'empresas/new');
//        }
    }
}

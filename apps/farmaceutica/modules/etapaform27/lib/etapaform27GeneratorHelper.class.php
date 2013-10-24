<?php

/**
 * etapaform27 module helper.
 *
 * @package    anbeed
 * @subpackage etapaform27
 * @author     Your name here
 * @version    SVN: $Id: helper.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class etapaform27GeneratorHelper extends BaseEtapaform27GeneratorHelper
{
    public function linkToNuevo($etapa)
    {   
        $user = sfContext::getInstance()->getUser();
        
        return link_to('Nuevo', 'etapaform27/new?idform='.$user->getAttribute('id_form_etapa'));
    }
}

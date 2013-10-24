<?php

/**
 * etapaform12 module helper.
 *
 * @package    anbeed
 * @subpackage etapaform12
 * @author     Your name here
 * @version    SVN: $Id: helper.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class etapaform12GeneratorHelper extends BaseEtapaform12GeneratorHelper
{
    public function linkToNuevo($etapa)
    {   
        $user = sfContext::getInstance()->getUser();
        
        return link_to('Nuevo', 'etapaform12/new?idform='.$user->getAttribute('id_form_etapa'));
    }
}

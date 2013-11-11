<?php

/**
 * etapaform706 module helper.
 *
 * @package    anbeed
 * @subpackage etapaform706
 * @author     Your name here
 * @version    SVN: $Id: helper.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class etapaform706GeneratorHelper extends BaseEtapaform706GeneratorHelper
{
    public function linkToNuevo($etapa)
    {   
        $user = sfContext::getInstance()->getUser();
        
        return link_to('Nuevo', 'etapaform706/new?idform='.$user->getAttribute('id_form_etapa'));
    }
}

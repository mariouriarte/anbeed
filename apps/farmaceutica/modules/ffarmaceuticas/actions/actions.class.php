<?php

require_once dirname(__FILE__).'/../lib/ffarmaceuticasGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/ffarmaceuticasGeneratorHelper.class.php';

/**
 * ffarmaceuticas actions.
 *
 * @package    anbeed
 * @subpackage ffarmaceuticas
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ffarmaceuticasActions extends autoFfarmaceuticasActions
{
    public function executeBuscar(sfWebRequest $request)
    {
        $this->getResponse()->setContentType('application/json');
        $buscar = $request->getParameter('q');
        $query = Doctrine::getTable('FormaFarmaceutica')
                              ->createQuery('a')
                              ->orWhere('a.nombre LIKE ?', "%$buscar%")
                              ->execute();
        $ffarmaceuticas = array();
        foreach ($query as $ffarmaceutica) {
            $ffarmaceuticas[$ffarmaceutica->getId()] = $ffarmaceutica->getNombre();
        }
 
        return $this->renderText(json_encode($ffarmaceuticas));
    }
}

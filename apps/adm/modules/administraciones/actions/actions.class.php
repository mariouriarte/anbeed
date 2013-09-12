<?php

require_once dirname(__FILE__).'/../lib/administracionesGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/administracionesGeneratorHelper.class.php';

/**
 * administraciones actions.
 *
 * @package    anbeed
 * @subpackage administraciones
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class administracionesActions extends autoAdministracionesActions
{
    public function executeListIrPortal(sfWebRequest $request)
    {
        $env = '';
        if(sfConfig::get('sf_environment') == 'dev')
        {
            $env = '_dev';
        } 
        $this->redirect('/portal'.$env.'.php/inicio/index');
    }
    
    public function executeBuscar(sfWebRequest $request)
    {
        $this->getResponse()->setContentType('application/json');
        $buscar = $request->getParameter('q');
        $query = Doctrine::getTable('ViaAdministracion')
                              ->createQuery('a')
                              ->orWhere('a.nombre LIKE ?', "%$buscar%")
                              ->execute();
        $administracions = array();
        foreach ($query as $administracion) {
            $administracions[$administracion->getId()] = $administracion->getNombre();
        }
 
        return $this->renderText(json_encode($administracions));
    }
}

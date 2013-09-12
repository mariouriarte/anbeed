<?php

require_once dirname(__FILE__).'/../lib/tventasGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/tventasGeneratorHelper.class.php';

/**
 * tventas actions.
 *
 * @package    anbeed
 * @subpackage tventas
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class tventasActions extends autoTventasActions
{
    public function executeListIrPortal(sfWebRequest $request)
    {
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
        $query = Doctrine::getTable('TipoVenta')
                              ->createQuery('a')
                              ->orWhere('a.nombre LIKE ?', "%$buscar%")
                              ->execute();
        $ventas = array();
        foreach ($query as $venta) {
            $ventas[$venta->getId()] = $venta->getNombre();
        }
 
        return $this->renderText(json_encode($ventas));
    }
}

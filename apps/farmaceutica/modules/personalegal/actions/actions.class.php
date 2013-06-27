<?php

require_once dirname(__FILE__).'/../lib/personalegalGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/personalegalGeneratorHelper.class.php';

/**
 * personalegal actions.
 *
 * @package    anbeed
 * @subpackage personalegal
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class personalegalActions extends autoPersonalegalActions
{
    public function executeNew(sfWebRequest $request)
    {
        parent::executeNew($request);
        
        $user = $this->getUser();
        
        if($request->hasParameter('idprf'))
        {
            $user->setAttribute('id_regentefar', $request->getParameter('idprf')) ;
        }
    }
    
    public function executeEdit(sfWebRequest $request)
    {
        parent::executeEdit($request);
        
        $user = $this->getUser();
        
        if($request->hasParameter('idprf'))
        {
            $user->setAttribute('id_regentefar', $request->getParameter('idprf')) ;
        }
    }
    
    public function executeBuscar($request)
    {
        $this->getResponse()->setContentType('application/json');
        $buscar = $request->getParameter('q');
// Obtenemos los representante legal registrados en el sistema, coincidiendo las busqueda con el nombre apellido paterno o materno
       $query = Doctrine::getTable('RepresentanteLegal')
                              ->createQuery('a')
                              ->innerJoin('a.Persona p')
                              ->orWhere('p.nombre LIKE ?', "%$buscar%")
                              ->orWhere('p.ap_paterno LIKE ?', "%$buscar%")
                              ->orWhere('p.ap_materno LIKE ?', "%$buscar%")
                              ->execute();
        $representantes = array();
        foreach ($query as $representante) {
            $nombre_completo = strtoupper($representante->getPersona()->getNombre()." ".$representante->getPersona()->getApPaterno()." ".$representante->getPersona()->getApMaterno());
            $representantes[$representante->getId()] = (string)($nombre_completo);
        }
        return $this->renderText(json_encode($representantes));
    }
}

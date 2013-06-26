<?php

require_once dirname(__FILE__).'/../lib/personaregenteGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/personaregenteGeneratorHelper.class.php';

/**
 * personaregente actions.
 *
 * @package    anbeed
 * @subpackage personaregente
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class personaregenteActions extends autoPersonaregenteActions
{
    
    public function executeEdit(sfWebRequest $request)
    {
//       $this->persona = $this->getRoute()->getObject();
//       $this->form = $this->configuration->getForm($this->persona);
        parent::executeEdit($request);
       
       $this->regente = $this->persona->getRegenteFarmaceutico();
//       $this->form2 = $this->configuration->getForm($this->regente);
       
    }
    public function executeBuscar($request)
    {
        $this->getResponse()->setContentType('application/json');
        $buscar = $request->getParameter('q');
//      Obtenemos los regente farmaceutico registrados en el sistema, coincidiendo las busqueda con el nombre apellido paterno o materno
         $query  = Doctrine::getTable('RegenteFarmaceutico')
                              ->createQuery('a')
                              ->innerJoin('a.Persona p')
                              ->orWhere('p.nombre LIKE ?', "%$buscar%")
                              ->orWhere('p.ap_paterno LIKE ?', "%$buscar%")
                              ->orWhere('p.ap_materno LIKE ?', "%$buscar%")
                              ->execute();
        $regentes = array();
        //var_dump($query);
        foreach ($query as $regente) {
            $nombre_completo = strtoupper($regente->getPersona()->getNombre()." ".$regente->getPersona()->getApPaterno()." ".$regente->getPersona()->getApMaterno());
            $regentes[$regente->getId()] = (string)($nombre_completo);
        }
        //var_dump($personas);
        return $this->renderText(json_encode($regentes));
        
        
        
    }
    
}

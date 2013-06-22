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

//        $query = PersonaTable::getInstance()->buscarPersonasQuery(
//            $request->getParameter('q'),
//            $request->getParameter('limit')
//        );
        $query  = Doctrine::getTable('Persona')
                              ->createQuery('a')
                              ->orWhere('a.nombre LIKE ?', "%$buscar%")
                              ->orWhere('a.ap_paterno LIKE ?', "%$buscar%")
                              ->orWhere('a.ap_materno LIKE ?', "%$buscar%")
                              ->execute();

        $personas = array();
        //var_dump($personas);
        foreach ($query as $persona) {
            $nombre_completo = strtoupper($persona->getNombre()." ".$persona->getApPaterno()." ".$persona->getApMaterno());
            $personas[$persona->getId()] = (string)($nombre_completo);
        }
        //var_dump($personas);
        return $this->renderText(json_encode($personas));
    }
    
}

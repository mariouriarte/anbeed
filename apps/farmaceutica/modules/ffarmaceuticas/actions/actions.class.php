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
        //construimos la consulta
        $query = "SELECT * FROM forma_farmaceutica where nombre ILIKE '%$buscar%'";
        //obtenemos el singleton de la conexión
        $con = Doctrine_Manager::getInstance()->connection();
        //ejecutamos la consulta    
        $query = $con->execute($query);
        $ffarmaceuticas = array();
        foreach ($query as $ffarmaceutica) {
            $ffarmaceuticas[$ffarmaceutica['id']] = $ffarmaceutica['nombre'];
        }
 
        return $this->renderText(json_encode($ffarmaceuticas));
    }
}

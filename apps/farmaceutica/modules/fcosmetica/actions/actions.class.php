<?php

require_once dirname(__FILE__).'/../lib/fcosmeticaGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/fcosmeticaGeneratorHelper.class.php';

/**
 * fcosmetica actions.
 *
 * @package    anbeed
 * @subpackage fcosmetica
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class fcosmeticaActions extends autoFcosmeticaActions
{
    public function executeBuscar(sfWebRequest $request)
    {
        $this->getResponse()->setContentType('application/json');
        $buscar = $request->getParameter('q');
        //construimos la consulta
        $query = "SELECT * FROM forma_cosmetica where nombre ILIKE '%$buscar%'";
        //obtenemos el singleton de la conexión
        $con = Doctrine_Manager::getInstance()->connection();
        //ejecutamos la consulta    
        $query = $con->execute($query);
        $fcosmeticas = array();
        foreach ($query as $fcosmetica) {
            $fcosmeticas[$fcosmetica['id']] = $fcosmetica['nombre'];
        }
 
        return $this->renderText(json_encode($fcosmeticas));
     }
}

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
    public function executeBuscar(sfWebRequest $request)
    {
        $this->getResponse()->setContentType('application/json');
        $buscar = $request->getParameter('q');
        //construimos la consulta
        $query = "SELECT * FROM tipo_venta where nombre ILIKE '%$buscar%'";
        //obtenemos el singleton de la conexión
        $con = Doctrine_Manager::getInstance()->connection();
        //ejecutamos la consulta    
        $query = $con->execute($query);
        $ventas = array();
        foreach ($query as $venta) {
            $ventas[$venta  ['id']] = $venta['nombre'];
        }
 
        return $this->renderText(json_encode($ventas));
     }
}
